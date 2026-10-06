create database tienda_db;
use tienda_db;
create table productos(
   id int auto_increment primary key,
   nombre varchar(100),
   precio decimal(10,2),
   icono varchar(20),
   descripcion text);

INSERT IGNORE INTO productos
(id, nombre, precio, icono, descripcion)
VALUES
(1, 'Laptop HP', 2500.00, '💻',
 'Memoria RAM: 8 GB\nDisco SSD: 512 GB'),
(2, 'Mouse Logitech', 80.00, '🖱️',
 'Mouse inalámbrico USB'),
(3, 'Teclado Gamer', 150.00, '⌨️',
 'Teclado mecánico RGB'),
(4, 'PAD', 50.00, '🎮',
 'PAD TG4');   
select * from productos;   
 
