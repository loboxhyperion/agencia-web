</html>
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
   <link rel="stylesheet" href="../../css/base.css">
   <link rel="stylesheet" href="../../css/menu.css">
   <link rel="stylesheet" href="../../css/contact.css">
   <link rel="stylesheet" href="../../css/footer.css">
   <link rel="stylesheet" href="../../css/whatsapp.css">
</head>

<body>
    <a href="https://wa.me/573148056989?text=Hola!%20Quisiera%20más%20información%20sobre%20tus%20servicios%20de%20páginas%20web." class="float" target="_blank">
        <i class="fa-brands fa-whatsapp my-float"></i>
    </a>

    <!-------------------------------------------- MENU------------------------------------------------------>
    <!-------------------------------------------- MENU------------------------------------------------------>
    <!-------------------------------------------- MENU------------------------------------------------------>
    
    <?php include('../../layout/menu.php'); ?>

    </nav>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <!--------------------------------------------CONTACTO------------------------------------------------------>
    <section id="contacto" class="contacto">
        <div class="contenedores">
            <h2>Contáctanos y Lleva Tu Negocio al Siguiente Nivel</h2>
            <p class="subtitulo">Selecciona el servicio en el que estás interesado y permítenos ayudarte a transformar tu presencia digital.</p>
            
            <form action="enviar-formulario.php" method="POST" class="formulario-contacto">
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="servicio">Servicio de Interés</label>
                    <select id="servicio" name="servicio" required>
                        <option value="" disabled selected>Selecciona un servicio</option>
                        <option value="diseno-web">Diseño Web Profesional</option>
                        <option value="desarrollo-web">Desarrollo Web Personalizado</option>
                        <option value="seo-sem">Optimización SEO y SEM</option>
                        <option value="estrategias-digitales">Estrategias Digitales</option>
                        <option value="mantenimiento-web">Mantenimiento de Páginas Web</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos más sobre tu proyecto o tus necesidades"></textarea>
                </div>

                <button type="submit" class="boton">Enviar Mensaje</button>
            </form>

            <div class="contacto-info">
                <p><strong>También puedes contactarnos directamente:</strong></p>
                <p>Correo Electrónico: <a href="mailto:contacto@webgeniopro.com">info@codeechanters.com</a></p>
                <p>Teléfono: <a href="tel:3108701604">3108701604</a></p>
            </div>
        </div>
    </section>
    <!--------------------------------------------POLITICAS------------------------------------------------->
    <!--------------------------------------------POLITICAS------------------------------------------------------>
    <footer>
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
                <img src="../../img/logo.png" alt="logo" class="logo">
            </div>
        </section>
    </footer>
</body>

</html>
