const title = document.querySelector('.headline');
const button = document.querySelector('.changetitlebutton');

button.addEventListener('click', function(){
    title.textContent = 'Заголовок изменен!';
});