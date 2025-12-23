
<?php
require "db.php";

if(isset($_SESSION["userid"]))
{

    header("location:profile.php");
    exit();

}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["username"]) && isset($_POST["password"] ))
    {

        $db=new db("127.0.0.1","root","123456","users");
        $db->login($_POST["username"],$_POST["password"] );

    }

      
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  
    <style>

      form
      {
        display:flex;
        flex-direction:column;

        width: 300px;
        gap:10px;
      }
    </style>
</head>
<body>
<form action="" method="POST">

<input type="text" name="username" placeholder="მომხმარებელი"/>
<input type="password" name="password"  placeholder="პაროლი"/>
<input type="submit" value="შესვლა"/>


</form>
<a href="index.php"> რეგისტრაცია </a>
</body>
</html>