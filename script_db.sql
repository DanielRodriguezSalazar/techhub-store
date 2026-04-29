-- ==========================================================
-- SCRIPT DE BASE DE DATOS - TECHHUB STORE
-- Evaluación: Programación de Aplicaciones Web
-- Alumnos: Daniel Rodríguez Salazar e Jonathan Alegría Saavedra
-- ==========================================================

-- 1. CREACIÓN DE LA BASE DE DATOS
CREATE DATABASE IF NOT EXISTS techhub_store;
USE techhub_store;

-- 2. LIMPIEZA (Opcional, por si se ejecuta varias veces)
DROP TABLE IF EXISTS productos;

-- 3. CREACIÓN DE LA TABLA (Estructura)
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio INT NOT NULL,
    stock INT NOT NULL,
    imagen VARCHAR(255) DEFAULT NULL
);

-- 4. POBLAR LA BASE DE DATOS 
INSERT INTO productos (nombre, descripcion, precio, stock) VALUES 
('Laptop Gamer Nitro 5', 'Procesador i7, 16GB RAM, tarjeta RTX 3050', 850000, 10),
('Mouse Logitech G502', 'Sensor Hero 25K, 11 botones programables', 45000, 25),
('Teclado Mecánico 60%', 'Switches Red, iluminación RGB completa', 35000, 15),
('Monitor Curvo 144Hz', 'Pantalla de 24 pulgadas, 1ms de respuesta', 190000, 8),
('Audífonos HyperX Cloud II', 'Sonido envolvente 7.1, espuma viscoelástica', 75000, 12),
('Silla Gamer Ergonómica', 'Ajuste de altura y respaldo reclinable', 120000, 5);
