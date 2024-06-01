-- Creamos la DB
create database if not exists `p_2`;

-- Creamos la taba tareas
create table if not exists `p_2`.`tareas` (
    `id` int not null auto_increment,
    `descripcion` varchar(50) not null
);