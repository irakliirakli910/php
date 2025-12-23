<?php
class user
{
    private ?int $userid;
    private string $name;
    private  string $lastname;
    private string $tel;
    private ?string $username;
    private ?string $password;

    private ?string $imgpath;

    public function __construct(?int $userid,string $name,string $lastname, string $tel, ?string $username,?string $password ,?string $imgpath)
    {

  
        $this->userid=$userid;
       $this->name=$name;
       $this->lastname=$lastname;
       $this->tel=$tel;
       $this->username=$username;
       $this->password=$password;
       $this->imgpath=$imgpath;

    }

    public function getUserId()
    {

        return $this->userid;

        
    }

    public function getImgpath()
    {

        return $this->imgpath;

        
    }

    public function setImgpath(string $imgpath)
    {

        $this->imgpath=$imgpath;

        
    }


    public function setUserId($id)
    {

        $this->userid=$id;

        
    }

    public function getName()
    {

        return $this->name;

        
    }

    public function getLastName()
    {

        return $this->lastname;

        
    }

    
    public function getTel()
    {

        return $this->tel;

        
    }

    
    public function getUserName()
    {

        return $this->username;

        
    }

    
    public function getPassword()
    {

        return $this->password;

        
    }


    public function setName($Name)
    {

        $this->name=$Name;

        
    }

    public function setLastName($lastname)
    {

        $this->lastname=$lastname;

        
    }

    
    public function setTel($tel)
    {

        $this->tel=$tel;

        
    }
    
    public function setUsername($username)
    {

        $this->username=$username;

        
    }

    public function setPasword($password)
    {

        $this->password=$password;

        
    }


}
    

?>