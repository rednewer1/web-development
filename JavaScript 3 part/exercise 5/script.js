const images = [
    "https://i.pinimg.com/736x/da/e1/5b/dae15b7f4f04018ba473b05b1c75d9e5.jpg",
    "https://i.pinimg.com/736x/3d/1d/d7/3d1dd746ed1a2212366c956f91eb6fe1.jpg",
    "https://i.pinimg.com/736x/9c/9e/2b/9c9e2b522b340ae9163ac2170b0bf080.jpg"
];

let currentImageIndex = 0;
const img = document.querySelector('.image');
const button = document.querySelector('.btn');

button.addEventListener('click', function() {
    currentImageIndex++;

    if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }

    img.src = images[currentImageIndex];
});
