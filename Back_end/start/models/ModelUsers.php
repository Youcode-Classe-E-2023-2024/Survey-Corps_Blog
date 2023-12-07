<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/backwork/Dataopp.php";

$Users = new DatabaseConnect('phpframe', 'localhost', 'root', '');

$Users->CreateTable("CREATE TABLE IF NOT EXISTS roles (
    id_role INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(50)    
);");

$Users->CreateTable("CREATE TABLE IF NOT EXISTS Utilisateurs (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(60),
    Email VARCHAR(100),
    MotDePasse VARCHAR(255),
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES roles(id_role)
);");
$Users->CreateTable("CREATE TABLE IF NOT EXISTS Permissions (
    id_Permission INT PRIMARY KEY AUTO_INCREMENT,
    Permission VARCHAR(50)
);");
$Users->CreateTable("CREATE TABLE IF NOT EXISTS affecter_user_Permissions (
    id_user INT,
    id_Permission INT,
    PRIMARY KEY (id_user, id_Permission),
    FOREIGN KEY (id_user) REFERENCES Utilisateurs(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_Permission) REFERENCES Permissions(id_Permission) ON DELETE CASCADE
);");




// $Users->CreateTable("CREATE TABLE IF NOT EXISTS users (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(50),
//     age INT
// )");