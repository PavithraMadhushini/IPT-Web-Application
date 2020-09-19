<?php
/**
 * Created by IntelliJ IDEA.
 * User: sahan
 * Date: 8/6/18
 * Time: 4:24 PM
 */


require_once __DIR__ . '/../UserRepository.php';
require_once __DIR__.'/../../DB/DBConnection.php';



class UserRepositoryImpl implements UserRepository
{

    private $connection;

    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addUser($fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved)
    {
        $pre = $this->connection->prepare("INSERT INTO users (name,profession,idno,email,affiliation,type,username,password,status) VALUES (?,?,?,?,?,?,?,?,?)");
        $pre->bind_param("ssssssssi",$fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved);
        $result = $pre->execute();
        if($result&&$pre->affected_rows>0){
            return true;
        }else{
            return false;
        }

    }

    public function login($uname, $password)
    {

        $results = $this->connection->query("SELECT * FROM users WHERE username = '$uname' AND password = '$password' AND  status = '0'");

        return $results->fetch_all(MYSQLI_ASSOC);


    }

    public function seachUser($uname)
    {
        $result  = $this->connection->query("SELECT name FROM user WHERE username = '$uname'");
        return $result->num_rows;

    }



         public function getstudent()
    {
        $result  = $this->connection->query("SELECT * FROM users WHERE status = '1'");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    public function getall()
    {
        $result  = $this->connection->query("SELECT * FROM users");
        return $result->fetch_all1(MYSQLI_ASSOC);

    }

        public function acceptuser($bid)
    {

        $pre  = $this->connection->query("UPDATE users SET status = '0' WHERE id = '$bid'");
        // $result = $pre->execute();
        if($pre){
            return true;
        }else{
            return false;
        }

    }
    public function deleteuser($bid)
    {

        $pre  = $this->connection->query("DELETE from users WHERE id = '$bid'");
        // $result = $pre->execute();
        if($pre){
            return true;
        }else{
            return false;
        }

    }
    public function assignuser($bid)
    {

        $pre  = $this->connection->query("INSERT INTO assign(userid) VALUES ($bid)");
        // $result = $pre->execute();
        if($pre){
            return true;
        }else{
            return false;
        }

    }
}