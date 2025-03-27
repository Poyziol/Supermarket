DROP TABLE IF EXISTS supermarche_achat;
DROP TABLE IF EXISTS supermarche_caisse;
DROP TABLE IF EXISTS supermarche_produits;
DROP TABLE IF EXISTS supermarche_client;

CREATE TABLE supermarche_client(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    solde DECIMAL(10,2) NOT NULL,
    mot_de_passe VARCHAR(20) NOT NULL
);

CREATE TABLE supermarche_produit(
    id_produit INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prix DECIMAL(7,2) NOT NULL
);

CREATE TABLE supermarche_caisse(
    id_caisse INT PRIMARY KEY AUTO_INCREMENT,
    num_caisse INT NOT NULL,
    id_produit INT NOT NULL,
    FOREIGN KEY (id_produit) REFERENCES supermarche_produit(id_produit)
);

CREATE TABLE supermarche_achat(
    id_achat INT PRIMARY KEY AUTO_INCREMENT,
    id_produit INT NOT NULL,
    quantite INT NOT NULL,
    id_caisse INT NOT NULL,
    FOREIGN KEY (id_produit) REFERENCES supermarche_produit(id_produit),
    FOREIGN KEY (id_caisse) REFERENCES supermarche_caisse(id_caisse)
);