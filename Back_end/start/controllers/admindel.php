
<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/Modelpermissions.php";

$body = file_get_contents("php://input");
$data = json_decode($body, true);
if($_SERVER['REQUEST_METHOD'] === "DELETE"){
    if($data["id_Permission"] === "article"){

        $Admin->delete("Articles","ArticleID = {$data["id_user"]}");;
    }elseif($data["id_Permission"] === "user"){

        $Admin->delete("Utilisateurs","id_user = {$data["id_user"]}");
    }
    
}

