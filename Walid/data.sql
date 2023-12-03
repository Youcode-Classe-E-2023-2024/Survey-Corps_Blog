CREATE TABLE Articles (
    ArticleID INT PRIMARY KEY AUTO_INCREMENT,
    Titre VARCHAR(255),
    Contenu TEXT ,
    Date DATE DEFAULT CURRENT_DATE,
    Heure TIME DEFAULT CURRENT_TIME,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES Utilisateurs(id_user)
);
CREATE TABLE Utilisateurs (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(50) ,
    Email VARCHAR(100) ,
    MotDePasse VARCHAR(255) ,
    id_role INT 
    FOREIGN KEY (id_role) REFERENCES role(id_role)
);
CREATE TABLE roles (
    id_role INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(50) 
    
);
CREATE TABLE Permissions (
    id_Permission INT PRIMARY KEY AUTO_INCREMENT,
    Permission VARCHAR(50)
);
CREATE TABLE affecter_user_Permissions (
    id_user INT,
    id_Permission INT,
    PRIMARY KEY (id_user, id_Permission),
    FOREIGN KEY (id_user) REFERENCES Utilisateurs(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_Permission) REFERENCES Permissions(id_Permission) ON DELETE CASCADE
);
