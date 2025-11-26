const form = document.querySelector('.forma');
const textfield = document.querySelector('.textfield');
const emailfield = document.querySelector('.emailfield');
const button = document.querySelector('.btn');
const message = document.querySelector('.errmessage');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    message.textContent = "";
    message.style.color = "";
    if (textfield.value.trim() === "" || emailfield.value.trim() === "") {
        message.textContent = "Поля не должны быть пустыми!";
        message.style.color = "red";
        return;
    }

    message.textContent = "Форма успешно отправлена (в консоль)!";
    message.style.color = "green";

    const formData = new FormData(form);
    for (let [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }
});