<?php
require_once 'Implementation/ImplementationImpl/Profileco.php';
require_once 'Repository/RepositoryImpl/profileRepositoryImpl.php';
header("Content-Type: application/json");
$method = $_SERVER["REQUEST_METHOD"];

$bookBoImpl = new BookBOI();
$repo = new profileRepositoryImpl();

$data = file_get_contents("php://input");

            $action = explode('&', $data)[0];
            $actionArray = explode('=', $action);
            $id = explode('&', $data)[1];
            $idArray = explode('=', $id);
            echo "action = ".$actionArray[1]." id = ".$idArray[1];
                switch ($actionArray[1]){
                case "deletebook":
                    echo json_encode($bookBoImpl->deletebook($idArray[1]));
                    break;
// }
                 }
               //case "GET":
            $action= $_GET["action"];
            $state=$_GET["state"];

            $key=$_GET["skey"];
           echo $action;
           echo $state;
           echo $key;
            switch ($action){
                case "searchbook":
                    // echo json_encode($bookBoImpl->searchBookbyval($state,$key));
                echo json_encode($bookBoImpl->searchBookbyval($state,$key));
                    break;
                }