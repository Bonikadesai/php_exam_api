<?php
    class Pokeman_Config{
        public $HOSTNAME = "127.0.0.1";
        public $USERNAME = "root";
        public $PASSWORD = "";
        public $DB_NAME = "pokeman";
        public $con_res;

        public function connect(){
            $this->con_res=mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
            return $this->con_res;
        }

        public function image_insert($name,$path){
            $this->connect();
            $query = "INSERT INTO images(name,path) VALUES ('$name','$path');";

            $res = mysqli_query($this->con_res,$query);
            return $res;
        }
        
    }
?>