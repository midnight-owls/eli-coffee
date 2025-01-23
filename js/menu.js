document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".card");

  const updateCart = (itemId, quantity, price) => {
    let cart = JSON.parse(localStorage.getItem("cart")) || {};
    if (quantity > 0) {
      cart[itemId] = { quantity, price };
    } else {
      delete cart[itemId];
    }
    localStorage.setItem("cart", JSON.stringify(cart));
  };

  items.forEach((item) => {
    const itemId = item.getAttribute("data-item-id");
    const btnPlus = item.querySelector(".btn-plus");
    const btnMinus = item.querySelector(".btn-minus");
    const quantitySpan = item.querySelector(".quantity");
    const priceSpan = item.querySelector(".price");

    let quantity = 0;
    const pricePerItem = parseFloat(priceSpan.textContent.trim());

    const updateDisplay = () => {
      const totalPrice = (quantity * pricePerItem).toFixed(2);

      if (quantity > 0) {
        quantitySpan.textContent = `${quantity}x `;
        quantitySpan.classList.remove("hidden");
        priceSpan.textContent = `₱ ${totalPrice}`;
      } else {
        quantitySpan.classList.add("hidden");
        priceSpan.textContent = `₱ ${pricePerItem.toFixed(2)}`;
      }
    };

    btnPlus.addEventListener("click", () => {
      quantity++;
      updateDisplay();
      updateCart(itemId, quantity, pricePerItem);
    });

    btnMinus.addEventListener("click", () => {
      if (quantity > 0) {
        quantity--;
      }
      updateDisplay();
      updateCart(itemId, quantity, pricePerItem);
    });

    updateDisplay();
  });
});

const cartButton = document.querySelector(".btn-cart");
const cartContainer = document.querySelector(".cart_container");
const cartCloseButton = document.querySelector(".cart_close");
const cartItemsContainer = document.querySelector(".cart_items");
const cartTotal = document.getElementById("cart-total");
const clearCartButton = document.querySelector(".clear-cart");
const checkOutButton = document.querySelector(".checkout");

const addToCartButtons = document.querySelectorAll(".btn-plus");
const removeFromCartButtons = document.querySelectorAll(".btn-minus");

let cart = JSON.parse(localStorage.getItem("cart")) || {};

addToCartButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    const card = e.target.closest(".card");
    const itemId = card.dataset.itemId;
    const productName = card.querySelector(".card-text").textContent;

    const priceText = card.querySelector(".price").textContent.trim();
    const price = parseFloat(priceText.replace(/[^0-9.-]+/g, ""));

    if (cart[itemId]) {
      cart[itemId].quantity += 1;
    } else {
      cart[itemId] = {
        productName,
        price,
        quantity: 1,
      };
    }

    localStorage.setItem("cart", JSON.stringify(cart));
  });
});

removeFromCartButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    const card = e.target.closest(".card");
    const itemId = card.dataset.itemId;

    if (cart[itemId]) {
      cart[itemId].quantity -= 1;

      if (cart[itemId].quantity <= 0) {
        delete cart[itemId];
      }

      localStorage.setItem("cart", JSON.stringify(cart));
    }
  });
});

cartButton.addEventListener("click", () => {
  cartContainer.classList.add("active");
  loadCartItems();
});

cartCloseButton.addEventListener("click", () => {
  cartContainer.classList.remove("active");
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    cartContainer.classList.remove("active");
  }
});

function loadCartItems() {
  cartItemsContainer.innerHTML = "";
  let totalPrice = 0;

  for (const itemId in cart) {
    const { productName, price, quantity } = cart[itemId];

    const itemElement = document.createElement("div");
    itemElement.className = "cart-item";
    itemElement.innerHTML = `
      <p>${productName} (x${quantity})</p>
      <p>₱ ${(price * quantity).toFixed(2)}&nbsp;</p>
    `;

    cartItemsContainer.appendChild(itemElement);
    totalPrice += price * quantity;
  }

  cartTotal.textContent = `Total: ₱ ${totalPrice.toFixed(2)}`;
}

clearCartButton.addEventListener("click", () => {
  cart = {};
  localStorage.removeItem("cart");
  loadCartItems();
});

document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".card");
  let cart = {}; // To store the products in the cart

  // Function to update the cart and store it in localStorage
  const updateCart = (itemId, productName, quantity, price) => {
    if (quantity > 0) {
      cart[itemId] = { productName, quantity, price };
    } else {
      delete cart[itemId];
    }
    localStorage.setItem("cart", JSON.stringify(cart)); // Save cart in localStorage
  };

  items.forEach((item) => {
    const itemId = item.getAttribute("data-item-id");
    const btnPlus = item.querySelector(".btn-plus");
    const btnMinus = item.querySelector(".btn-minus");
    const quantitySpan = item.querySelector(".quantity");
    const priceSpan = item.querySelector(".price");

    let quantity = 0;
    const pricePerItem = parseFloat(priceSpan.getAttribute("data-price")); // Get the raw price from the data-price attribute

    const updateDisplay = () => {
      const totalPrice = (quantity * pricePerItem).toFixed(2);

      if (quantity > 0) {
        quantitySpan.textContent = `${quantity}x `;
        quantitySpan.classList.remove("hidden");
        priceSpan.textContent = `₱ ${totalPrice}`;
      } else {
        quantitySpan.classList.add("hidden");
        priceSpan.textContent = `₱ ${pricePerItem.toFixed(2)}`;
      }
    };

    btnPlus.addEventListener("click", () => {
      quantity++;
      updateDisplay();
      updateCart(
        itemId,
        item.querySelector(".card-text").textContent,
        quantity,
        pricePerItem
      );
    });

    btnMinus.addEventListener("click", () => {
      if (quantity > 0) {
        quantity--;
      }
      updateDisplay();
      updateCart(
        itemId,
        item.querySelector(".card-text").textContent,
        quantity,
        pricePerItem
      );
    });

    updateDisplay();
  });

  // Checkout button event listener
  const checkoutButton = document.querySelector(".checkout");
  checkoutButton.addEventListener("click", () => {
    if (Object.keys(cart).length > 0) {
      // Prepare the cart data to send to the server
      const cartData = Object.values(cart).map((item) => ({
        productName: item.productName,
        quantity: item.quantity,
      }));

      // Send the data to the PHP script to update the database
      fetch("update-sold.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ cartData }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert("Checkout successful!");
            localStorage.removeItem("cart");
            window.location.href = "menu.php";
          } else {
            alert("Error updating database!");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      alert("Your cart is empty!");
    }
  });
});

const items = document.querySelectorAll(".card"); // Get all items again to reset quantities

clearCartButton.addEventListener("click", () => {
  cart = {};
  localStorage.removeItem("cart");
  loadCartItems();

  // Clear quantity display for each item
  items.forEach((item) => {
    const quantitySpan = item.querySelector(".quantity");
    quantitySpan.textContent = ""; // Clear the quantity display
    quantitySpan.classList.add("hidden"); // Hide the quantity span
    const priceSpan = item.querySelector(".price");
    const pricePerItem = parseFloat(priceSpan.getAttribute("data-price"));
    priceSpan.textContent = `₱ ${pricePerItem.toFixed(2)}`; // Reset price display
  });
});
