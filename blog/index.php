<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Enchanters</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/whatsapp.css">
</head>
<body>
<main class="main-content">
    <a href="https://api.whatsapp.com/send?phone=3108701604&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fa-brands fa-whatsapp my-float"></i>
    </a>
    <!-------------------------------------------- MENU------------------------------------------------------>
    <!-------------------------------------------- MENU------------------------------------------------------>
    <!-------------------------------------------- MENU------------------------------------------------------>

    <?php include('layout/menu.php'); ?>

      <!--PROJECTS -->
      <section class="articles">
        <div class="info">
            <h1>Mantente informado en nuestro blog</h1>
            <p>Mantente al día con las últimas tendencias y consejos sobre diseño web, desarrollo web, SEO, SEM y estrategias digitales. En nuestro blog, compartimos información valiosa para ayudarte a mejorar tu presencia en línea y hacer crecer tu negocio.</p>
        </div>

        <div class="list">

            <div class="item">
                <div class="item-img">
                    <img src="assets/img/2.jpg" alt="">
                </div>
                <div class="content">
                    <h2>¿Qué es el SEO?</h2>
                    <p>En la era digital, la visibilidad en línea es la clave del éxito empresarial, y la traducción SEO emerge como una herramienta esencial para conquistar</p>
                    <div class="ver-mas">
                        <a href="views/articulos/index.php">LEER MÁS...</a>
                    </div>
                </div>
                <div class="date">
                    <span>15 abril 2024</span>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="assets/img/2.jpg" alt="">
                </div>
                <div class="content">
                    <h2>¿Qué es el SEO?</h2>
                    <p>En la era digital, la visibilidad en línea es la clave del éxito empresarial, y la traducción SEO emerge como una herramienta esencial para conquistar</p>
                    <div class="ver-mas">
                        <a href="views/articulos/index.php">LEER MÁS...</a>
                    </div>
                </div>
                <div class="date">
                    <span>15 abril 2024</span>
                </div>
            </div>

        </div>
        
    </section>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <footer>
        <section class="contact" id="contact">
            <div class="contact-content">
                <div class="contact-resume">
                    <h2>Contacto</h2>
                    <P>¿Listo para llevar tu negocio al siguiente nivel? Contáctanos hoy mismo para hablar sobre, cómo podemos ayudarte con nuestras soluciones digitales integrales. Estamos aquí para responder a todas tus preguntas y proporcionarte el mejor servicio.</P>
                    <!-- <p class="contact_mail"><strong>info@codeenchanters.com</strong></p> -->
                </div>
                <div class="contact-form">
                    <form id="myForm" action="../procesar_formulario.php" class="formulario" method="POST">
                        <input type="text" placeholder="Nombre" id="nombre" name="nombre" required >
                        <input type="email" placeholder="Correo" id="correo" name="email" required class="email">
                        <textarea name="mensaje" id="mensaje" placeholder="Mensaje:"></textarea>
                        <div class="derecha">
                                <input class="btn derecha" type="submit" value="Contactar" name="submmit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--------------------------------------------POLITICAS------------------------------------------------->
        <!--------------------------------------------POLITICAS------------------------------------------------------>
        <section class="politicas">
            <div class="privacidad">
                <a href="">Aviso Legal</a>
                <a href="">Políticas de Privacidad</a>
                <a href="">Políticas de Cookies</a>
            </div>
            <div class="redes">
                <div class="content">
                    <h3>Consulta en nuestras redes sociales</h3>
                    <p>Para más información y novedades</p>
                </div>
                <div class="social">
                    <a href="https://www.instagram.com/codee_enchanters/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/code-enchanters/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/people/Code-Enchanters/pfbid029TNHgvCN7NpKrgybe4wTkLEuoeAGtkZ8zFHP94fYwJerFMTXs6B4C6ZroGmrhggPl/"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div class="brand">
                <img src="../assets/img/logo.png" alt="logo" class="logo">
            </div>
        </section>
    </footer>
</main>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>   
</body>

</html>