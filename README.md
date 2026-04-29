 💻 TechHub Store - Proyecto AIEP

Sistema de catálogo tecnológico desarrollado para la asignatura de **Programación de Aplicaciones Web**.
👥 Integrantes
* Daniel Rodríguez Salazar
* Jonathan Alegría Saavedra

🏗️ Arquitectura del Proyecto
El sistema se basa en el patrón **MVC (Modelo-Vista-Controlador)**, lo que permite una separación clara entre la interfaz y la lógica de negocio:
* **Modelos:** Encargados de la lógica de datos y la conexión con la base de datos (`models/Producto.php`).
* **Vistas:** Archivos que generan la interfaz de usuario para el cliente (`index.php`).
* **Controladores/Lógica:** Procesan las peticiones y gestionan la comunicación entre modelo y vista (`buscar.php`).
* **Configuración:** Clase global para la gestión de la conexión PDO (`config/Database.php`).

🛠️ Stack Tecnológico
* **Lenguaje:** PHP 8.2 (Programación Orientada a Objetos).
* **Base de Datos:** MySQL / MariaDB.
* **Frontend:** HTML5, CSS3, JavaScript (Fetch API / AJAX).
* **Framework CSS:** Bootstrap 5.3.

📋 Requisitos de Software e Instalación
Para el correcto funcionamiento del sistema, se requiere el siguiente entorno:

 Requisitos de Software
1. **Servidor Local:** XAMPP v8.1 o superior.
2. **Motor de BD:** MySQL 5.7+ o MariaDB 10.4+.
3. **Módulos PHP:** Extensión `pdo_mysql` habilitada (viene activa por defecto en XAMPP).

 Pasos para la Instalación
1. **Base de Datos:** Importar el archivo `script_db.sql` desde **phpMyAdmin** para crear la estructura y los datos iniciales.
2. **Despliegue:** Clonar o copiar este repositorio en la ruta: `C:\xampp\htdocs\techhub`.
3. **Servicios:** Iniciar los módulos **Apache** y **MySQL** desde el Panel de Control de XAMPP.
4. **Ejecución:** Acceder mediante el navegador a la dirección: `http://localhost/techhub`

📊 Diagrama de flujo del sistema
```mermaid
graph TD
    A[Usuario] --> B[Vista - index.php]
    B --> C[Controlador - buscar.php]
    C --> D[Modelo - Producto.php]
    D --> E[Base de Datos MySQL]
