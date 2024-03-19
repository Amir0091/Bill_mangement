<?php

class AdminLogin extends Login{
    private $name;
    private $password;

    public function __construct($name, $password){
        $this->name = $name;
        $this->password = $password;
    }

    public function loginAdmin(){       
       $this->getAdmin($this->name, $this->password);
   }


}