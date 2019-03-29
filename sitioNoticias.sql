
use sitioNoticias;


create table Categoria(

	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(100),
	PRIMARY KEY(id)
);

create table Autor(

	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(100),
	PRIMARY KEY(id)

);

create table Articulo(

	id int NOT NULL AUTO_INCREMENT,
	titulo varchar(100),
	contenido varchar(500),
	idCategoria int,
	idAutor int,
	PRIMARY KEY (id),
	constraint fk_id_categoria FOREIGN KEY (idCategoria) REFERENCES Categoria(id),
	constraint fk_id_autor FOREIGN KEY (idAutor) REFERENCES Autor(id)
);



insert into Categoria values(1,'Deportes');
insert into Categoria values(2,'Nacionales');
insert into Categoria values(3,'Internacionales');

insert into Autor values(1,'Gabriel');
insert into Autor values(2,'Pablo');
insert into Autor values(3,'Pedro');



insert into Articulo values(1,'Costa Rica Campeon','Costa Rica gano el campeonato mundial',1,2);



