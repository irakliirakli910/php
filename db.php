<?php
session_start();
require "user.php";
class db
{

    private $conn;

    public function __construct($host,$user,$pas,$dbname)
    {
             $this->conn=new mysqli($host,$user,$pas,$dbname);
    }


    public function  editUser(user $user)
    {

      echo $user->getImgpath();
      if($user->getImgpath()!=null)
      {
       $st=$this->conn->prepare("update users set name=?,lastname=?, tel=?, img=? where userid=?");
       $name=$user->getName();
       $lastname=$user->getLastName();
       $tel=$user->getTel();
      $id=$user->getUserId();

   
      $img=$user->getImgpath();

     
     
      $st->bind_param("ssssi",$name,$lastname,$tel,$img,$id);
         $st->execute();
      $st->close();
    



    }
      else
      {
        $st=$this->conn->prepare("update users set name=?,lastname=?, tel=? where userid=?");
       $name=$user->getName();
     $lastname=$user->getLastName();
     $tel=$user->getTel();
     $id=$user->getUserId();
         
      $st->bind_param("sssi",$name,$lastname,$tel,$id);
        $st->execute();
      $st->close();
      }

       file_put_contents("Log.log"," მომხმარებელმა ".$name. "  შეცვალა მონაცემები - ".date("Y:m:d H:i:s")."\n",FILE_APPEND);

      
      
   

      
    }
    public function addUser(user $user)
    {
    $st=$this->conn->prepare("insert into users (name,lastname,tel,username,pass,img)  values(?,?,?,?,?,?)");
     $name=$user->getName();
     $lastname=$user->getLastName();
     $tel=$user->getTel();
     $usename=$user->getUserName();
     $pasword=$user->getPassword();
     $img=$user->getImgpath();
     $pasword_hash=password_hash($pasword,PASSWORD_DEFAULT);

    $st->bind_param("ssssss",$name,$lastname,$tel,$usename,$pasword_hash,$img);


    $st->execute();
    $st->close();
      file_put_contents("Log.log","დარეგისტრირდა ახალი მომხმარებელი ". $usename. " - ".date("Y:m:d H:i:s")."\n",FILE_APPEND);


    }
public function getProfile($userid)
{
  $st=$this->conn->prepare("select * from users where userid=?");

  $st->bind_param("i",$userid);
  $st->execute();
  $res=$st->get_result();
  $r=$res->fetch_assoc();

  if($res->num_rows>0)
    {
  echo "<table> 
  <tr><td> სახელი </td><td>".$r["name"]."</td><tr>
    <tr><td> გვარი</td><td>".$r["lastname"]."</td><tr>
      <tr><td> ტელეფონი </td><td>".$r["tel"]."</td><tr>
        <tr><td> მომხმარებელი</td><td>".$r["username"]."</td><tr>
        <tr><td> ფოტო </td><td><img class='imstyle'  src='".$r["img"]."'/></td><tr>
  
  </tbale>";
  file_put_contents("Log.log"," მომხმარებელმა ". $r["username"]. " გახსნა პროფილის გვერდი - ".date("Y:m:d H:i:s")."\n",FILE_APPEND);

    }
    else
    {

      echo "No Data";
    }



}



public function getProfileedit($userid)
{
  $st=$this->conn->prepare("select * from users where userid=?");

  $st->bind_param("i",$userid);
  $st->execute();
  $res=$st->get_result();
  $r=$res->fetch_assoc();

  if($res->num_rows>0)
    {

  echo "
  <form action='profile.php' method='post' enctype='multipart/form-data'>
  <table> 
  <tr><td> სახელი </td><td><input type='text' value='".$r["name"]."' name='name'/></td><tr>
    <tr><td> გვარი</td><td><input type='text' value='".$r["lastname"]."' name='lastname'/></td><tr>
      <tr><td> ტელეფონი </td><td><input type='text' value='".$r["tel"]."' name='tel'/></td><tr>
          <tr><td> ფოტო </td><td><img class='imstyle'  src='".$r["img"]."'/></td><tr>
  <input type='file'  name='file'>
      
       
      <tr><td> </td><td><input type='submit' value='შენახვა' name='sub'/></td><tr>
  
  </tbale></form>";

  file_put_contents("Log.log"," მომხმარებელი ".$r["name"]. "  აპირებს მონაცემების ცვლილებას - ".date("Y:m:d H:i:s")."\n",FILE_APPEND);

      
    }
    else
    {

      echo "No Data";
    }



}


 public function login($usename, $pas)
 {
    $st=$this->conn->prepare("select * from users where username=?");

    $st->bind_param("s",$usename);

     $st->execute();
     $res=$st->get_result();
     $r=$res->fetch_assoc();

     if($res->num_rows>0)
      {

        if(password_verify($pas,$r["pass"])){
file_put_contents("Log.log"," მომხმარებელმა ".$usename. "  გაიარა ავტორიზცია - ".date("Y:m:d H:i:s")."\n",FILE_APPEND);

          $_SESSION["userid"]=$r["userid"];
        header("Location:profile.php");
        exit();
        }

        else
        {
           echo "მომხმრებელი ან პაროლი არ არის სწორი";

        }
      }

      else
      {

        echo "No ";
      }

 }




 


}

  $db=new db("127.0.0.1","root","123456","users");

?>