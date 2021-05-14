CREATE DATABASE futbol;

USE futbol;

CREATE OR REPLACE TABLE usuarios(
id_usuario INT NOT NULL PRIMARY KEY,
nombre VARCHAR (50),
apellido VARCHAR (50),
nickname VARCHAR (50),
contraseña VARCHAR (50)
);

CREATE OR REPLACE TABLE ligas(
id_liga INT NOT NULL PRIMARY KEY,
nombre_liga VARCHAR (50)
);

CREATE OR REPLACE TABLE equipos(
id_equipo INT NOT NULL PRIMARY KEY,
id_liga INT NOT NULL,
nombre_equipo VARCHAR (50),
abreviatura VARCHAR (50),
juegos_ganados VARCHAR (50),
juegos_perdidos VARCHAR (50),
juegos_empatados VARCHAR (50),
juegos_jugados VARCHAR (50),
goles_favor VARCHAR (50),
goles_contra VARCHAR (50),
puntos_totales VARCHAR (50),
FOREIGN KEY (id_liga) REFERENCES ligas (id_liga)
);

CREATE OR REPLACE TABLE favoritos(
id_favorito INT NOT NULL PRIMARY KEY,
id_usuario INT NOT NULL,
id_equipo INT NOT NULL,
FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario),
FOREIGN KEY (id_equipo) REFERENCES equipos (id_equipo)
);

CREATE OR RPLACE TABLE resultado(
  id_resultado INT NOT NULL PRIMARY KEY,
  id_equipo INT NOT NULL,
  id_liga INT NOT NULL,
  resultado_ganador INT NOT NULL,
  resultado_empate INT NOT NULL,
  resultado_perdedor INT NOT NULL,
  FOREIGN KEY (id_resultado) REFERENCES equipos (id_equipo),
  FOREIGN KEY (id_liga) REFERENCES ligas (id_liga)
  );
