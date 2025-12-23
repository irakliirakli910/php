
<?php

require_once "db.php";
if(isset($_SESSION["userid"]))
{

    header("location:profile.php");
    exit();

}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

  if(isset($_POST["name"]) &&  isset($_POST["lastname"]) && isset($_POST["tel"]) && isset($_POST["username"]) && isset($_POST["password"]))
  {
    $newfile="img/";

                 if(isset($_FILES["file"]))
                 {

                  $file=$_FILES["file"]["tmp_name"];
                  $newfile.=$_FILES["file"]["name"];

                  if(move_uploaded_file($file,$newfile))
                  {
                    echo "ფაილი აიტვირთა წარმატებით";
                  }
                  else
                  {

                    echo "ფაილი ვერ აიტვირთა";
                  }


                 }


        $db=new db("127.0.0.1","root","123456","users");
        $user=new user(null,$_POST["name"],$_POST["lastname"],$_POST["tel"],$_POST["username"],$_POST["password"],$newfile);
        $db->addUser($user);
       header("Location:login.php");
       exit();
  }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    
    <title>რეგისტრაცია</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <style>

      form
      {
        display:flex;
        flex-direction:column;

        width: 300px;
        gap:10px;
      }

      .imstyle{

        width: 250px;
        height: 200px;
        border-radius: 2px;
      }
    </style>
</head>
<body>
    

<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="name" placeholder="სახელი"/>
<input type="text" name="lastname" placeholder="გვარი"/>
<input type="text" name="tel" placeholder="ტელეფონი"/>
<input type="text" name="username" placeholder="მომხმარებელი"/>
<input type="password" name="password" placeholder="პაროლი"/>
<input type="file"  name="file">
<input type="submit" value="რეგისტრაცია"/>


</form>
<a href="login.php"> ავტორიზაცია </a>
</body>
</html>