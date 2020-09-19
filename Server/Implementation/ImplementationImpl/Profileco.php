<?php


require_once __DIR__ . '/../ProCo.php';
require_once __DIR__ . '/../../Repository/RepositoryImpl/profileRepositoryImpl.php';

class Profileco implements ProCo
{
    private $bookRepoImpl;

    public function __construct()
    {

        $this->bookRepoImpl=new profileRepositoryImpl();
    }

    public function addUser()
    {
        // TODO: Implement addUser() method.
    }

    public function login($uname, $password)
    {
        $connection = (new DBConnection())->getConnection();

        $this->bookRepoImpl->setConnection($connection);

        $result = $this->bookRepoImpl->login($uname,$password);


        mysqli_close($connection);

        return $result;


    }

    public function searchBook($bname)
    {
        $connection = (new DBConnection())->getConnection();
        $this->bookRepoImpl->setConnection($connection);
        $result = $this->bookRepoImpl->searchBook($bname);
        return $result;
        // if($result>0){
        //     return true;
        // }else{
        //     return false;
        // }
    }



 public function loginANDsession($uname, $Pass)
    {

        $result = $this->bookRepoImpl->login($uname, $Pass);

        if ($result != null) {
          
            return true;
        } else {
            return false;
        }
    }

    public function addprofile($name,$author,$supplier,$year,$catagory,$bookfile)
    {

       
$result = $this->bookRepoImpl->addpro($name,$author,$supplier,$year,$catagory,$bookfile);

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
    public function addnew2($name,$author,$supplier,$year,$catagory,$bookfile)
    {

       
$result = $this->bookRepoImpl->add2($name,$author,$supplier,$year,$catagory,$bookfile);

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
    public function update($name,$author,$supplier,$year,$catagory,$bookfile)
    {

       
$result = $this->bookRepoImpl->up($name,$author,$supplier,$year,$catagory,$bookfile);

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
    public function addcompany($name,$author,$supplier,$year,$catagory,$bookfile)
    {

       
$result = $this->bookRepoImpl->addcom($name,$author,$supplier,$year,$catagory,$bookfile);

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


public function searchUser($state,$key)
    {
          $connection = (new DBConnection())->getConnection();
        $this->bookRepoImpl->setConnection($connection);
        $itemArray = $this->bookRepoImpl->searchUser($state,$key);
        // mysqli_close($connection);
        return $itemArray;
    }
    public function search($state,$key)
    {
          $connection = (new DBConnection())->getConnection();
        $this->bookRepoImpl->setConnection($connection);
        $itemArray = $this->bookRepoImpl->search($state,$key);
        // mysqli_close($connection);
        return $itemArray;
    }
    public function delUser($key)
    {
          $connection = (new DBConnection())->getConnection();
        $this->bookRepoImpl->setConnection($connection);
        $itemArray = $this->bookRepoImpl->delUser($key);
        // mysqli_close($connection);
        return $itemArray;
    }

    public function getrequest(){
       $connection = (new DBConnection())->getConnection();
        $this->bookRepoImpl->setConnection($connection);
        $itemArray = $this->bookRepoImpl->getrequest();
        mysqli_close($connection);
        return $itemArray;
     }
     public function getrequest1(){
        $connection = (new DBConnection())->getConnection();
         $this->bookRepoImpl->setConnection($connection);
         $itemArray = $this->bookRepoImpl->getrequest1();
         mysqli_close($connection);
         return $itemArray;
      }

      public function getrequest2(){
        $connection = (new DBConnection())->getConnection();
         $this->bookRepoImpl->setConnection($connection);
         $itemArray = $this->bookRepoImpl->getrequest2();
         mysqli_close($connection);
         return $itemArray;
      }

}