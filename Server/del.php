<?php

require_once 'Implementation/ImplementationImpl/Profileco.php';
require_once 'Repository/RepositoryImpl/profileRepositoryImpl.php';
header("Content-Type: application/json");
$method = $_SERVER["REQUEST_METHOD"];

$bookBoImpl = new Profileco();
$repo = new profileRepositoryImpl();


switch ($method){
   
        case "DELETE":
            $action= $_GET["action"];
            
            $key=$_GET["skey"];
           //echo $action;
           //echo $state;
           //echo $key;
            switch ($action){
                case "deluser":
                    // echo json_encode($bookBoImpl->searchBookbyval($state,$key));
                echo json_encode($bookBoImpl->delUser($key));
                    break;
                
        }
        break;
    
        
       
       
}