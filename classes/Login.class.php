<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Login extends Dbh {

        // LOG IN
        protected function getUser($email, $password){
            $sql = "SELECT * FROM user WHERE email = ?";
            $stmt = $this->connect()->prepare($sql);
            
            if (!$stmt->execute(array($email))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=UsernotFound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($password, $user[0]["password"]);

            if ($checkPwd == false) {
                $stmt = null;
                header("location: ../index.php?error=Wrongpassword");
                exit();
            } elseif ($checkPwd == true){
                $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
                $stmt = $this->connect()->prepare($sql);

                if (!$stmt->execute(array($email,$password))) {
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }
    
                $_SESSION['userId'] = $user[0]["id"];
                $_SESSION['userEmail'] = $user[0]["email"];

            $stmt = null;
            }

            $stmt = null;
        }

        // Admin Login
        protected function getAdmin($name, $password){
            $sql = "SELECT * FROM admin WHERE name = ?";
            $stmt = $this->connect()->prepare($sql);

            if (!$stmt->execute(array($name))) {
                $stmt = null;
                header("location: ../admin.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../admin.php?error=UsernotFound");
                exit();
            }

            $admin = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($password, $admin[0]["password"]);

            if ($checkPwd == false) {
                $stmt = null;
                header("location: ../admin.php?error=Wrongpassword");
                exit();
            } elseif ($checkPwd == true){
                $sql = "SELECT * FROM admin WHERE name = ? AND password = ?";
                $stmt = $this->connect()->prepare($sql);

                if (!$stmt->execute(array($name,$password))) {
                    $stmt = null;
                    header("location: ../admin.php?error=stmtfailed");
                    exit();
                }
    
                $_SESSION['adminId'] = $admin[0]["id"];
                $_SESSION['adminName'] = $admin[0]["name"];
                $_SESSION['adminLevel'] = $admin[0]["level"];

            $stmt = null;
            }

            $stmt = null;

        }


        // Get All Users
        protected function getAllUsers(){
            $sql = "SELECT id,email,Time FROM user";
            $stmt = $this->connect()->query($sql);
            
            $users = $stmt->fetchAll();
            return $users;

            $stmt = null;
        }
}