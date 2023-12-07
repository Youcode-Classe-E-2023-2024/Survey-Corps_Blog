<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelAnonce.php";
if($_SERVER['REQUEST_METHOD'] === "DELETE"){
    if(empty($this->others)){
        http_response_code(301);
     echo json_encode(["message" => "nothing specifiyed"]);
    }else{
        echo $this->senderid; // hna ghanzid check dyal permision 
        $Anonce->delete("Articles","ArticleID = {$this->others[0]}");

    }
}else{
    echo "no perm";
}


?>