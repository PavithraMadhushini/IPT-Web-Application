<?php

require_once 'Implementation/ImplementationImpl/Profileco.php';
require_once 'Repository/RepositoryImpl/profileRepositoryImpl.php';
header("Content-Type: application/json");
$method = $_SERVER["REQUEST_METHOD"];

$bookBoImpl = new Profileco();
$repo = new profileRepositoryImpl();


switch ($method){
    case "POST":
        $action = $_POST['action'];
        switch ($action){
          
           

        }

        break;

        case "GET":
       case "GET":
            $action= $_GET["action"];
            switch ($action){
                case "request":
                    echo json_encode($bookBoImpl->getrequest1());
                    break;
        }
        break;
      
        
       
       
}