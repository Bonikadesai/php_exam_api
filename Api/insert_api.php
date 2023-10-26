<?php 
    header("Access-ControlP-Allow-Methods: POST");

    include("../Config/config.php");
    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
       
        $res = $config->insert($name);

        if($res){
            $arr['data'] = "Record Inserted Success.....";
        }else{
            $arr['data'] = "Record Insertion Failed....";
        }
    }else{
        $arr['error'] = "Only POST HTTP Methods are Allowed....";
    }

    echo json_encode($arr);
?>