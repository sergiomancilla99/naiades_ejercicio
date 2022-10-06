CREATE TABLE usuarios (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL DEFAULT '',
  apellido varchar(100) NOT NULL,
  fecha datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO usuarios (nombre, apellido) 
VALUES ('Juan', 'Lopez'), ('Pedro', 'Sanchez');
