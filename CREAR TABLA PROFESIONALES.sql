CREATE TABLE turnoscardio.Profesionales (
    ID_profesional INT AUTO INCREMENT NOT NULL PRIMARY KEY,
    Apellido_prof VARCHAR (30) NOT NULL,
    Nombre_prof VARCHAR (30) NOT NULL,
    Especialidad VARCHAR (30) NOT NULL,
    Dia_atencion DATE NOT NULL);