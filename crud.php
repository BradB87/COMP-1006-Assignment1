<?php
    require_once'database.php';
    //This class is an extension of our database class and will execute out database queries.
    //c
    class crud extends database{
        public function __construct(){
            parent::__construct(); 
            
        }
        // read
        public function getData(){
            $result = $this->connection->query($query);
            if($result == false){
                return false;
            }
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function execute($query){
            $result = $this-> connection->query($query);
            if($result == false){
                echo "Error cannot execute the command";
                return false;
            }else{
                return true;
            
            }
        }
        public function escape_string($value){
            return $this->connection->real_escape_string($value);
        }
    }

?>
