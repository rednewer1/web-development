const spis = document.querySelector('.spisok');
const texxt = document.querySelector('.text');
const button = document.querySelector('.addarticle');

button.addEventListener('click', function(){
    const li = document.createElement('li');
    li.textContent = texxt.value;
    spis.appendChild(li);
    texxt.value = '';
});