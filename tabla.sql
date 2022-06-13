
CREATE TABLE Cuentas
( NumCuenta integer,
 NombreCuenta varchar(50),
 Tipo char(1),
 PRIMARY KEY(NumCuenta),
 CHECK (Tipo IN ('A','P','C','I','G'))
);

CREATE TABLE Partidas
( NumPartida integer,
 Fecha date,
 Descripcion varchar(100),
 PRIMARY KEY (NumPartida)
);
CREATE TABLE DetallePartida
( NumPartida integer,
 NumCuenta integer,
 DebeHaber char(1),
 Valor Float,
 PRIMARY KEY (NumPartida, NumCuenta),
 FOREIGN KEY (NumPartida) REFERENCES Partidas,
 FOREIGN KEY (NumCuenta) REFERENCES Cuentas,
 CHECK (DebeHaber IN ('D','H'))
);
