<?php

class SignupCntrl extends Signup {
    private $email;
    private $password;
    private $repassword;

    public function __construct($email, $password, $repassword){
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;
    }

    public function signupUser(){

        if ($this->emptyInput() == false) {
           header("location: ../index.php?error=emptyInput");
           exit();
       }  elseif ($this->invalidEmail() == false) {
           header("location: ../index.php?error=invalidEmail");
           exit();
       }  elseif ($this->pwdMatching() == false) {
           header("location: ../index.php?error=passwordsDontMatch");
           exit();
       }   elseif ($this->emailChecking() == false) {
           header("location: ../index.php?error=emailExists");
           exit();
       }
       
       $this->setUser($this->email, $this->password);
   }


   // Inputs Checking

   // Empty Input
   private function emptyInput(){
       $result;
       if (empty($this->email) || empty($this->password) || empty($this->repassword)) {
           $result = false;
       } else {
           $result = true;
       }
       return $result;
   }

   // Email Validation
   private function invalidEmail(){
       $result;
       if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
           $result = false;
       }else{
           $result = true;
       }
       return $result;
   }

   // Password Matching
   private function pwdMatching(){
       $result;
       if ($this->password !== $this->repassword){
           $result = false;
       } else {
           $result = true;
       }
       return $result;
   }

   // Unique Email Check
   private function emailChecking(){
       $result;
       if (!$this->checkUser($this->email)){
           $result = false;
       } else {
           $result = true;
       }
       return $result;
   }


}