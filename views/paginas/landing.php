<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Essence</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/dist/css/landing.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body >
    <header id="Header" class="header">
        <img class="logo" src="/build/img/logo3.avif" alt="Logo Fresh Essence" />
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav" >
            <button id="cerrar" class="cerrar-menu"><i class="bi bi-x"></i></button>
            <ul class="nav-list"> 
                <li><a href="#" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">Inicio</a></li>
                <li><a href="#" onclick="document.getElementById('servicios').scrollIntoView({ behavior: 'smooth' })">Servicios</a></li>
                <li><a href="#" onclick="document.getElementById('nosotros').scrollIntoView({ behavior: 'smooth' })">Nosotros</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>

            <div>
                <a href="/login" class="boton-principal">Coger Cita</a>
            </div>
        </nav>
    </header>
        <section class="encabezado">
            <div class="contenido">
                <div class="caja">
                    <h2>Belleza y bienestar en un solo lugar.</h2>
                    <p>Peluquería · Tratamiento Faciales · Manicura · Cuidado Corporal</p>
                    <p>En nuestro centro de estética combinamos profesionalismo, experiencia y un trato personalizado para que cada visita sea una experiencia única.</p>
                    <div class="boton-encabezado">
                        <button id="btn-nosotros" onclick="document.getElementById('contacto').scrollIntoView({ behavior: 'smooth' })"> CONTACTA CON NOSOTROS</button>
                        <button id="btn-servicios" onclick="document.getElementById('servicios').scrollIntoView({ behavior: 'smooth' })">CONOCE NUESTROS SERVICIOS</button>
                    </div>
                </div>
            </div>
        </section>
            <div class="pre">
                <img class="logo" src="/build/img/logo3.avif" alt="Logo Fresh Essence" />
                <h2>Tratamientos Estéticos</h2>
                <h3>CENTRO ESTÉTICO EN ALGECIRAS</h3>
                <hr class="separador">
                <p>En Fress Essence, te ofrecemos una cuidada selección de tratamientos faciales diseñados especialmente para tu tipo de piel y tus necesidades.<br>Nuestro equipo de especialistas en estética combina experiencia, sensibilidad y las últimas técnicas para ayudarte a lucir una piel radiante, saludable y llena de vida.<br>Confía en nosotros para acompañarte en cada paso hacia una piel que refleje lo mejor de ti.</p>
            </div>
        <section class="caja-imagenes">
            <div class="caja-individual">
                <a href="#servicios">
                    <img src="/build/img/6.jpg" alt="Foto" />
                    <h3>Cuidados Faciales</h3>
                    <p>Ayudamos a cuidar la piel en profundidad, quitando las bacterias acumuladas en la dermis por la contaminación ambiental o maquillaje.</p>
                </a>
            </div>
            <div class="caja-individual">
                <a href="#servicios">
                    <img src="/build/img/3.jpg" alt="Foto" />
                    <h3>Manicura</h3>
                    <p>Cuidamos tus manos al detalle con técnicas profesionales y esmaltes de larga duración. Realza la belleza natural de tus uñas con un acabado impecable.</p>
                </a>
            </div>
            <div class="caja-individual">
                <a href="#servicios">
                    <img src="/build/img/7.jpg" alt="Foto" />
                    <h3>Peluquería</h3>
                    <p>Realzamos tu estilo con cortes, peinados y coloración adaptados a ti. Usamos productos de calidad para cuidar tu cabello mientras logramos el look que deseas.</p>
                </a>
            </div>
        </section>
    <section class="todo-servicios" >    
            <section id="servicios" class="servicios-sec">
            <div class="titulo-servicios">
                <h2>NUESTROS SERVICIOS</h2>
            </div>
            <div class="contenido-peluqueria">
                <div class="columna-info">
                    <h3 id="peluqueria">Peluquería</h3>
                    <p>Ofrecemos cortes, coloración y tratamientos capilares personalizados para resaltar tu estilo. Nuestros estilistas usan productos de calidad para garantizar un cabello saludable y con el look que deseas.</p>
                    <p>Entendemos que tu cabello es una extensión de tu personalidad, por eso trabajamos de forma cercana contigo para lograr un resultado que te haga sentir segura, auténtica y renovada. Nos mantenemos actualizados con las últimas tendencias y técnicas profesionales para brindarte un servicio moderno, cuidado y a la altura de tus expectativas.</p>
                    <ul class="servicios-peluqueria">
                        <li>Corte de Cabello</li>
                        <li>Tratamientos Queratina</li>
                        <li>Mechas y Coloraciones</li>
                        <li>Corte de Cabello</li>
                    </ul>
                </div>
                <div class="columna-foto">
                    <img src="/build/img/8.jpg" alt="Foto" />
                </div>
            </div>
        </section>

        <section id="manicura" class="servicios-sec">
            <div class="contenido-manicura">
                <div class="columna-foto">
                    <img src="/build/img/9.jpg" alt="Foto" />
                </div>
                <div class="columna-info">
                    <h3>Manicura</h3>
                    <p>En nuestra manicura, cuidamos tus uñas con servicios clásicos, gel o uñas acrílicas. Logra un acabado duradero y elegante, con productos que fortalecen y embellecen tus manos.</p>
                    <p>Cada tratamiento está pensado para brindarte una experiencia de bienestar y detalle. Nos enfocamos no solo en la estética, sino también en la salud de tus uñas y cutículas, trabajando con técnicas seguras y herramientas higienizadas. Queremos que disfrutes de un momento de relajación mientras realzamos la belleza natural de tus manos.</p>
                    <ul class="servicios-manicura">
                        <li>Manicura Clásica</li>
                        <li>Manicura Francesa</li>
                        <li>Manicura Gel</li>
                        <li>Uñas Acrílicas</li>
                    </ul>
                </div>
                
            </div>
        </section>

        <section id="servicios" class="servicios-sec">
            <div class="contenido-tratamiento">
                <div class="columna-info">
                    <h3>Tratamientos Faciales</h3>
                    <p>Ofrecemos manicura tradicional, francesa, gel y uñas acrílicas, todos diseñados para embellecer y fortalecer tus uñas. Usamos productos de alta calidad para un acabado duradero y elegante, manteniendo tus manos siempre impecables.</p>
                    <p>Además, nuestros tratamientos faciales están diseñados para responder a diferentes tipos de piel y necesidades específicas. Cada sesión incluye una evaluación personalizada para garantizar que recibas el cuidado más adecuado.</p>
                    <ul class="servicios-tratamiento">
                        <li>Limpieza Facial Profunda</li>
                        <li>Tratamientos Anti-Edad</li>
                        <li>Hidatración Facial Intensiva</li>
                        <li>Tratamiento de Ácne</li>
                    </ul>
                </div>
                <div class="columna-foto">
                    <img src="/build/img/1.jpg" alt="Foto" />
                </div>
            </div>
        </section>
    </section>


    <section id="nosotros" class="nosotros" href="#nosotros" >
        <div class="titulo-nosotros">
            <h2>NOSOTROS</h2>
        </div>
        <div class="caja-nosotros">
            <div class="caja-individual-nosotros-foto">
                <img src="/build/img/12.jpg" alt="Foto" />
            </div>
            <div class="caja-individual-nosotros-texto">
                <h3>NUESTRA HISTORIA</h3>
                <p>En Fresh Essence, nacemos con el compromiso de mejorar tu bienestar físico, mental y emocional. Queremos que cada persona que nos visite se sienta más segura y conectada con su belleza interior y exterior, elevando su autoestima y viviendo plenamente.</p>
                <p>Ofrecemos servicios de belleza pensados desde nuestra filosofía Inside&Out, diseñados especialmente para ti, según tus necesidades y estilo de vida. Contamos con un equipo de expertos que, con profesionalismo y honestidad, te brindan tratamientos personalizados.</p>
                <p>En Fresh Essence, nacemos con el propósito profundo de contribuir al bienestar integral de cada persona que cruza nuestras puertas. Creemos que la belleza auténtica comienza desde adentro, por eso trabajamos cada día para ayudarte a sentirte bien física, mental y emocionalmente.</p>
                
            </div>
        </div>
        <div class="caja-nosotros">
            <div class="caja-individual-nosotros-texto">
                <h3>NUESTRA FUNDADORA</h3>
                <p>Marina, fundadora de Fresh Essence, tiene como misión empoderar a las personas, ayudándolas a descubrir y fortalecer su confianza en sí mismas.</p>
                <p>Con Fresh Essence, su objetivo es proporcionar un enfoque integral que permita a las personas sentirse bien por dentro y por fuera, promoviendo un estilo de vida equilibrado y saludable. Ella cree firmemente que la verdadera belleza se logra cuando combinamos el cuidado exterior con un bienestar emocional y mental pleno.</p>
                <p>Su pasión por el bienestar nació de su propia experiencia personal, enfrentando etapas de inseguridad y autoexigencia. Fue en ese camino de autoconocimiento donde descubrió el poder transformador de cuidar tanto el cuerpo como la mente.</p>
            </div>
            <div class="caja-individual-nosotros-foto">
                <img src="/build/img/13.jpg" alt="Foto" />
            </div>
        </div>
        <div class="caja-imagen"></div>

        <div class="caja-nosotros">
            <div class="caja-mision">
                <h3>MISION Y VALORES</h3>
                <h4>NUESTRA MISIÓN</h4>
                <p>En Fresh Essence, nuestra misión es proporcionar una experiencia de belleza única que eleve la confianza y el bienestar de nuestros clientes. Nos enfocamos en ofrecer servicios personalizados que cuiden tanto el exterior como el interior de cada persona, promoviendo un estilo de vida saludable y equilibrado. Queremos ir más allá de los tratamientos convencionales, combinando técnicas innovadoras, productos de alta calidad y un trato humano excepcional para transformar cada visita en un momento de renovación.</p>
                <p>Además, creemos en la belleza como una forma de expresión personal y empoderamiento. Por eso, trabajamos cada día para crear un espacio en el que cada persona se sienta escuchada, valorada y libre de ser quien realmente es. En Fresh Essence, no solo realzamos tu imagen: cultivamos tu esencia.</p>
                <h4>NUESTROS VALORES</h4>
                <p>En Fresh Essence, creemos que la verdadera belleza comienza con una base de confianza y empatía. Nos esforzamos por crear un ambiente donde cada cliente se sienta escuchado, respetado y comprendido, porque sabemos que una experiencia de belleza exitosa va más allá de los tratamientos estéticos. Nuestros valores fundamentales —calidez, integridad, profesionalismo y pasión— guían cada una de nuestras acciones. Valoramos la autenticidad, fomentamos la inclusión y celebramos la diversidad, sabiendo que cada persona es única y merece una atención especial.</p>
            </div>
            <div class="caja-mision-imagen">
                <img src="/build/img/15.jpg" alt="Foto" />
            </div>
        </div>


        </div>
    </section>

    <section class="contacto" id="contacto" href="#contacto" >
        <div class="contacto-img">
            <img src="/build/img/contacto.jpg" alt="Foto" />
            <h2 class="titulo-contacto">CONTACTO</h2>
            <div class="caja-blanca">
                <div class="columna">
                    <i class="material-icons">location_on</i>
                    <h3>Ubicación</h3>
                    <h4>Av. España. Nº 10</h4>
                </div>
                <div class="columna">
                    <i class="material-icons">schedule</i>
                    <h3>Horario</h3>
                    <h4>Lunes - Viernes</h4>
                    <h4>10:00 a 20:00</h4>
                </div>
                <div class="columna">
                    <i class="material-icons">phone</i>
                    <h3>Teléfono</h3>
                    <h4>601236548</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="seccion">
        <div class="izquierda">
            <h1>¿Tienes alguna pregunta?</h1>
                <p>No dudes en contactar con nosotros.</p>
                <p>Estamos aquí para ayudarte. Si tienes preguntas sobre nuestros servicios, necesitas asistencia personalizada o simplemente quieres saber más, no dudes en escribirnos. Nuestro equipo responderá lo antes posible.</p>

             <a href="/contacto">Tengo una duda</a>
        </div>
        <div class="derecha">
        <img src="build/img/cont.avif" alt="Imagen decorativa">
        </div>
    </div>

    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<a href="#servicios"> <h4>Servicios</h4></a>
  	 			<ul>
  	 				<li><a href="#peluqueria">Peluquería</a></li>
  	 				<li><a href="#servicios">Manicura</a></li>
  	 				<li><a href="#servicios">Tratamientos Faciales</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" >
  	 			<a href="#nosotros"> <h4>Nosotros</h4></a>
  	 			<ul>
  	 				<li><a href="#nosotros">Nuestros Valores</a></li>
  	 				<li><a href="#nosotros">Nuestra Misión</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" >
  	 			<a href="#contacto"> <h4>Contacto</h4></a>
  	 			<ul>
  	 				<li><a href="#contacto">Ubicación</a></li>
  	 				<li><a href="#contacto">Horario</a></li>
  	 				<li><a href="#contacto">Teléfono</a></li>
  	 				<li><a href="#contacto">Formulario</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Síguenos</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
    <script src="/build/js/scripts.js"></script>
</body>
</html>