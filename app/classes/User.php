<?php

class User {

    private $id;
    private $username;
    private $fullname;
    private $password;
    private $created_at;

    public function __construct($id,$username,$fullname,$password,$created_at){
    $this->id=$id;
    $this->username=$username;
    $this->fullname=$fullname;
    $this->password=$password;
    $this->created_at=$created_at;
    }

    public function setUserName($username){

        $this->username=$username;

    }
    
    public function setFullName($fullname){

        $this->fullname=$fullname;

    }
    
    public function setPassword($password){

        $this->password=$password;

    }
    
    public function setCreated_at($created_at){

        $this->created_at=$created_at;

    }
    public function GetUserId(){

        return $this->username;

    }
    public function GetUserName(){

        return $this->username;

    }
    
    public function GetFullName(){

        return $this->fullname;

    }
    
    public function GetPassword(){

        return $this->password;

    }
    
    public function GetCreated_at(){

        return $this->created_at;

    }
}

?>