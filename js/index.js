
const sliderImages = document.querySelectorAll(".slider-image");
let currentImageIndex = 0;
let timer;

function showImage(index) {
  // Ocultar la imagen actual
  sliderImages[currentImageIndex].style.opacity = 0;

  // Mostrar la imagen especificada por el índice
  sliderImages[index].style.opacity = 1;

  // Actualizar el índice de la imagen actual
  currentImageIndex = index;
}

function showNextImage() {
  const newIndex = (currentImageIndex + 1) % sliderImages.length;
  showImage(newIndex);
}

function startTimer() {
  timer = setInterval(showNextImage, 5000);
}

function stopTimer() {
  clearInterval(timer);
}

document
  .getElementById("prevButton")
  .addEventListener("click", function () {
    const newIndex =
      (currentImageIndex - 1 + sliderImages.length) % sliderImages.length;
    showImage(newIndex);
    stopTimer();
    startTimer();
  });

document
  .getElementById("nextButton")
  .addEventListener("click", function () {
    const newIndex = (currentImageIndex + 1) % sliderImages.length;
    showImage(newIndex);
    stopTimer();
    startTimer();
  });

// Función para mostrar la primera imagen al cargar la página
showImage(currentImageIndex);
startTimer();
