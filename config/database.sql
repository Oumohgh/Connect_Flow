CREATE DATABASE application_de_gestion_des_contacts;

CREATE TABLE utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(50),
    nom VARCHAR(50),
    email VARCHAR(50), 
    password VARCHAR(50),
    profilePicture varchar(255),
    dateInscription TIMESTAMP
    )

    CREATE TABLE contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(25), 
    nom VARCHAR(25),
    telephone VARCHAR(25),
    email VARCHAR(25), 
    ville VARCHAR (25),
    pays VARCHAR (25),
    adress VARCHAR(25), 
    userId int,
    FOREIGN KEY (userId) REFERENCES utilisateurs(id) )
    

