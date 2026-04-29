# 💻 TechHub Store - Proyecto AIEP

Sistema de catálogo tecnológico desarrollado para la asignatura de Programación de Aplicaciones Web.

## 👥 Integrantes
* Daniel Rodríguez Salazar
* Jonathan Alegría Saavedra

 🚀 Tecnologías y Arquitectura
El proyecto utiliza un entorno profesional para asegurar el orden y la escalabilidad del código:
* **Arquitectura MVC:** Separación clara de responsabilidades (Modelo, Vista, Controlador).
* **PHP Orientado a Objetos (POO):** Uso de clases y métodos.
* **PDO:** Conexión segura a la base de datos MySQL.
* **AJAX:** Buscador dinámico que filtra productos en tiempo real sin recargar la página.
* **Bootstrap 5:** Interfaz de usuario moderna y responsiva.

 🏗️ Estructura del Proyecto (MVC)
* **Modelos:** Acceso a datos (`models/Producto.php`)
* **Vistas:** Interfaz de usuario (`index.php`)
* **Controladores/Lógica:** Procesamiento de búsqueda (`buscar.php`)
* **Configuración:** Conexión PDO (`config/Database.php`)

 📋 Requisitos e Instalación
1. Clonar este repositorio en `C:\xampp\htdocs\techhub`.
2. Importar el archivo `script_db.sql` en **phpMyAdmin**.
3. Activar Apache y MySQL en el panel de **XAMPP**.
4. Acceder vía navegador a: `http://localhost/techhub`

 📊 Diagrama de flujo del sistema
```mermaid
graph TD
    A[Usuario] --> B[Vista - index.php]
    B --> C[Controlador - buscar.php]
    C --> D[Modelo - Producto.php]
    D --> E[Base de Datos]
