create database escola_teste;

use escola_teste;

create table tipo_usuario (
	id tinyint unsigned not null auto_increment,
	descricao varchar(20) not null,
	primary key(id)
);

insert into tipo_usuario values
(null, 'Administrador'),
(null, 'Professor'),
(null, 'Aluno');

select * from tipo_usuario;

create table usuario (
	id int unsigned not null auto_increment,
	tipo_usuario_id tinyint unsigned not null,
	data_cadastro datetime default now(),
	nome varchar(100) not null,
	nome_usuario varchar(25) unique,
	senha varchar(50) not null,
	isAtivo boolean default true,
	primary key(id),
	constraint fk_usuario_tipousuario_id foreign key(tipo_usuario_id) references tipo_usuario(id)
);

insert into usuario(tipo_usuario_id, nome, nome_usuario, senha) values
(1, 'Jhonny Patrick', 'jhonny', '1234'),
(2, 'Ely Neder', 'elyned', '1234');

select * from usuario;

DELETE FROM usuario WHERE nome='  ' ;






