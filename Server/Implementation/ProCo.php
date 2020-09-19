<?php


interface ProCo
{
	public function searchBook($bname);

    public function  addprofile($name,$author,$supplier,$year,$catagory,$bookfile);

    public function  addnew2($name,$author,$supplier,$year,$catagory,$bookfile);

    public function  update($name,$author,$supplier,$year,$catagory,$bookfile);

    public function  addcompany($name,$author,$supplier,$year,$catagory,$bookfile);


     public function searchUser($state,$key);

     public function search($state,$key);

     public function delUser($key);
     
     public function getrequest(); 

     public function getrequest1(); 

     public function getrequest2(); 
    
}