const texx = document.getElementById("text");
const selectElement = document.getElementById("colorSelect");

selectElement.addEventListener("change", function () {
    const selectedColor = selectElement.value; 
    texx.style.color = selectedColor;    
});
