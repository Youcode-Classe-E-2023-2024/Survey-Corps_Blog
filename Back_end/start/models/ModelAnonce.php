<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/backwork/Dataopp.php";

$Anonce = new DatabaseConnect('phpframe1', 'localhost', 'root', '');


$Anonce->CreateTable("CREATE TABLE IF NOT EXISTS Articles (
    ArticleID INT PRIMARY KEY AUTO_INCREMENT,
    Titre VARCHAR(255),
    Contenu TEXT ,
    Prix TEXT ,
    Date DATE DEFAULT CURRENT_DATE,
    Heure TIME DEFAULT CURRENT_TIME,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES Utilisateurs(id_user)  
);");







// $Anonce->Insert("users", ['name' => "imad", 'age' => '12']);
// echo "hi from modeel";
