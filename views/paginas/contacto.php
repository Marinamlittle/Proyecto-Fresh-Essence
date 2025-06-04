<body class="pagina-contacto">

    <div class="contact_form">

            <div class="formulario">
                <h1>Contáctanos</h1>
                <h2>Ponte en contacto con nosotros</h2>
                <h3>Completa este formulario para tus consultas.</h3>

                <?php if($mensaje) { ?>
                        <p class='alerta exito'> <?php echo $mensaje;  ?></p>
                <?php } ?>
            
                <form  action="/contacto" method="post">
                    <p class="grid-campo">
                        <label for="nombre">Nombre <span class="obligatorio">*</span></label>
                        <input type="text" name="contacto[nombre]" id="nombre" required placeholder="Escribe tu nombre">
                    </p>
                    <p class="grid-campo">
                        <label for="apellidos" >Apellidos</label>
                        <input type="text" name="contacto[apellidos]" id="apellidos" placeholder="Escribe tu apellidos">
                    </p>
                    <p class="grid-campo">
                        <label for="email" >Email <span class="obligatorio">*</span></label>
                        <input type="email" name="contacto[email]" id="email" required placeholder="Escribe tu Email">
                    </p>
                    <p class="grid-campo">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" name="contacto[telefono]" id="telefono" placeholder="Escribe tu teléfono">
                    </p>
                    <p class="grid-campo">
                        <label for="mensaje">Mensaje <span class="obligatorio">*</span></label>
                        <textarea name="contacto[mensaje]" class="texto_mensaje" id="mensaje" required placeholder="Deja aquí tu comentario..."></textarea>
                    </p>
            
                    <p class="boton-contenedor grid-campo">
                        <button type="submit" name="contacto[enviar]" id="enviar" class="boton">Enviar</button>
                    </p>

                </form>
                </div>
            </div>
    </div>

    

</body>