<?php

class Signup extends Dbh{

        // Check for User
        protected function checkUser($email){
            $sql = "SELECT email FROM user WHERE email = ?";
            $stmt = $this->connect()->prepare($sql);
            if(!$stmt->execute(array($email))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
    
            $resultCheck;
            if ($stmt->rowCount() > 0) {
                $resultCheck = false;
            } else {
                $resultCheck = true;
            }
            return $resultCheck;
        }
        
        
        
        // Sign Up
        protected function setUser($email, $password){
            $sql = "INSERT INTO user(email,password) VALUES (?, ?)";
            $stmt = $this->connect()->prepare($sql);

            
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            
            
            if (!$stmt->execute(array($email,$hashedPwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            
            $stmt = null;
        }
    
}