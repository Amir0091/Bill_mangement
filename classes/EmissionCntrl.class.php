<?php

class EmissionCntrl extends Emission {
    private $admin;
    private $user;
    private $detail;
    private $price;

    public function __construct($admin, $user, $detail, $price){
        $this->admin = $admin;
        $this->user = $user;
        $this->detail = $detail;
        $this->price = $price;
    }

    public function emitBill(){

        if ($this->emptyInput() == false) {
           header("location: ../admin/admin.php?error=emptyInput");
           exit();
       } 
       
       $this->emit($this->admin, $this->user, $this->detail, $this->price);
   }

    //  Show All Bills
    public function showAllBills($user){
        $allBills = $this->getAllBills($user);
        return $allBills;
    }
    
    //  Pay
    public function payment($id){
        $payment = $this->payBill($id);
        return $payment;
    }


   // Empty Input
   private function emptyInput(){
       $result;
       if (empty($this->admin) || empty($this->user) || empty($this->detail) || empty($this->price)) {
           $result = false;
       } else {
           $result = true;
       }
       return $result;
   }


}