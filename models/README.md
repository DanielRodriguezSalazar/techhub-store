# Proyecto TechHub Store - AIEP

Este es un sistema de catálogo de productos tecnológicos desarrollado para la asignatura de **Programación de Aplicaciones Web**.

## 👥 Integrantes
* **Daniel Rodríguez Salazar**
* **Jonathan Alegría Saavedra**

## 🛠️ Tecnologías y Arquitectura
El proyecto utiliza un entorno profesional para asegurar el orden y la escalabilidad del código:
* **Arquitectura MVC:** Separación de Modelo, Vista y Controlador.
* **PHP Orientado a Objetos (POO):** Uso de clases para gestionar la base de datos y los productos.
* **PDO:** Conexión segura a MySQL.
* **AJAX:** Buscador dinámico que filtra productos en tiempo real sin recargar la página.
* **Bootstrap 5:** Diseño responsivo y moderno.

## 📋 Requisitos e Instalación
1. Tener instalado **XAMPP**.
2. Clonar o copiar esta carpeta en `C:\xampp\htdocs\techhub`.
3. Abrir **phpMyAdmin**, crear la base de datos `techhub_store` e importar el archivo `script_db.sql` que viene en la raíz de este proyecto.
4. Activar Apache y MySQL en el panel de XAMPP.
5. Acceder vía navegador a: `http://localhost/techhub`

## 📁 Estructura del Proyecto
* `/config`: Conexión a la base de datos.
* `/models`: Lógica de los productos.
* `index.php`: Vista principal del catálogo.
* `buscar.php`: Procesador de peticiones AJAX.
* `script_db.sql`: Script de creación y población de datos.