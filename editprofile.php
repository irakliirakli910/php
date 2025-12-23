<?php  

require "db.php";
if(isset($_GET["i"]))
{   
    
    //session_destroy();
    unset($_SESSION["userid"]);

       header("location:login.php");

}
if(isset($_SESSION["userid"]))
{
        $db=new db("127.0.0.1","root","123456","users");
        $db->getProfileedit((int)$_SESSION["userid"]);
      
}
else
{

    header("location:login.php");
}



?>


<a href="profile.php?i=logout"> გასვლა </a>