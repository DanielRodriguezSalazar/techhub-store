# 💻 TechHub Store - Proyecto AIEP

Sistema de catálogo tecnológico desarrollado para la asignatura de **Programación de Aplicaciones Web**.

👥 Integrantes
* **Daniel Rodríguez Salazar**
* **Jonathan Alegría Saavedra**

🏗️ Arquitectura del Proyecto
El sistema se basa en el patrón **MVC (Modelo-Vista-Controlador)**, permitiendo una separación clara entre la interfaz y la lógica:
* **Modelos:** Gestión de datos y lógica de negocio (`models/Producto.php`).
* **Vistas:** Interfaz de usuario generada dinámicamente (`index.php`).
* **Controladores:** Procesamiento de peticiones y flujo de datos (`buscar.php`).
* **Configuración:** Conexión global mediante PDO (`config/Database.php`).

🛠️ Stack Tecnológico
* **Lenguaje:** PHP 8.2 (POO).
* **Base de Datos:** MySQL / MariaDB.
* **Frontend:** HTML5, CSS3, JavaScript (Fetch API).
* **Framework CSS:** Bootstrap 5.3.

📋 Requisitos e Instalación

 Requisitos
1. **Servidor Local:** XAMPP v8.1 o superior.
2. **Motor de BD:** MySQL 5.7+ o MariaDB 10.4+.
3. **Módulos PHP:** Extensión `pdo_mysql` habilitada.

  Instalación
1. **Servicios:** Iniciar los módulos **Apache** y **MySQL** desde el Panel de Control de XAMPP.
2. **Base de Datos:** Importar el archivo `script_db.sql` desde **phpMyAdmin**.
3. **Despliegue:** Copiar la carpeta del proyecto en la ruta: `C:\xampp\htdocs\techhub`.
4. **Ejecución:** Acceder vía navegador a: `http://localhost/techhub`

📊 Diagrama de flujo del sistema
```mermaid
graph TD
    A[Usuario] --> B[Vista - index.php]
    B --> C[Controlador - buscar.php]
    C --> D[Modelo - Producto.php]
    D --> E[Base de Datos MySQL]
