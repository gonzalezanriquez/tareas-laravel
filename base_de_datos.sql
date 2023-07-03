CREATE TABLE categoria (
  id_categoria INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(100)
);
CREATE TABLE juego (
  id_juego INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(100),
  descripcion TEXT,
  id_categoria INT,
  precio DECIMAL(8, 2),
  plataforma VARCHAR(50),
  FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

CREATE TABLE usuario (
  id_usuario INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(100),
  fecha_nacimiento DATE,
  correo_electronico VARCHAR(100),
  fecha_de_registro DATE
);


CREATE TABLE venta (
  id_venta INT PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT,
  valor_de_la_venta DECIMAL(10, 2),
  fecha_de_venta DATE,
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE ventajuego (
  id_ventajuego INT PRIMARY KEY AUTO_INCREMENT,
  id_juego INT,
  id_venta INT,
  FOREIGN KEY (id_juego) REFERENCES juego(id_juego),
  FOREIGN KEY (id_venta) REFERENCES venta(id_venta)
);
