<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelAnonce.php";
if($_SERVER['REQUEST_METHOD'] === "PUT"){
    if(empty($this->others)){
        http_response_code(301);
     echo json_encode(["message" => "nothing specifiyed"]);
    }else{
        if ($data !== null) {
            // add filter later
            var_dump($data);
            
            echo $this->senderid; // hna ghanzid check dyal permision 
            $permissions =  $Anonce->selectWhere('id_Permission ',"affecter_user_permissions","id_user = {$this->senderid} AND id_Permission = 3");
        
            if($permissions){
                $Anonce->Update("Articles", $data,"ArticleID = {$this->others[0]}");
            }else{
                echo "no permission for the modify";
            }
            
        } else {
            echo "Failed to decode JSON data";
        }
    }
}else{
    echo "no perm";
}


?>