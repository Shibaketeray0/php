<?php
class SignUp extends Dtb{
    function SetUser($name, $email, $pwd){
        parent::dbquery($name, $email, $pwd);
    }
}