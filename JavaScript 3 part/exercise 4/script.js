let count = 0;
const span = document.querySelector('.counter');
const button = document.querySelector('.btn');

button.addEventListener('click', function(){
    count += 1;
    span.textContent = 'Счётчик: ' + count;
});