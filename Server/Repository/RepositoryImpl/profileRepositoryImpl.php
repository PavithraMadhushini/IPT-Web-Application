<?php




require_once __DIR__ . '/../ProRepository.php';
require_once __DIR__.'/../../DB/DBConnection.php';



class profileRepositoryImpl implements ProRepository
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

    public function addpro($name,$author,$supplier,$year,$category,$bookfile)
    {
        $pre = $this->connection->prepare("INSERT INTO profile (name,campus,idno,email,category,tell) VALUES (?,?,?,?,?,?)");
        $pre->bind_param("sssssi",$name,$author,$supplier,$year,$category,$bookfile);
        $result = $pre->execute();
        if($result&&$pre->affected_rows>0){
            return true;
        }else{
            return false;
        }

    }
    public function add2($name,$author,$supplier,$year,$category,$bookfile)
    {
        $pre = $this->connection->prepare("UPDATE profile SET name='$name',campus='$author',idno='$supplier',email='$year',category='$category',tell='$bookfile' WHERE name='$name'");
        $result = $pre->execute();
        if($result&&$pre->affected_rows>0){
            return true;
        }else{
            return false;
        }

    }
    public function up($name,$author,$supplier,$year,$category,$bookfile)
    {
        $pre = $this->connection->prepare("UPDATE companayprofile SET name='$name',address='$supplier',jobtype='$author',email='$year',qualification='$category',tell='$bookfile' WHERE name='$name'");
        $result = $pre->execute();
        if($result&&$pre->affected_rows>0){
            return true;
        }else{
            return false;
        }

    }
    public function addcom($name,$author,$supplier,$year,$category,$bookfile)
    {
        $pre = $this->connection->prepare("INSERT INTO companayprofile (name,qualification,address,email,jobtype,tell) VALUES (?,?,?,?,?,?)");
        $pre->bind_param("ssssss",$name,$author,$supplier,$year,$category,$bookfile);
        $result = $pre->execute();
        if($result&&$pre->affected_rows>0){
            return true;
        }else{
            return false;
        }

    }
    public function login($uname, $password)
    {

        $results = $this->connection->query("SELECT * FROM user WHERE username = '$uname' AND password = '$password'");

        return $results->fetch_assoc();


    }

    public function searchBook($bname)
    {
        $result  = $this->connection->query("SELECT * FROM profile WHERE id = '$bname'");
        return $result->fetch_assoc();

    }
  

   public function searchUser($state,$key)
    {
        $result  = $this->connection->query("SELECT * FROM profile WHERE $state = '$key'");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    public function search($state,$key)
    {
        $result  = $this->connection->query("SELECT * FROM profile WHERE $state = '$key'");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    public function delUser($key)
    {
        $result  = $this->connection->query("DELETE from users WHERE id = '$key'");
        if($result){
            return true;
        }else{
            return false;
        }
    

    }


             public function getrequest()
    {
        $result  = $this->connection->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    public function getrequest1()
    {
        $result  = $this->connection->query("SELECT * FROM profile");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    public function getrequest2()
    {
        $result  = $this->connection->query("SELECT * FROM companayprofile");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
 
}