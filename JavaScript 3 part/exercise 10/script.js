const list = document.getElementById("itemList");
const addButton = document.getElementById("addBtn");

list.addEventListener("click", function(event) {
    if (event.target.tagName === "LI") {
        event.target.textContent = "Нажато!";
        event.target.classList.add("clicked");
    }
});

addButton.addEventListener("click", function() {
    const newItem = document.createElement("li");
    newItem.textContent = `Новый пункт`;
    list.appendChild(newItem);
});
