<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
.footer {
    background-color: black;
    color: white;
    padding: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0; /* Empieza oculto */
    transition: opacity 0.2s ease-in-out; /* Agrega una transición para que aparezca suavemente */
  }
  
  .footer-content a {
    text-decoration: none;
    color: aliceblue;

  }


  /* Agrega una clase 'show' para hacer que el footer aparezca */
  .footer.show {
    opacity: 1;
  }
</style>
 
 <div class="footer">
     <div class="footer-content">
         <a href="mailto:cronopiacontorsiones@hotmail.com"><?php echo "cronopiacontorsiones@hotmail.com"; ?></p>
         <a><?php echo "Tel: (0039) 3463108046"; ?></a>
     </div>
 </div>



</body>

<script>
document.addEventListener("DOMContentLoaded", function() {
 let prevScrollpos = window.pageYOffset;
 let navigateElement = document.getElementById("navigate");

 // Agregar el evento "scroll" al objeto window
 window.addEventListener("scroll", function() {
     let currentScrollPos = window.pageYOffset + 10;

     if (prevScrollpos > currentScrollPos) {
         // Si se está desplazando hacia arriba, cambiar la clase a "nav"
         navigateElement.setAttribute("id", "navigate");


     } else {
         // Si se está desplazando hacia abajo, cambiar la clase a "navigate"
         navigateElement.setAttribute("id", "nav");

         // Agregar un setTimeout para revertir el cambio después de 3 segundos

     }
     prevScrollpos = currentScrollPos;
     console.log(prevScrollpos);
 });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
 let footerElement = document.querySelector(".footer");

 // Función para mostrar u ocultar el footer
 function toggleFooter() {
     const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
     const windowHeight = window.innerHeight;
     const documentHeight = Math.max(
         document.body.scrollHeight,
         document.body.offsetHeight,
         document.documentElement.clientHeight,
         document.documentElement.scrollHeight,
         document.documentElement.offsetHeight
     );

     if (scrollTop + windowHeight >= documentHeight - 50) {
         footerElement.classList.add("show");
     } else {
         footerElement.classList.remove("show");
     }
 }

 // Agrega el evento scroll
 window.addEventListener("scroll", toggleFooter);

 // Llama a la función al cargar la página para mostrar u ocultar el footer según la posición inicial
 toggleFooter();
});
</script>



</html>