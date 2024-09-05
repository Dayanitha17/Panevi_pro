const $next = document.querySelector('.next');
    const $prev = document.querySelector('.prev');
    const items = document.querySelectorAll('.item');
    let currentIndex = 0;

    // Función para mostrar la siguiente imagen
    function showNextImage() {
        currentIndex = (currentIndex + 1) % items.length;
        document.querySelector('.slide').appendChild(items[currentIndex]);
    }

    // Función para mostrar la imagen anterior
    function showPrevImage() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        document.querySelector('.slide').prepend(items[currentIndex]);
    }

    // Agregar eventos a los botones
    $next.addEventListener('click', showNextImage);
    $prev.addEventListener('click', showPrevImage);

    // Cambiar automáticamente las imágenes cada 3 segundos
    setInterval(showNextImage, 3000); // Cambia la imagen cada 3 segundos