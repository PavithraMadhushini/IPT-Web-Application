<?php

require_once 'Implementation/ImplementationImpl/UserBOI.php';

header("Content-Type: application/json");

$method = $_SERVER["REQUEST_METHOD"];

$userBoImpl = new UserBOI();


switch ($method){
    case "POST":
        $action = $_POST['action'];
        switch ($action){
            case "login":
                $uname = $_POST["uname"];
                $pass = $_POST["pass"];
                echo json_encode($userBoImpl->login($uname,$pass));
                break;
            case "searchUser":
                $uname = $_POST["uname"];
                echo  json_encode($userBoImpl->searchUser($uname));
                break;
            case "signup":
                $fullname = $_POST["fullname"];
                $age=$_POST["age"];
                $contact = $_POST["contact"];
                $con = $_POST["con"];
                $address = $_POST["address"];
                $uname = $_POST["uname"];
                $pass = $_POST["password"];
                   $role = $_POST["role"];
                $approved = $_POST["approve"];
                echo json_encode($userBoImpl->signUpANDsession($fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved));
                break;

        }

        break;
        case "GET":
            $action= $_GET["action"];
            switch ($action){
                case "isuser":
                    echo json_encode($userBoImpl->getstudent());
                    break;
        }
        break;
        case "GET":
            $action= $_GET["action"];
            switch ($action){
                case "deuser":
                    echo json_encode($userBoImpl->getall());
                    break;
        }
        break;
        case "PUT":
              $data = file_get_contents("php://input");
            echo $data;
            $action = explode('&', $data)[0];
            $actionArray = explode('=', $action);
            $id = explode('&', $data)[1];
            $idArray = explode('=', $id);
            echo "action = ".$actionArray[1]." id = ".$idArray[1];
                switch ($actionArray[1]){
                case "acceptuser":
                    echo json_encode($userBoImpl->acceptuser($idArray[1]));
                    break;
// }
                
        }
break;
          
}