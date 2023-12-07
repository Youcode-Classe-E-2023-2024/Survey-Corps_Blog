<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelUsers.php";

if(isset($this->autorisation) && $this->autorisation === 1){
    
    if(empty($this->others)){
    
      http_response_code(200);
      echo json_encode($Users->selectAll("Utilisateurs"));
  
  
  }else{
    // mn b3d add token mnin jaya request specify user cant fetch data other then his own
  
  
      http_response_code(200);
      echo json_encode($Users->selectWhere("Utilisateurs","id_user = {$this->others[0]}"));
  
  
  }
  
  
  }else{
    
      echo "no autorisation";  
  }
