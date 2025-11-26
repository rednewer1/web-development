const box = document.querySelector('.box');
const button = document.querySelector('.toggleBtn');

button.addEventListener('click', function() {
    box.classList.toggle('hidden');
});