<?php
    class validate{
        public function checkEmpty($data, $fields){
            $msg = null;
            foreach($fields as $value){
                if(empty($data[$value])){
                    $msg .= "<p>$value field is empty</p>";
                }
            }
            return $msg;
        }
        // check our age field
        public function validName($fname){
            //check to see if age is numeric
            if(preg_match("/^[A-z][a-z]+$/", $fname)){
                return true;
            }
            return false;
        }
        public function validLastName($lname){
            //check to see if name is begins in capital and uses letters from A-Z
            if(preg_match("/^[A-z][a-z]+$/", $lname)){
                return true;
            }
            return false;
        }
        public function validAddress($address){
            //check to see if address is capital and beings from letter A-Z
            if(preg_match("/^[a-zA Z0-3]+$/", $address)){
                return true;
            }
            return false;
        }
        // check to see if email follows the email format
        public function validEmail($email){
            if(filter_var($email,FILTER_VALIDATE_EMAIL )){
                return true;
            }
            return false;
        }
        public function validPayment($payment){
            //check to see if payment type is correct
            if(preg_match("/^[A-z a-z]+$/", $payment)){
                return true;
            }
            return false;
        }
    }
