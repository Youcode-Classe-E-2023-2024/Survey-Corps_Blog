<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelAnonce.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(empty($this->others)){
    if ($data !== null) {
        // add filter later
        var_dump($data);
        
        echo $this->senderid; // hna ghanzid check dyal permision 
        // var_dump( $Anonce->selectWhere("affecter_user_permissions","id_user = {$this->senderid}"));
        $permissions =  $Anonce->selectWhere('id_Permission ',"affecter_user_permissions","id_user = {$this->senderid} AND id_Permission = 1");
        
        if($permissions){
            $Anonce->Insert("Articles",$data);
        }else{
            echo "no permission for the add";
        }
        
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