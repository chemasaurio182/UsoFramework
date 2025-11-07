-- Crear base de datos (si no existe)
CREATE DATABASE IF NOT EXISTS if0_40288186_registros;

-- Usar la base de datos
USE if0_40288186_registros;

-- Crear tabla de usuarios
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO usuario (nombre, email, telefono) VALUES 
('Juan Pérez', 'juan@email.com', '555-1234'),
('María García', 'maria@email.com', '555-5678'),
('Carlos López', 'carlos@email.com', '555-9012');