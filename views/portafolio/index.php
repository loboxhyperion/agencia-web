<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce a WebGenio Pro, expertos en diseño y desarrollo web en Colombia y España. Descubre por qué somos la mejor opción para llevar tu negocio al éxito digital.">
    <title>Sobre Nosotros - Code Enchanters</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="style.css"> -->
   <link rel="stylesheet" href="../../assets/css/base.css">
   <link rel="stylesheet" href="../../assets/css/menu.css">
   <link rel="stylesheet" href="../../assets/css/portafolio.css">
   <link rel="stylesheet" href="../../assets/css/footer.css">
   <link rel="stylesheet" href="../../assets/css/whatsapp.css">
</head>

<body>
    <a href="https://wa.me/573148056989?text=Hola!%20Quisiera%20más%20información%20sobre%20tus%20servicios%20de%20páginas%20web." class="float" target="_blank">
        <i class="fa-brands fa-whatsapp my-float"></i>
    </a>

    <!-------------------------------------------- MENU------------------------------------------------------>
    <!-------------------------------------------- MENU------------------------------------------------------>
    <!-------------------------------------------- MENU------------------------------------------------------>
    
    <?php include('../../layout/menu.php'); ?>
    
    <!-------------------------------------------- PORTAFOLIO------------------------------------------------------>
    <!-------------------------------------------- PORTAFOLIO------------------------------------------------------>
    <!-------------------------------------------- PORTAFOLIO------------------------------------------------------>
    <section class="portafolio active" id="portafolio">
        

        <div class="portada">
            <h1>Portafolio de diseño web</h1>
            <h2>Aquí puedes ver algunas de nuestras páginas web hechas por nuestro equipo</h2>
        </div>

        <div class="contenido">

            <form class="buscador" action="">
                <input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
            </form>
    
            <div class="categorias" id="categorias">
                    <a href="#" class="activo">Todos</a>
                    <a href="#">Landing Pages</a>
                    <a href="#">Web Personalizada</a>
                    <a href="#">Wordpress</a>
            </div>
    
            <div class="grid" id="grid">
                <div class="item" 
                    data-categoria="landing pages" 
                    data-etiquetas="Landing Pages landing pages  basica"
                    data-decripcion="1. Lorem Ipsum is simply dummy text"
                >
                    <div class="item-content">
                        <img src="../../assets/img/animal1.png" alt="">
                    </div>
                </div>
    
                <div class="item" 
                    data-categoria="web perzonalizada" 
                    data-etiquetas="Web Personalizada web perzonalizada"
                    data-decripcion="2. Lorem Ipsum is simply dummy text"
                >
                    <div class="item-content">
                        <img src="../../assets/img/animal1.png" alt="">
                    </div>
                </div>
    
                <div class="item" 
                    data-categoria="paisajes" 
                    data-etiquetas="paisajes montañas mar playas"
                    data-decripcion="3. Lorem Ipsum is simply dummy text"
                >
                    <div class="item-content">
                        <img src="../../assets/img/animal1.png" alt="">
                    </div>
                </div>
    
                <div class="item" 
                    data-categoria="animales" 
                    data-etiquetas="animales leones"
                    data-decripcion="4. Lorem Ipsum is simply dummy text"
                >
                    <div class="item-content">
                        <img src="../../assets/img/animal1.png" alt="">
                    </div>
                </div>

                <div class="item" 
                    data-categoria="animales" 
                    data-etiquetas="animales leones"
                    data-decripcion="4. Lorem Ipsum is simply dummy text"
                >
                    <div class="item-content">
                        <img src="../../assets/img/animal1.png" alt="">
                    </div>
                </div>

                <div class="item" 
                    data-categoria="animales" 
                    data-etiquetas="animales leones"
                    data-decripcion="4. Lorem Ipsum is simply dummy text"
                >
                    <div class="item-content">
                        <img src="../../assets/img/animal1.png" alt="">
                    </div>
                </div>
            
            </div>

        </div>
        
    </section>
 <!--------------------------------------------CONTACTO------------------------------------------------------>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <footer>

        <!--------------------------------------------POLITICAS------------------------------------------------->
        <!--------------------------------------------POLITICAS------------------------------------------------------>
        <?php include('../../layout/footer.php'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/cb0cf16444.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
   <script src="../../assets/js/portafolio.js"></script>   
</body>
</html>
