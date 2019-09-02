
CREATE DATABASE futbol;
-- activamos la bd
USE futbol;

create table tb_jugador(
id	    int auto_increment primary key,
nombre  varchar(45),
fecha   date,
parrafo varchar(255),
img     varchar(255),
enlace  varchar(255),
estado  boolean
);

insert into tb_jugador values (null,'Iniesta','2019-01-01','Nacido en Fuentealbilla (Castilla-La Mancha).','iniesta.jpg', 'https://www.sport.es/es/personajes/barca/iniesta/',1);
insert into tb_jugador values (null,'Villa','2019-02-01','En 2010, Villa firma por el F.C. Barcelona, debutando en la final de la Supercopa de España frente al Sevilla.','villa.jpg', 'https://www.sportball.es/estadisticas-y-equipos-de-david-villa/',1);
insert into tb_jugador values (null,'Fabregas','2019-01-04','Cesc Fábregas, que actualmente se desempeña en Mónaco, tiene una laureada carrera. En sus pasos por Arsenal.','fabregas.jpg', 'https://www.transfermarkt.es/cesc-fabregas/profil/spieler/8806',1);
insert into tb_jugador (nombre, fecha, parrafo, img, enlace, estado)  values ('Puyol','2019-02-02','Carles Puyol (41 años) es y será siempre un referente para el barcelonismo.','puyol.jpg', 'https://resultados.as.com/resultados/ficha/deportista/puyol/83/',0);

select * from tb_jugador;

select * from tb_jugador where fecha > date();