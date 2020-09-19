<?php


require_once __DIR__ . '/../UserBO.php';
require_once __DIR__ . '/../../Repository/RepositoryImpl/UserRepositoryImpl.php';

class UserBOI implements UserBO
{
    private $userRepoImpl;

    public function __construct()
    {

        $this->userRepoImpl=new UserRepositoryImpl();
    }

    public function addUser()
    {
        // TODO: Implement addUser() method.
    }

    public function login($uname, $password)
    {       $connection = (new DBConnection())->getConnection();
        $this->userRepoImpl->setConnection($connection);
        $itemArray = $this->userRepoImpl->login($uname, $password);
        mysqli_close($connection);
        return $itemArray;

    }

    public function searchUser($uname)
    {
        $connection = (new DBConnection())->getConnection();
        $this->userRepoImpl->setConnection($connection);
        $result = $this->userRepoImpl->seachUser($uname);
        return $result;
        if($result>0){
            return true;
        }else{
            return false;
        }
    }



 public function loginANDsession($uname, $Pass)
    {

        $result = $this->userRepoImpl->login($uname, $Pass);

        if ($result != null) {
          
            return true;
        } else {
            return false;
        }
    }

    public function signUpANDsession($fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved)
    {

       
$result = $this->userRepoImpl->addUser($fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved);

       if($result){
           // session_set_cookie_params(90*60);
           // session_start();
           // $_SESSION["status"] = true;
           // $_SESSION["fullname"] = $fullname;
           // $_SESSION["uname"] = $unmae;
           // $_SESSION["cart"] = array();
           return true;
       }
       else{
           return false;
       }


    }



    public function getstudent(){
       $connection = (new DBConnection())->getConnection();
        $this->userRepoImpl->setConnection($connection);
        $itemArray = $this->userRepoImpl->getstudent();
        mysqli_close($connection);
        return $itemArray;
     }

     public function getall(){
        $connection = (new DBConnection())->getConnection();
         $this->userRepoImpl->setConnection($connection);
         $itemArray = $this->userRepoImpl->getall();
         mysqli_close($connection);
         return $itemArray;
      }
 
       public function acceptuser($bid){
      $result = $this->userRepoImpl->acceptuser($bid);

       if($result){
           return true;
       }
       else{
           return false;
       }
     }

     public function deleteuser($bid){
        $result = $this->userRepoImpl->deleteuser($bid);
  
         if($result){
             return true;
         }
         else{
             return false;
         }
       }
       public function assignuser($bid){
        $result = $this->userRepoImpl->assignuser($bid);
  
         if($result){
             return true;
         }
         else{
             return false;
         }
       }
}