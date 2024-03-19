<?php

class Emission extends Dbh{

        // Emit a Bill
        protected function emit($admin, $user, $detail, $price){
            $sql = "INSERT INTO bills(user,admin,info,price) VALUES (?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);

                        
            
            if (!$stmt->execute(array($user, $admin, $detail, $price))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            
            $stmt = null;
        }


        // Get All The Bills
        protected function getAllBills($user){
            if ($user == "admin") {
                $sql = "SELECT * FROM bills";
                $stmt = $this->connect()->query($sql);        
        
                $bills = $stmt->fetchAll();
                return $bills;
            } else {
                $sql = "SELECT * FROM bills WHERE user = ?";
                $stmt = $this->connect()->prepare($sql);
    
                if (!$stmt->execute(array($user))) {
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }
    
        
                if ($stmt->rowCount() == 0) {
                    $stmt = null;
                    header("location: index.php?error=UsernotFound");
                    exit();
                }
        
        
                        
                $bills = $stmt->fetchAll();
                return $bills;
            }
    
            $stmt = null;
        }
        


        protected function payBill($id){
            $sql = "UPDATE bills SET state = 'Done' WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);

            if (!$stmt->execute(array($id))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }    
            
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=notFound");
                exit();
            }

            return true;
            $stmt = null;
        }
    
}