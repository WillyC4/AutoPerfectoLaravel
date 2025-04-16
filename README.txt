Sistema para Concesionario AutoPerfecto  
Gestión de Autos con Laravel  

---------------------------------------------
 
Este proyecto tiene como objetivo controlar la base de datos de AutoPerfecto, permitiendo una gestión eficiente de los vehículos a través de un CRUD completo. Además, incorpora un sistema de autenticación para la verificación de credenciales, garantizando seguridad en el acceso a la información.  

También sirve como un aprendizaje práctico en el uso de Laravel, explorando sus funcionalidades y la integración con bases de datos.  

---------------------------------------------
	Tecnologías utilizadas  

Laravel → Framework principal para la aplicación web.  
Bootstrap → Mejora la interfaz con estilos modernos y responsivos.  
MySQL → Base de datos para almacenar los registros de autos.  
PHP → Lenguaje backend para manejar el sistema.  
XAMPP → Entorno de desarrollo que incluye Apache y MySQL.  

---------------------------------------------
	Instrucciones de instalación
 
Requisitos previos:  
-PHP (>= 8.1)  
-Composer (Para manejar las dependencias de Laravel)  
-MySQL (phpMyAdmin para gestionar la base de datos)  
-XAMPP (Incluye Apache y MySQL) 
 

	Paso a paso para instalar el proyecto  

Clonar el repositorio  
 git clone https://github.com/WillyC4/AutoPerfectoLaravel

Moverse al directorio  
 cd AutoPerfecto

Instalar dependencias con Composer  
 composer install

Editar el archivo `.env` con tu configuración de base de datos:  
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=autoperfecto
 DB_USERNAME=root
 DB_PASSWORD=

Generar la clave de aplicación  
 php artisan key:generate

Migrar la base de datos  
 php artisan migrate

Levantar el servidor  
 php artisan serve

Accede a la aplicación → http://127.0.0.1:8000

---------------------------------------------
	Uso del Proyecto

El sistema proporciona una página web con autenticación, donde los usuarios pueden:  
-Iniciar sesión para acceder a las funcionalidades.  
-Explorar los autos registrados en la base de datos.  
-Realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre los vehículos.  
-Gestionar la información desde una interfaz moderna y responsiva.  

Si el usuario no está logueado, ciertas secciones del sistema estarán restringidas, manteniendo la seguridad de los datos.  

---------------------------------------------
	Créditos  

Este proyecto ha sido desarrollado por WillyC4
