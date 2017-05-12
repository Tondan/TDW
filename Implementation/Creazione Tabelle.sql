CREATE TABLE Utente
(
	ID_Utente INT AUTO_INCREMENT PRIMARY KEY,
    Nome_Utente VARCHAR(20) NOT NULL,
    Password VARCHAR(20) NOT NULL,
	Tipo_Utente VARCHAR(20) NOT NULL
);

CREATE TABLE Gruppo 
(
	ID_Gruppo INT auto_increment PRIMARY KEY,
    Utente INT,
		FOREIGN KEY (Utente)
			REFERENCES Utente(ID_Utente)
);

CREATE TABLE Servizio
(
	ID_Servizio INT auto_increment PRIMARY KEY,
    Gruppo INT,
		FOREIGN KEY (Gruppo)
			REFERENCES Gruppo(ID_Gruppo),
	Tipo_Servizio VARCHAR(20) not null
);

CREATE TABLE Menu
(
	ID_Menu INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20) NOT NULL,
);

CREATE TABLE Slider
(
	ID_Slider INT auto_increment PRIMARY KEY,
    Img BLOB
);

CREATE TABLE 