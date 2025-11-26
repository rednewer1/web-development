const title = document.querySelector('.clickme');
const button = document.querySelector('.changebutton');

button.addEventListener('click', function(){
    title.classList.toggle('highlight');
});