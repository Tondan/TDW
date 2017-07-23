INSERT INTO users (username,password,id) VALUES ('admin',MD5('admin'),1);

INSERT INTO groups (id,name) VALUES(1,'adminer');

INSERT INTO services (script,description) VALUES
('admin.php', 'script dashboard admin'),
('array_active.php', NULL),
('array_add.php', NULL),
('array_delete.php', NULL),
('array_manager.php', NULL),
('caffetteria_manager.php', NULL),
('caffetteria_update.php', NULL),
('contatti_manager.php', NULL),
('contatti_update.php', NULL),
('dashboard.php', NULL),
('eventi_add.php', NULL),
('eventi_manager.php', NULL),
('eventi_update.php', NULL),
('faq_add.php', NULL),
('faq_manager.php', NULL),
('faq_update.php', NULL),
('footer_update.php', NULL),
('gallery_manager.php', NULL),
('gallery_update.php', NULL),
('header_manager.php', NULL),
('header_update.php', NULL),
('home_manager.php', NULL),
('home_update.php', NULL),
('icona_update.php', NULL),
('img_grande_update.php', NULL),
('lgallery_manager.php', NULL),
('lgallery_update.php', NULL),
('orario_manager.php', NULL),
('orario_update.php', NULL),
('piatti_add.php', NULL),
('piatti_manager.php', NULL),
('piatti_update.php', NULL),
('recensioni_manager.php', NULL),
('recensioni_update.php', NULL),
('reservation_manager.php', NULL),
('reservation_update.php', NULL),
('ristorante_manager.php', NULL),
('ristorante_update.php', NULL),
('slider_manager.php', NULL),
('slider_update.php', NULL),
('story_manager.php', NULL),
('story_update.php', NULL),
('upload.php', NULL),
('upload_in.php', NULL),
('utenti_add.php', NULL),
('utenti_manager.php', NULL),
('utenti_update.php', NULL),
('vMessaggi.php', NULL),
('vNewsletter.php', NULL),
('vPrenotazione.php', NULL),
('logo_update.php',NULL);


INSERT INTO usergroups (username,id_group) VALUES ('admin',1);

INSERT INTO groupservices (script, id) VALUES
('admin.php', 1),
('array_active.php', 1),
('array_add.php', 1),
('array_delete.php', 1),
('array_manager.php', 1),
('caffetteria_manager.php', 1),
('caffetteria_update.php', 1),
('contatti_manager.php', 1),
('contatti_update.php', 1),
('dashboard.php', 1),
('eventi_add.php', 1),
('eventi_manager.php', 1),
('eventi_update.php', 1),
('faq_add.php', 1),
('faq_manager.php', 1),
('faq_update.php', 1),
('footer_update.php', 1),
('gallery_manager.php', 1),
('gallery_update.php', 1),
('header_manager.php', 1),
('header_update.php', 1),
('home_manager.php', 1),
('home_update.php', 1),
('icona_update.php', 1),
('img_grande_update.php', 1),
('lgallery_manager.php', 1),
('lgallery_update.php', 1),
('orario_manager.php', 1),
('orario_update.php', 1),
('piatti_add.php', 1),
('piatti_manager.php', 1),
('piatti_update.php', 1),
('recensioni_manager.php', 1),
('recensioni_update.php', 1),
('reservation_manager.php', 1),
('reservation_update.php', 1),
('ristorante_manager.php', 1),
('ristorante_update.php', 1),
('slider_manager.php', 1),
('slider_update.php', 1),
('story_manager.php', 1),
('story_update.php', 1),
('upload.php', 1),
('upload_in.php', 1),
('utenti_add.php', 1),
('utenti_manager.php', 1),
('utenti_update.php', 1),
('vMessaggi.php', 1),
('vNewsletter.php', 1),
('vPrenotazione.php', 1),
('logo_update.php',1);

INSERT INTO Header (ID_Header,Nome,Link,Posizione) VALUES 
(1,'CiccioPasticcio','home.php','Sx'),
(2,'CiccioCachetta','story.php','Sx'),
(3,'CiccioPorchittu','rist_pizz.php','Sx'),
(4,'CiccioCaffettiere','caffetteria.php','Sx'),
(5,'CiccioBanchiere','reservation.php','Dx'),
(6,'CiccioFesteggia','events.php','Dx'),
(7,'CiccioFotografo','photo.php','Dx'),
(8,'CiccioScrive','contact.php','Dx');

