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
    Nome VARCHAR(20) PRIMARY KEY
);

CREATE TABLE Immagine
(
	Link VARCHAR(50) PRIMARY KEY
);

CREATE TABLE Slider
(
	ID_Slider INT PRIMARY KEY,
    Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Home
(
	ID_Home INT PRIMARY KEY,
    Titolo VARCHAR(20) UNIQUE NOT NULL,
    Descrizione TEXT,
    Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Gallery
(
	ID_Gallery INT PRIMARY KEY,
    Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Caffetteria
(
	ID_Caffetteria INT PRIMARY KEY,
    Descrizione TEXT,
    Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Storia
(
	ID_Storia INT PRIMARY KEY,
	Descrizione TEXT,
    Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Piatto
(
	Nome_Piatto VARCHAR(20) PRIMARY KEY,
    Descrizione TEXT,
    Ingredienti VARCHAR(50) NOT NULL,
    Prezzo NUMERIC(8,2) NOT NULL,
    Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Menu
(
	Nome_Menu VARCHAR(20) PRIMARY KEY,
    Piatto VARCHAR(20),
		FOREIGN KEY (Piatto)
			REFERENCES Piatto(Nome_Piatto),
	Img VARCHAR(50),
		FOREIGN KEY(Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Rist_Pizz
(
	ID_Rist_Pizz INT PRIMARY KEY,
    Descrizione TEXT,
	Menu VARCHAR(20),
		FOREIGN KEY (Menu)
			REFERENCES Menu(Nome_Menu)
);

CREATE TABLE FAQ
(
	ID_FAQ INT PRIMARY KEY,
	Domanda VARCHAR(50) NOT NULL,
	Risposta TEXT NOT NULL
);

CREATE TABLE Evento
(
	ID_Evento INT auto_increment PRIMARY KEY,
	Data Date NOT NULL,
    Nome VARCHAR(20),
    Descrizione TEXT,
    Menu VARCHAR(20),
		FOREIGN KEY (Menu)
			REFERENCES Menu(Nome_Menu),
	Img VARCHAR(50),
		FOREIGN KEY (Img)
			REFERENCES Immagine(Link)
);

CREATE TABLE Prenotazione
(
	ID_Prenotazione INT auto_increment PRIMARY KEY,
	Nome_Cl VARCHAR(20) NOT NULL,
    Data TIMESTAMP NOT NULL,
    Evento INT,
		FOREIGN KEY (Evento)
			REFERENCES Evento(ID_Evento),
	N_Presone INT NOT NULL
);
    

CREATE TABLE Contatti
(
	ID_Contatti INT PRIMARY KEY,
    Descrizione TEXT,
    Indirizzo_Az VARCHAR(30),
    Tel_Az VARCHAR(16),
    E_Mail_Az VARCHAR(30),
    Dscrizione TEXT,
    E_Mail_Cl VARCHAR(30),
    Nome_Cl VARCHAR(20),
    Oggetto_Msg VARCHAR(20),
    Messaggio TEXT
);


CREATE TABLE Orario
(
	Giorno VARCHAR(10) PRIMARY KEY,
    Orario TIME,
    Chiuso VARCHAR(20)
);

CREATE TABLE Footer
(
	ID_Footer INT PRIMARY KEY,
    Orario VARCHAR(10),
		FOREIGN KEY(Orario)
			REFERENCES Orario(Giorno),
	Nome_Az VARCHAR(20),
    P_IVA VARCHAR(11)
);
