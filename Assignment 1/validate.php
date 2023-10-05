<?php
class validate
{
    public function checkEmpty($data, $fields)
    {
        $msg = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $msg .= "<p>$value field is empty</p>";
            }
        }
        return $msg;
    }
    // check our age field
    public function validName($fname)
    {
        //check to see if first name is alphabets and white space only
        if (!preg_match("/^[a-z][A-z]*$/", $fname)) {
            return true;
        }
        return false;
    }
    public function validLastName($lname)
    {
        //check to see if name is begins in capital and uses letters from A-Z
        if (!preg_match("/^[a-z][A-z]*$/", $lname)) {
            return true;
        }
        return false;
    }

    public function validMobile($mobile)
    {
        //check to mobile number has right digit lengths
        $length = strlen($mobile);

        if ($length < 10 && $length > 10) {
            return true;
        }
        return false;
    }
    public function validAddress($address)
    {
        //check to see if address is capital and beings from letter A-Z
        if (preg_match('/^(?:\\d+[a-zA-z]+, ){2}[a-zA-Z ]+$/', $address)) {
            return true;
        }
        return false;
    }
    // check to see if email follows the email format
    public function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public function validPayment($payment)
    {
        //check to see if payment type is correct
        $length = strlen($payment);
        if ($length < 10 && $length > 14) {
            return true;
        }
        return false;
    }
}
