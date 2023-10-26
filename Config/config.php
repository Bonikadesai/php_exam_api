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
            $query="INSERT INTO verity (name) VALUES ('$name');";//http://127.0.0.1/exam_php/Api/insert_api.php
            $res = mysqli_query($this->con_res,$query);
            return $res;
        }

        public function update($name,$id){
            $this->connect();
            $query = "UPDATE verity SET name = '$name' WHERE id = $id;";

            $res = mysqli_query($this->con_res,$query);//http://127.0.0.1/exam_php/Api/update_api.php
            return $res;
        }

       
        
    }
?>