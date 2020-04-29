CREATE DATABASE IF NOT EXISTS minislam;
USE minislam;
CREATE TABLE IF NOT EXISTS USER(
  id_user int not null AUTO_INCREMENT,
  identifiant varchar(100) not null,
  mdp varchar(100) not null,
  PRIMARY KEY(id_user)
);

CREATE TABLE IF NOT EXISTS SHOWROOM(
  id_legume int not null AUTO_INCREMENT,
  nom_legume varchar(100) not null,
  poids_legume int not null,
  prix int not null,
  quantite int not null,
  PRIMARY KEY(id_legume)

);

INSERT INTO SHOWROOM(nom_legume,poids_legume,prix,quantite) VALUES
('courgette',4,2,100),
('tomate',1,3,20),
('potimaron',3,1,10),
('aubergine',10,2,100),
('cerise',30,100,10),
('champignon',40,10,30);
 
