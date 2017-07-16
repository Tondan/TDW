CREATE TABLE IF NOT EXISTS groups(
   id int(10) UNSIGNED NOT NULL, 
   name1 varchar(100) NOT NULL,
   PRIMARY KEY(id)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1; 
 
 
 CREATE TABLE IF NOT EXISTS groupservices ( 
  id_group int(10) UNSIGNED NOT NULL,
  id_service int(10) UNSIGNED NOT NULL,
   PRIMARY KEY(id_group, id_service),
     INDEX(id_group),
     INDEX(id_service),
   FOREIGN KEY (id_group) REFERENCES groups(id),
   FOREIGN KEY (id_service) REFERENCES services(id)
   ON DELETE CASCADE
   ON UPDATE CASCADE  
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
 
 
 
 
 CREATE TABLE IF NOT EXISTS users ( 
  username varchar(30) NOT NULL, 
  password1 varchar(32) NOT NULL, 
  name1 varchar(100) DEFAULT NULL, 
  surname varchar(100) DEFAULT NULL, 
  email varchar(255) DEFAULT NULL,
     PRIMARY KEY (username)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 



CREATE TABLE IF NOT EXISTS users_groups ( 
  username varchar(30) NOT NULL, 
  id_group int(10) UNSIGNED NOT NULL,
    PRIMARY KEY(username, id_group),
    INDEX(username),
    INDEX(id_group),
    FOREIGN KEY (username) REFERENCES users(username),
    FOREIGN KEY (id_group) REFERENCES groups(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
 
 
 
 CREATE TABLE IF NOT EXISTS services (
     id int(10) unsigned not null, 
  script varchar(255) NOT NULL, 
  name1 varchar(100) DEFAULT NULL, 
  description text,
     PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
 
 