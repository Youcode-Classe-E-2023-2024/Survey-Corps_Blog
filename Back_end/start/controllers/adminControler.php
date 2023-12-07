<?php

    include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/Modelpermissions.php";

    http_response_code(200);

    $articles = $Admin->selectAll("Articles");
    $users = $Admin->selectAll("Utilisateurs");
    $permissions = $Admin->selectAll("affecter_user_permissions");
    $response = [
        'articles' => $articles,
        'users' => $users,
        'permissions' => $permissions,
    ];

    echo json_encode($response);
    

