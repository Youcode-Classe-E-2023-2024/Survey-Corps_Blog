<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/Modelpermissions.php";

$body = file_get_contents("php://input");
$data = json_decode($body, true);

echo $data["id_user"];
echo $data["id_Permission"];
if(count($Admin->selectWhere("*","affecter_user_permissions","id_user = {$data["id_user"]} AND id_Permission = {$data["id_Permission"]}"))>0){
    $Admin->delete("affecter_user_permissions","id_user = {$data["id_user"]} AND id_Permission = {$data["id_Permission"]}");
}else{
    echo "nothing";
}
