<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
        src="https://kit.fontawesome.com/a32d0a86a9.js"
         crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="stylesIndex.css">
        <title>Arte & Mana - Diseños personalizados</title>
    </head>
    </html>

    <body>
        <div class="NavBar">
            <div class="LogoImage">
                <a href="index.php"><img src="images/LogoArteMana.png" alt="El logo de Arte y Mana"></a>
            </div>
            <div class="EsloganImg">
                <img src="images/palceholder.png" alt="El eslogan de la marca">
            </div>
            <div class="LoginZone">
                <a href="login.php"><h6>Inicia sesion</h6></a>
            <i class="fa-solid fa-user"></i>
            </div>
            
        </div>
        <div class="SubNavBar">
            <a href="index.php">Inicio</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="galeria.php">Galería</a>
            <a href="pedido.php">Haz un pedido</a>
        </div>

        <div class="carousel">
            <div class="carousel-images">
                <img src="images/palceholder.png" alt="Imagen 1">
                <img src="images/palceholder.png" alt="Imagen 2">
                <img src="images/palceholder.png" alt="Imagen 3">
            </div>
        <button class="prev-btn">❮</button>
        <button class="next-btn">❯</button>
    </div>

    <div class="Foot">
        <div class="social-media">
            <div class="SocialMediaText">
                <p>Siguenos en nuestras redes</p>
            </div>
            <div class="SocialIcons">
                <a href="https://www.instagram.com" target="Blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/" target="blank"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        

    </div>

    </body>
</html>

<script>

const carouselImages = document.querySelector('.carousel-images');
const images = document.querySelectorAll('.carousel-images img');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let index = 0;

// Función para actualizar la posición del carrusel
function updateCarousel() {
    const imageWidth = images[0].clientWidth; // Ancho de una imagen
    carouselImages.style.transform = `translateX(${-index * imageWidth}px)`;
}

// Botón siguiente
nextBtn.addEventListener('click', () => {
    index = (index + 1) % images.length; // Cicla al inicio
    updateCarousel();
});

// Botón previo
prevBtn.addEventListener('click', () => {
    index = (index - 1 + images.length) % images.length; // Cicla al final
    updateCarousel();
});

// Ajusta la posición al redimensionar
window.addEventListener('resize', updateCarousel);

    </script>
