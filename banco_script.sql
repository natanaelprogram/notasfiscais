CREATE DATABASE wda_crud;
USE wda_crud;

CREATE TABLE customers (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  cpf_cnpj varchar(14) NOT NULL,
  birthdate datetime NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code varchar(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(2) NOT NULL,
  phone varchar(11) NOT NULL,
  mobile varchar(11) NOT NULL,
  ie varchar(15),
  created datetime NOT NULL,
  modified datetime NOT NULL
);

INSERT INTO `customers` (`name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`)
VALUES ('Maria CLara Bonan', '59624890211', '1989-01-01', 'Rua Francisco de Almeida, 206', 'Internet', '25973205', 'Sorocaba', 'SP', '15 994063328', '15994063328', '08952846592', '2023-09-20 11:00:00', '2023-09-21 13:40:50'),
('Natanael Pires Silva', '49302470955', '1990-02-09', 'Rua Abarte Bazanelli, 159', 'Internet', '70659123', 'Sorocaba', 'SP', '15 986194489', '15986194489', '01238492746', '2023-03-20 11:00:00', '2023-03-20 14:00:21'),
('Davi Dos Santos Silva', '28069144322', '1980-05-11', 'Rua Dr. Paratti, 920', 'Internet', '02579841', 'Sorocaba', 'SP', '15 946197150', '15946197150', '91886156488', '2023-02-07 21:40:11', '2023-03-20 04:25:00');

CREATE TABLE usuarios(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    nome varchar(50) not null,
    user varchar(50) not null,
    password varchar(100) not null,
    foto varchar(50)
);

INSERT INTO `usuarios`(`nome`, `user`, `password`) 
VALUES ('Zé Lele','zelele','5243897562837456982'),
('Mary Zica','mazi','786098767869'),
('Fugiru Nakombi','fugina','623485634753234'),
('admin', 'admin', '$2a$08$Cf1f11ePArKlBJomM0F6a.S0UlqLOqj86iQfgPSVn5cYz0lJGIA22');

CREATE TABLE notafc(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    nome varchar(50) not null,
    user varchar(50) not null,
    numero varchar(3)
);

INSERT INTO `notafc`(`nome`, `user`, `numero`) 
VALUES ('Sara Vitória','victoria','065'),
('Matheus Henrique','matue','702'),
('Josenice Pereira','zeza','550'),
('Jhonatan', 'jhol', '328');