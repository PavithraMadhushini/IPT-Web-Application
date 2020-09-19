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
          
            case "addprofile":
                $name = $_POST["name"];
                $author=$_POST["qul"];
                $supplier = $_POST["id"];
                $year = $_POST["email"];
                $category = $_POST["category"];
                $bookfile = $_POST["tell"];
                
                echo json_encode($bookBoImpl->addprofile($name,$author,$supplier,$year,$category,$bookfile));
                break;
                case "update":
                    $name = $_POST["name"];
                    $author=$_POST["author"];
                    $supplier = $_POST["supplier"];
                    $year = $_POST["year"];
                    $category = $_POST["category"];
                    $bookfile = $_POST["bookfile"];
                    
                    echo json_encode($bookBoImpl->update($name,$author,$supplier,$year,$category,$bookfile));
                    break;
                    case "addcompany":
                        $name = $_POST["name"];
                        $author=$_POST["author"];
                        $supplier = $_POST["supplier"];
                        $year = $_POST["year"];
                        $category = $_POST["category"];
                        $bookfile = $_POST["bookfile"];
                        
                        echo json_encode($bookBoImpl->addcompany($name,$author,$supplier,$year,$category,$bookfile));
                        break;
          

        }

        break;

        case "GET":
            $action= $_GET["action"];
            $state=$_GET["state"];
            $key=$_GET["skey"];
           //echo $action;
           //echo $state;
           //echo $key;
            switch ($action){
                case "searchuser":
                    // echo json_encode($bookBoImpl->searchBookbyval($state,$key));
                echo json_encode($bookBoImpl->searchUser($state,$key));
                    break;
             case "searchrarebook":
                echo json_encode($bookBoImpl->searchpublicBook($state,$key));
                break;        
        }
        case "GET":
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
        case "DELETE":
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

break;
        
       
       
}