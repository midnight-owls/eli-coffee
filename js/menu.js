document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".card");
  const cartButton = document.querySelector(".btn-cart");
  const cartContainer = document.querySelector(".cart_container");
  const cartCloseButton = document.querySelector(".cart_close");
  const cartItemsContainer = document.querySelector(".cart_items");
  const cartTotal = document.getElementById("cart-total");
  const clearCartButton = document.querySelector(".clear-cart");
  const checkOutButton = document.querySelector(".checkout");

  let cart = JSON.parse(localStorage.getItem("cart")) || {};

  const updateCart = (itemId, productName, quantity, price) => {
    if (quantity > 0) {
      cart[itemId] = { productName, quantity, price };
    } else {
      delete cart[itemId];
    }
    localStorage.setItem("cart", JSON.stringify(cart));
  };

  const loadCartItems = () => {
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
  };

  const resetQuantitiesInDOM = () => {
    items.forEach((item) => {
      const quantitySpan = item.querySelector(".quantity");
      quantitySpan.textContent = ""; // Clear the quantity display
      quantitySpan.classList.add("hidden"); // Hide the quantity span
      const priceSpan = item.querySelector(".price");
      const pricePerItem = parseFloat(priceSpan.getAttribute("data-price"));
      priceSpan.textContent = `₱ ${pricePerItem.toFixed(2)}`; // Reset price display
    });
  };

  items.forEach((item) => {
    const itemId = item.getAttribute("data-item-id");
    const btnPlus = item.querySelector(".btn-plus");
    const btnMinus = item.querySelector(".btn-minus");
    const quantitySpan = item.querySelector(".quantity");
    const priceSpan = item.querySelector(".price");

    let quantity = cart[itemId] ? cart[itemId].quantity : 0; // Initialize quantity from cart
    const pricePerItem = parseFloat(priceSpan.getAttribute("data-price"));

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

    updateDisplay(); // Initial display update
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

  clearCartButton.addEventListener("click", () => {
    cart = {};
    localStorage.removeItem("cart");
    loadCartItems();
    resetQuantitiesInDOM(); // Reset quantities in the DOM
    location.reload();
  });

  checkOutButton.addEventListener("click", () => {
    if (Object.keys(cart).length > 0) {
      const cartData = Object.values(cart).map((item) => ({
        productName: item.productName,
        quantity: item.quantity,
      }));

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
