<?php

class Database {

    private $connection;

    function __construct() {

        $this->connect_db();

    }

    public function connect_db() {
        $this->connection = mysqli_connect( 'host', 'user', 'password', 'dbname' );
        if ( mysqli_connect_error() ) {
            die( "Database connection failed " . mysqli_connect_error() );

        }
    }

    public function create( $fname, $lname, $address, $mobile, $email, $payment ) {
        $sql = "INSERT INTO Assignment1 ( fname, lname, address, mobile, email, payment ) VALUES( '$fname', '$lname', '$address', '$mobile', '$email',
        $res = mysqli_query( $this->connection, $sql );
       
        if ( $res ) {
            return true;
        } else {
            return false;

        }
    }

    public function read( $id=null ) {
        $sql =SELECT * FROM assignment1;

        if ( $id ) {
            $sql .=   WHERE id=$id;

            $res = mysqli_query( $this->connection, $sql );
            return $res;
        }
    }

    public function sanitize($var) {
        $return = mysqli_real_escape_string($this->connection, $var );
        return $return;
    }     
}
$database = new Database();
?>


