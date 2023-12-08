<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelUsers.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(empty($this->others)){
    if ($data !== null) {
        // add filter later
        var_dump($data);
        echo $this->senderid; // hna ghanzid check dyal permision 
        
        $Users->Insert("Utilisateurs",$data);
        

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