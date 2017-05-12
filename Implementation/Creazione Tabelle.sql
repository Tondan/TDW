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

CREATE TABLE Header
(
	ID_Header INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20) NOT NULL
);

CREATE TABLE Immagine
(
	Nome_Img VARCHAR(20) PRIMARY KEY,
	Img BLOB
);

CREATE TABLE Slider
(
	ID_Slider INT auto_increment PRIMARY KEY,
    Img BLOB
);

CREATE TABLE Home
(
	ID_Home INT auto_increment PRIMARY KEY,
    Titolo VARCHAR(20),
    Descrizione TEXT,
    Img BLOB,
		FOREIGN KEY(Img)
			REFERENCES Immagine(Nome_Img)
);

CREATE TABLE Gallery
(
	ID_Gallery INT auto_increment PRIMARY KEY,
    Img BLOB,
		FOREIGN KEY(Img)
			REFERENCES Immagine(Nome_Img)
);

CREATE TABLE Caffetteria
(
	ID_Caffetteria INT PRIMARY KEY,
    Descrizione TEXT,
    Img BLOB,
		FOREIGN KEY(Img)
			REFERENCES Immagine(Nome_Img)
);

CREATE TABLE Storia
(
	ID_Storia INT PRIMARY KEY,
	Descrizione TEXT,
    Img BLOB,
		FOREIGN KEY(Img)
			REFERENCES Immagine(Nome_Img)
);

CREATE TABLE Piatto
(
	Nome_Piatto VARCHAR(20) PRIMARY KEY,
    Descrizione TEXT,
    Ingredienti VARCHAR(50) NOT NULL,
    Prezzo NUMERIC(8,2) NOT NULL,
    Img BLOB,
		FOREIGN KEY(Img)
			REFERENCES Immagine(Nome_Img)
);

CREATE TABLE Menu
(
	ID_Menu INT auto_increment PRIMARY KEY,
    Piatto VARCHAR(20),
		FOREIGN KEY (Piatto)
			REFERENCES Piatto(Nome_Piatto),
	Img BLOB,
		FOREIGN KEY(Img)
			REFERENCES Immagine(Nome_Img)
)

CREATE TABLE Rist_Pizz
(
	ID_Rist_Pizz INT PRIMARY KEY,
    Descrizione TEXT,
	Menu INT,
		FOREIGN KEY (Menu)
			REFERENCES Menu(ID_Menu)
);

CREATE TABLE FAQ
(
	Domanda VARCHAR(50) PRIMARY KEY,
	Risposta TEXT NOT NULL
);

CREATE TABLE Evento
(
	ID_Evento INT auto_increment PRIMARY KEY,
	Data Date NOT NULL,
    Nome VARCHAR(20),
    Descrizione TEXT,
    Menu INT,
		FOREIGN KEY (Menu)
			REFERENCES Menu(ID_Menu)
);

