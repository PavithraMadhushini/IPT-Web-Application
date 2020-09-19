<?php


interface ProRepository
{
    public function setConnection(mysqli $connection);

     public function addpro($name,$author,$supplier,$year,$catogory,$bookfile) ;

     public function add2($name,$author,$supplier,$year,$catogory,$bookfile) ;

     public function up($name,$author,$supplier,$year,$catogory,$bookfile) ;

     public function addcom($name,$author,$supplier,$year,$catogory,$bookfile) ;

     public function searchBook($bname);

    public function login($uname,$password);

     
      public function searchUser($state,$key);


      public function search($state,$key);

      public function delUser($key);
        public function getrequest();

        public function getrequest1();

        public function getrequest2();
}