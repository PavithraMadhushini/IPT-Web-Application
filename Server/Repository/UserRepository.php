<?php


interface UserRepository
{
    public function setConnection(mysqli $connection);

    public function addUser($fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved) ;

    public function seachUser($uname);

    public function login($uname,$password);

    public function getstudent();

    public function getall();

    public function acceptuser($bid);

    public function deleteuser($bid);

    public function assignuser($bid);
}