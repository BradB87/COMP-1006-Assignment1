<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 1</title>
    <meta name="description" content="project notification commands">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="">
</head>

<body>
    <main>
        <?php
        // classes 
        include_once('crud.php');
        include_once('validate.php');
        //create class of objects
        $crud = new crud();
        $valid = new validate();
        if (isset($_POST['Submit'])) {
            // escape_string function
            $fname  = $crud->escape_string($_POST['fname']);
            $lname  = $crud->escape_string($_POST['lname']);
            $address = $crud->escape_string($_POST['address']);
            $mobile  = $crud->escape_string($_POST['mobile']);
            $email = $crud->escape_string($_POST['email']);
            $payment  = $crud->escape_string($_POST['payment']);

            // verify functions with our validate classes
            $msg = $valid->checkEmpty($_POST, array('fname', 'lname', 'address', 'mobile', 'email', 'payment'));
            $checkFname = $valid->validEmail($_POST['fname']);
            $checkLname = $valid->validEmail($_POST['lname']);
            $checkAddress = $valid->validEmail($_POST['address']);
            $checkMobile = $valid->validEmail($_POST['mobile']);
            $checkEmail = $valid->validEmail($_POST['email']);
            $checkPayment = $valid->validEmail($_POST['payment']);

            // notifications for any empty fields
            if ($msg != null) {
                echo "<p>$msg</p>";
                //link to previous page
                echo "<a href='php:self.history.back();'> Go Back</a>";
            } elseif (!$checkFname) {
                echo "<p> Please provide a valid first name</p>";
            } elseif (!$checkLname) {
                echo "<p> Please provide a valid Last name</p>";
            }elseif(!$checkAddress){
                echo "<p> Please provide a valid address</p>";
            }elseif(!$checkMobile){
                echo "<p> Please provide a valid phone number</p>";
            } elseif (!$checkEmail) {
                echo "<p> Please provide a valid email</p>";
            }elseif(!$payment){
                echo "<p> Please provide a valid credit payment</p>";
            } else {
                $result = $crud->execute("INSERT INTO Assignment1(fname, lname, address, mobile, email , payment) VALUE('$fname, $lname, $address,$mobile $email, $payment')");
                echo "<p>Data added successfully.</p>";
                echo "<a href='view.php'> View Result</a>";
            }
        }
        ?>
    </main>
</body>

</html>