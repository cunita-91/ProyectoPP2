CREATE TABLE turnoscardio.Turnos_Asig(
ID_turno INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
ID_prof INT NOT NULL,
ID_ptes INT NOT NULL,
Hora_turno DATE NOT NULL,
Fecha_turno DATE NOT NULL,
Estado_turno BOOLEAN NOT NULL) ENGINE= InnoDB; 
 
