CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    image VARCHAR(255) ,
    est_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE categories (
    nom VARCHAR(100) PRIMARY KEY
);

CREATE TABLE taches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_creation DATE,
    complete VARCHAR(255),
    prioritai VARCHAR(255),
    categorie VARCHAR(255),
    auteur_id INT,
    FOREIGN KEY (auteur_id) REFERENCES utilisateurs(id),
    FOREIGN KEY (categorie) REFERENCES Categories(nom)
);


