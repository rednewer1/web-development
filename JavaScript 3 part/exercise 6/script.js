const ul = document.querySelector('.spis');
const button = document.querySelector('.btn');

button.addEventListener('click', function() {
    const last = ul.lastElementChild;

    if (last) {
        ul.removeChild(last);
    }
});