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