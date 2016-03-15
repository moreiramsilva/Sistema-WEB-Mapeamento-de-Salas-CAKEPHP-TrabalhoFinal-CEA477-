
CREATE DATABASE trabalho_pratico;

CREATE USER `trabpratico`@`localhost` identified by "123456";
GRANT ALL PRIVILEGES ON trabalho_pratico.* TO `trabpratico`@`localhost`;
FLUSH PRIVILEGES;

USE trabalho_pratico;

CREATE TABLE IF NOT EXISTS `trabalho_pratico`.`salas`(
`id` INT(11) NOT NULL AUTO_INCREMENT ,
`nome` VARCHAR(4) NOT NULL,
`bloco` CHAR(1) NOT NULL,
`andar` INT(1) NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE if NOT EXISTS `trabalho_pratico`.`disciplinas`(
`id` INT(11) NOT NULL AUTO_INCREMENT ,
`codigo` VARCHAR(6) NOT NULL,
`nome` VARCHAR(20) NOT NULL,
`professor` VARCHAR(20) NOT NULL,
`dia1` VARCHAR(20) NOT NULL,
`horario1` VARCHAR(20) NOT NULL,
`dia2` VARCHAR(20) NOT NULL,
`horario2` VARCHAR(20) NOT NULL,
`curso` VARCHAR(20) NOT NULL,
`sala_id` INT(11) NOT NULL,
PRIMARY KEY(`id`)
);


CREATE TABLE if NOT EXISTS `trabalho_pratico`.`usuarios`(
`id` INT(11) NOT NULL AUTO_INCREMENT ,
`nome` VARCHAR(40) NOT NULL,
`senha` VARCHAR(20) NOT NULL,
`usuarios` VARCHAR(20) NOT NULL,
`tipo` INT(1) NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE if NOT EXISTS `trabalho_pratico`.`noticias`(
`id` INT(11) NOT NULL AUTO_INCREMENT,
`post` TEXT NOT NULL,
`data` datetime NOT NULL,
`usuario_id` INT(11) NOT NULL,
`disciplina_id` INT(11) NOT NULL,

PRIMARY KEY(`id`)

);