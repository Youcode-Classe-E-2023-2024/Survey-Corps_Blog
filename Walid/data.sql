CREATE TABLE Articles (
    ArticleID INT PRIMARY KEY AUTO_INCREMENT,
    Titre VARCHAR(255),
    Contenu TEXT NOT NULL,
    DatePublication TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    HeurePublication TIME DEFAULT CURRENT_TIME,
    AuteurID INT,
    FOREIGN KEY (AuteurID) REFERENCES Utilisateurs(UserID)
);


CREATE TABLE Utilisateurs (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(50) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    MotDePasse VARCHAR(255) NOT NULL
);
CREATE TABLE Permissions (
    PermissionID INT PRIMARY KEY AUTO_INCREMENT,
    NomPermission VARCHAR(50) NOT NULL
);
CREATE TABLE UtilisateursPermissions (
    UserID INT,
    PermissionID INT,
    PRIMARY KEY (UserID, PermissionID),
    FOREIGN KEY (UserID) REFERENCES Utilisateurs(UserID) ON DELETE CASCADE,
    FOREIGN KEY (PermissionID) REFERENCES Permissions(PermissionID) ON DELETE CASCADE
);