INSERT INTO Immagine (Link,Attivo) VALUES
('Img/baby_groot-2560x1440.jpg',0),
('Img/FILE-BLOG-2.jpg',0),
('Img/pizza2.jpg',0),
('Img/LGallery/1.jpg',0),
('Img/LGallery/2.jpg',0),
('Img/LGallery/3.jpg',0),
('Img/LGallery/4.jpg',0),
('Img/LGallery/5.jpg',0),
('Img/LGallery/6.jpg',0),
('Img/avatar-1g.jpg',0),
('Img/avatar-2g.jpg',0),
('Img/avatar-3g.jpg',0),
('Img/Gallery/cappuccino.jpg',0),
('Img/Gallery/cheesecake.jpg',0),
('Img/Gallery/colazione.jpg',0),
('Img/Gallery/dolci.jpg',0),
('Img/Gallery/drink1.jpg',0),
('Img/Gallery/drink2.jpg',0),
('Img/Gallery/gallery.jpg',0),
('Img/Gallery/panna-cotta.jpg',0),
('Img/Gallery/pasta.jpg',0),
('Img/Gallery/pesto.jpg',0),
('Img/Gallery/pizza1.jpg',0),
('Img/Gallery/pizza2.jpg',0),
('Img/Gallery/profitteroles.jpg',0),
('Img/Gallery/tagliata.jpg',0),
('Img/Gallery/tappi.jpg',0),
('Img/Gallery/tortafrutta.jpg',0);


INSERT INTO Logo (Logo,Path) VALUES
('Img/baby_groot-2560x1440.jpg','home.php');

INSERT INTO Slider (ID_Slider,Img,SliderTitle,SliderText) VALUES 
(1,'Img/baby_groot-2560x1440.jpg','Titolo Qui','Testo Qui'),
(2,'Img/FILE-BLOG-2.jpg','Titolo Qui','Testo Qui'),
(3,'Img/pizza2.jpg','Titolo Qui','Testo Qui');

INSERT INTO Home (ID_Home,Titolo,Descrizione,Img,Icona) VALUES
(0,NULL,NULL,NULL,NULL),
(1,NULL,NULL,NULL,NULL),
(2,NULL,NULL,NULL,NULL);

INSERT INTO Recensione (ID_Recensione,Nome,Avatar,Testo) VALUES
(1,'Nome Qui','Img/avatar-1g.jpg','Testo Qui'),
(2,'Nome Qui','Img/avatar-2g.jpg','Testo Qui'),
(3,'Nome Qui','Img/avatar-3g.jpg','Testo Qui');

INSERT INTO Footer (ID_Foot,Titoletto,Indirizzo,Tel) VALUES
(1,NULL,NULL,NULL);

INSERT INTO Storia (ID_Storia,Titolo,Descrizione,Img) VALUES
(0,NULL,NULL,NULL),
(1,NULL,NULL,NULL),
(2,NULL,NULL,NULL),
(3,NULL,NULL,NULL),
(4,NULL,NULL,NULL);

INSERT INTO Rist_Pizz (ID_Rist_Pizz,Titolo,Descrizione,Img,Categoria) VALUES
(0,NULL,NULL,NULL,NULL),
(1,NULL,NULL,NULL,NULL),
(2,NULL,NULL,NULL,NULL),
(3,NULL,NULL,NULL,NULL),
(4,NULL,NULL,NULL,NULL);

INSERT INTO Caffetteria (ID_Caffetteria,Titolo,Descrizione,Img) VALUES
(0,NULL,NULL,NULL),
(1,NULL,NULL,NULL),
(2,NULL,NULL,NULL),
(3,NULL,NULL,NULL);

INSERT INTO Presentazione_Reservation (Titolo,Descrizione,Img) VALUES
('Titolo',NULL,NULL);

INSERT INTO Gallery (ID_Gallery,Img) VALUES
(7, 'Img/Gallery/cappuccino.jpg'),
(9, 'Img/Gallery/cheesecake.jpg'),
(1, 'Img/Gallery/colazione.jpg'),
(15, 'Img/Gallery/dolci.jpg'),
(6, 'Img/Gallery/drink1.jpg'),
(14, 'Img/Gallery/drink2.jpg'),
(0, 'Img/Gallery/gallery.jpg'),
(12, 'Img/Gallery/panna-cotta.jpg'),
(10, 'Img/Gallery/pasta.jpg'),
(3, 'Img/Gallery/pesto.jpg'),
(8, 'Img/Gallery/pizza1.jpg'),
(13, 'Img/Gallery/pizza2.jpg'),
(2, 'Img/Gallery/profitteroles.jpg'),
(5, 'Img/Gallery/tagliata.jpg'),
(11, 'Img/Gallery/tappi.jpg'),
(4, 'Img/Gallery/tortafrutta.jpg');

INSERT INTO Contatti (ID_Contatti,Titolo,Indirizzo,Tel,Fax,Email,Descrizione,Img) VALUES
(1,'Titolo Qui','Indirizzo Qui','Tel Qui','Fax Qui','Email Qui','Descrizione Qui','Img/contact.jpg');

INSERT INTO Orario (ID_Giorno,Giorno,Orario) VALUES
(1,'Lunedì','Orario'),
(2,'Martedì','Orario'),
(3,'Mercoledì','Orario'),
(4,'Giovedì','Orario'),
(5,'Venerdì','Orario'),
(6,'Sabato','Orario'),
(7,'Domenica','Orario');

INSERT INTO Evento (ID_Evento,Data,Nome,Descrizione,Img) VALUES
(0,NULL,NULL,NULL,NULL),
(1,NULL,NULL,NULL);

INSERT INTO Faq (ID_Faq,Domanda,Risposta,Img) VALUES
(0,NULL,NULL,NULL);