<?php
    include("../Config/config.php");
    header("Access-Control-Allow-Methods: PUT");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == "PUT"){

        $input = file_get_contents("php://input");
        parse_str($input,$_UPDATE);

        $id = $_UPDATE['id'];
        $name = $_UPDATE['name'];
        
        $res = $config->update($name,$id);

        if($res){
            $arr['data'] = "Data Updated Success....";
        }else{
            $arr['data'] = "Data Updation Failed...."; 
        }

    }else{
        $arr[error] = "Only PUT HTTP Methods are Allowed........";
    }

    echo json_encode($arr);
?>