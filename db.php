<?php

class db
{

    private $conn;

    public function __construct($host,$user,$pas,$dbname)
    {

        $this->conn=new mysqli($host,$user,$pas,$dbname);
    }

    public function addUser(user $user)
    {
        $st=$this->conn->prepare("insert into users (name,lastname,tel,username,pass) 
        
        values(?,?,?,?,?)");
        $st->bind_param("sssss",$user->getName(),$user->getLastName(),$user->getTel(),$user->getUserName(),$user->getPassword());



    }


}

?>