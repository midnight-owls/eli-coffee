const coffee_name = document.getElementById("coffee-1");
let edit_btn = document.getElementById("edit-btn");


edit_btn.onclick = function() {
    window.alert(coffee_name.textContent);
}