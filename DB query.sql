CREATE DATABASE library;

USE library;

CREATE TABLE Libros (
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(250) NOT NULL,
	descripcion VARCHAR(250) NOT NULL,
	autor VARCHAR(250) NOT NULL,
	categoria VARCHAR(250) NOT NULL,
	imagen VARCHAR(450) NOT NULL,
	
	PRIMARY KEY (id)	
)

CREATE TABLE Autores(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	apellido VARCHAR(250) NOT NULL,
	pais VARCHAR(250) NOT NULL,
	libros VARCHAR(250) NOT NULL,
 	imagen VARCHAR(450) NOT NULL,
 	
 	PRIMARY KEY (id)
 	
)

CREATE TABLE Contactos(
	id INT NOT NULL AUTO_INCREMENT,
	fecha DATE NOT NULL,
	correo VARCHAR(250) NOT NULL,
	nombre VARCHAR(250) NOT NULL,
	asunto VARCHAR(250) NOT NULL,
	comentario VARCHAR(650) NOT NULL,
	
	PRIMARY KEY (id)
)

INSERT INTO libros (titulo, descripcion, autor, categoria, link, imagen) 
VALUES ('Don Quijote de la Mancha', 
'El libro relata las aventuras y desventuras de un hidalgo de 50 años llamado Alonso Quijano, quien decide ser un caballero andante como aquellos que aparecen en sus libros de caballerías favoritos.',
'Miguel de Cervantes',
'Novela de aventuras, Parodia de las novelas de caballerías',
'https://www.google.com.do/books/edition/Don_Quijote_de_la_Mancha/CPWlxufKqp4C?hl=es&gbpv=0&kptab=overview',
'assets/img/libros/don_quijote_de_la_mancha.jpg')

INSERT INTO libros (titulo, descripcion, autor, categoria, link, imagen) 
VALUES (
'La Galatea',
'Ambientada a orillas del río Tajo, entre sus protagonistas están el pastor Elicio y el rico pastor lusitano Erastro. Ambos se disputan el amor de una pastora, Galatea.',
'Miguel de Cervantes',
'Novela, Pastoril, Ficción',
'https://www.google.com.do/books/edition/La_galatea/KA3XCgAAQBAJ?hl=es&gbpv=0',
'assets/img/libros/la_galatea.jpg'
)

INSERT INTO libros (titulo, descripcion, autor, categoria, link, imagen) 
VALUES (
'Cien años de soledad',
'En Cien años de soledad se relata el origen de Macondo y de la familia Buendía, como también pudiera haber sido el de América o el del modo de ser costeño o caribeño.',
'Gabriel García Márquez',
'Novela, Realismo mágico, Alta fantasía.',
'https://www.google.com.do/books/edition/Cien_a%C3%B1os_de_soledad/uAl_BwAAQBAJ?hl=es&gbpv=0',
'assets/img/libros/cien_anos_de_soledad.png'
)

INSERT INTO libros (titulo, descripcion, autor, categoria, link, imagen) 
VALUES (
'El coronel no tiene quien le escriba',
'Es una narración que reflexiona sobre la esperanza y la resignación, sobre las consecuencias de mantener los principios y la dignidad personal en una sociedad corrompida.',
'Gabriel García Márquez.',
'Novela corta, Ficcion.',
'https://www.google.com.do/books/edition/El_coronel_no_tiene_quien_le_escriba/VlXpAAAAMAAJ?hl=es&gbpv=0&bsq=El%20coronel%20no%20tiene%20quien%20le%20escriba%20google%20libros',
'assets/img/libros/el_coronel_quien_escriba.jpg'
)

INSERT INTO libros (titulo, descripcion, autor, categoria, link, imagen) 
VALUES (
'Sobre héroes y tumbas',
'Es una narración que reflexiona sobre la esperanza y la resignación, sobre las consecuencias de mantener los principios y la dignidad personal en una sociedad corrompida.',
'Ernesto Sabato.',
'Novela, Ficcion',
'https://www.google.com.do/books/edition/Sobre_h%C3%A9roes_y_tumbas/qgqLwVtcdJoC?hl=es&gbpv=0',
'assets/img/libros/sobre_heroes_y_guerras.jpg'
)


INSERT INTO autores (nombre, apellido, pais, libros, imagen) VALUES
(
'Miguel', 'De Cervantes', 'España', 'Don Quijote de la Mancha, La galatea.', 'assets/img/autores/miguel_cervantes.jpg' 
)


INSERT INTO autores (nombre, apellido, pais, libros, imagen) VALUES
(
'Gabriel', 'García Márquez', 'Colombia', 'Cien años de soledad', 'assets/img/autores/garcia_marquez.jpg' 
)

INSERT INTO autores (nombre, apellido, pais, libros, imagen) VALUES
(
'Ernesto', 'Sabato', 'Argentina', 'Sobre héroes y tumbas', 'assets/img/autores/ernesto_sabato.jpg' 
)




