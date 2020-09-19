<?php


interface UserBO
{
    public function addUser();

    public function login($uname,$password);

    public function searchUser($uname);

    public function signUpANDsession ($fullname,$age,$address,$contact,$con,$role,$uname,$pass,$approved);

    public function getstudent();

    public function getall();
    
    public function acceptuser($bid);

    public function deleteuser($bid);

    public function assignuser($bid);
    
}