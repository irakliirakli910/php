<?php  

require "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     if(isset($_POST["name"]) &&  isset($_POST["lastname"]) && isset($_POST["tel"]))
     {
         
        if($_FILES["file"]["size"]>0 )
        {
            $file=$_FILES["file"]["tmp_name"];
                  $newfile="img/".$_FILES["file"]["name"];

                  if(move_uploaded_file($file,$newfile))
                  {
                    echo "ფაილი აიტვირთა წარმატებით";
                  }  
                  else
                  {

                    echo "ფაილი ვერ აიტვირთა";
                  }


            
            
             $user=new user((int)$_SESSION["userid"],$_POST["name"],$_POST["lastname"],$_POST["tel"],null,null,$newfile);
              $db->editUser($user);

        }
        else
            {
            echo "ფაილი არ არსებობს";
        $user=new user((int)$_SESSION["userid"],$_POST["name"],$_POST["lastname"],$_POST["tel"],null,null,null);
        $db->editUser($user);
            }
      
 


     }
  


}
if(isset($_GET["i"]))
{   
    
    //session_destroy();
    unset($_SESSION["userid"]);

       header("location:login.php");

}
if(isset($_SESSION["userid"]))
{
      
        $db->getProfile((int)$_SESSION["userid"]);
      
}
else
{

    header("location:login.php");
}



?>
<style>
.imstyle{

        width: 150px;
        height: 120px;
        border-radius: 2px;
      }
    </style>

<a href="profile.php?i=logout"> გასვლა </a>
<a href="editprofile.php"> რედქტირება </a>