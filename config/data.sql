CREATE DATABASE gestion

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP

)

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        
);


INSERT INTO users (firstname, lastname, email, password)
VALUES ('Mohammed', 'Oughlane', 'test@test.com', '123456');


INSERT INTO contacts (firstname, lastname, email, phone, address, user_id)
VALUES ('Ali', 'Benomar', 'ali@test.com', '+212600000000', 'Rabat', 1);