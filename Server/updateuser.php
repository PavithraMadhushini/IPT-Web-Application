<?php

require_once 'Implementation/ImplementationImpl/UserBOI.php';
header("Content-Type: application/json");
$method = $_SERVER["REQUEST_METHOD"];
$userBoImpl = new UserBOI();


switch ($method){
        case "PUT":
              $data = file_get_contents("php://input");
            // echo $data;
            $action = explode('&', $data)[0];
            $actionArray = explode('=', $action);
            $id = explode('&', $data)[1];
            $idArray = explode('=', $id);
            // echo "action = ".$actionArray[1]." id = ".$idArray[1];
                switch ($actionArray[1]){
                case "acceptuser":
                    echo json_encode($userBoImpl->acceptuser($idArray[1]));
                    break;

                
        }
break;

break;  
}switch ($method){
  case "DELETE":
        $data = file_get_contents("php://input");
      // echo $data;
      $action = explode('&', $data)[0];
      $actionArray = explode('=', $action);
      $id = explode('&', $data)[1];
      $idArray = explode('=', $id);
      // echo "action = ".$actionArray[1]." id = ".$idArray[1];
          switch ($actionArray[1]){
          case "deleteuser":
              echo json_encode($userBoImpl->deleteuser($idArray[1]));
              break;

          
  }
break;

break;  
}
switch ($method){
  case "INSERT":
        $data = file_get_contents("php://input");
      // echo $data;
      $action = explode('&', $data)[0];
      $actionArray = explode('=', $action);
      $id = explode('&', $data)[1];
      $idArray = explode('=', $id);
      // echo "action = ".$actionArray[1]." id = ".$idArray[1];
          switch ($actionArray[1]){
          case "assignuser":
              echo json_encode($userBoImpl->assignuser($idArray[1]));
              break;

          
  }
break;

break;  
}