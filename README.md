# Centro de Estética FRESH ESSENCE - Página Web

Aqui podeis verlo: https://youtu.be/lRSlpRLkFw4

Este es mi primer proyecto real: una página web desarrollada para un centro de estética que permite la gestión de servicios y citas a través de distintos tipos de usuarios. El objetivo fue crear una solución funcional, fluida y visualmente atractiva.

#Tipos de usuarios

- **Admin**
  - Ver citas filtradas por día.
  - Agregar, editar y eliminar servicios.

- **Cliente registrado**
  - Reservar citas automáticamente.
  - Recuperar contraseña.
  - Enviar consultas o sugerencias por correo.

- **Cliente no registrado**
  - Ver información sobre los servicios y el centro.
  - Completar un formulario de contacto.
  - Registrarse para obtener acceso completo.

#Tecnologías utilizadas

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP, MySQL  
- **Librerías & herramientas:**
  - [SweetAlert](https://sweetalert.js.org/) – para mostrar mensajes atractivos al usuario.
  - [Gulp](https://gulpjs.com/) – para automatizar tareas y optimizar archivos CSS y JS.
  - Composer
  - PHPMAILER
  - Mailtrap

#API propia

Desarrollé una API personalizada que gestiona toda la comunicación entre el frontend y el backend. Gracias a esto, el usuario puede:
- Consultar los servicios disponibles.
- Crear citas a través del formulario.
  
Todo esto se maneja con peticiones asincrónicas, mejorando la experiencia de uso al evitar recargas innecesarias.


#Instalación y ejecución local

1. Clona el proyecto.
2. Instala las dependencias: 'npm install'.
3. Copia la carpeta del proyecto dentro de `htdocs` si usas **XAMPP**.
4. Asegúrate de que los servicios **Apache** y **MySQL** estén activos.
5. Entra a **phpMyAdmin** y **crea la base de datos**. Importa la base de datos.
6. Una vez este importada la base de datos, abre la terminal y escribe:
   1.cd public
   2.ls
   3.php -S localhost:3000
7. Ya estaría abierta la aplicación.
