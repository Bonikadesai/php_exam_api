<?php
    class Config{
        public $HOSTNAME = "127.0.0.1";
        public $USERNAME = "root";
        public $PASSWORD = "";
        public $DB_NAME = "coldrink";
        public $con_res;

        public function connect(){
            $this->con_res=mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
            return $this->con_res;
        }

        public function insert($name){
            $this->connect();
            $query="INSERT INTO verity (name) VALUES ('$name');";

            $res = mysqli_query($this->con_res,$query);
            return $res;
        }

        public function update($name,$id){
            $this->connect();
            $query = "UPDATE verity SET name = '$name' WHERE id = $id;";

            $res = mysqli_query($this->con_res,$query);//return boolean
            return $res;
        }

        public function insert_image($name,$path){
            $this->connect();
            $query = "INSERT INTO images(name,path) VALUES ('$name','$path');";

            $res = mysqli_query($this->con_res,$query);
            return $res;
        }
        
    }
?>