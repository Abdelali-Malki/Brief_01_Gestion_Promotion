DROP DATABASE IF EXISTS gestiondespromotions_v1;

CREATE DATABASE gestiondespromotions_v1;
USE gestiondespromotions_v1;

CREATE TABLE promotion(
    id_promotion INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25)
);
INSERT INTO promotion(nom) VALUES("promo1"),("promo2"),("promo3"),("promo4");