<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelUsers.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){;
    if(empty($this->others)){
    if ($data !== null) {
        // add filter later
        var_dump($data);
        echo $this->senderid; // hna ghanzid check dyal permision 
        

        $Users->Insert("Utilisateurs",$data);
        
        $id = $Users->selectWhere(
            "id_user",
            "Utilisateurs",
            "Email = '{$data['Email']}' AND MotDePasse = '{$data['MotDePasse']}'"
        );
        echo $id[0]['id_user'] ;

        $Users->Insert("affecter_user_permissions", ["id_user" => $id[0]['id_user'], "id_Permission" => 1]);
        $Users->Insert("affecter_user_permissions", ["id_user" => $id[0]['id_user'], "id_Permission" => 2]);
        $Users->Insert("affecter_user_permissions", ["id_user" => $id[0]['id_user'], "id_Permission" => 3]);


        // $Users->Insert("Utilisateurs", [$id[0]['id_user'] => '2']);
        // $Users->Insert("Utilisateurs", [$id[0]['id_user'] => '3']);

        

    } else {
        echo "Failed to decode JSON data";
    }
    }else{
        var_dump($this->others);
    }
}else{
    echo "no perm";
}


?>