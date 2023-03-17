<?php
class UserRegistration extends SignUp {
    private $name;
    private $pwd;
    private $email;

    function __construct($name, $pwd, $email)
    {
        $this->name = $name;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    function EmptyCheck(){
        if(empty($this->name) || empty($this->pwd) || empty($this->email))
        {
            $result = false;
        }
        else
        {
            $result =true;
        }
        return $result;
    }
    function InvalidName(){
        if(!preg_match("/^[a-zA-Z ]*$/", $this->name)){
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;

    }
    function InvalidEmail(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    function Signup(){
        if(!$this->EmptyCheck()){
            header("Location: ../index.php?=emptyfield");
            echo "Empty field!";
            exit();
        }
        if(!$this->InvalidName()){
            header("Location: ../index.php");
            echo "Invalid name!";
            exit();
        }
        if(!$this->InvalidEmail()){
            header("Location ../index.php");
            echo "Invalid email!";
            exit();
        }
        $this->setUser($this->name, $this->pwd, $this->email);
    }
}
?>