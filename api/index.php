<?php
  
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Credentials: true");
 header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
 header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");
 header("Content-Type: application/json; charset=utf-8");

 include 'service/s_user.php';
 $s_user    = new S_User();
 
 $response_json = file_get_contents("php://input");
 $data = json_decode($response_json, true);

if ($_GET['action'] === 'user') {
 
   echo json_encode($s_user->listUser());
   
}