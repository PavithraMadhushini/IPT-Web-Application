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
          
            case "addbook":
                $name = $_POST["name"];
                $author=$_POST["author"];
                $supplier = $_POST["supplier"];
                $year = $_POST["year"];
                $category = $_POST["category"];
                $bookfile = $_POST["bookfile"];
                $publi = $_POST["public"];
                echo json_encode($bookBoImpl->addnewbook($name,$author,$supplier,$year,$category,$bookfile,$publi));
                break;
            case "searchBook":
                $bname = $_POST["bname"];
                echo  json_encode($bookBoImpl->searchBook($bname));
                break;
           
            case "searchBookbyname":
                $bname = $_POST["bname"];
                echo  json_encode($bookBoImpl->searchBookbyname($bname));
                break;

             case "searchBookbyauthor":
                $bname = $_POST["bname"];
                echo  json_encode($bookBoImpl->searchBookbyauthor($bname));
                break;
            case "rqstbook":
                $id=$_POST["id"];
                $name = $_POST["name"];
                $author=$_POST["author"];
                $year = $_POST["year"];
                $category = $_POST["category"];
                $user = $_POST["user"];
                $date = $_POST["date"];
                echo json_encode($bookBoImpl->reqbook($user,$id,$name,$author,$year,$category,$date));
                break;

        }

        break;

        case "GET":
       case "GET":
            $action= $_GET["action"];
            switch ($action){
                case "request":
                    echo json_encode($bookBoImpl->getrequest2());
                    break;
        }
        break;
      
        
       
       
}