<?php
require_once('config.php');

//insert, update, delete and select


function execute($sql){

    $conn = mysqli_connect(HOST, DATABASE, USERNAME, PASSWORD);
   // mysqli_set_charset('utf-8');
    
    mysqli_query($conn, $sql);


    mysqli_close($conn);

}

function executeResult($sql , $isSingle = false){
    $data = null;

    $conn = mysqli_connect(HOST, DATABASE, USERNAME, PASSWORD);
   // mysqli_set_charset('utf-8');
    
    $resultset = mysqli_query($conn, $sql);
    if($isSingle){
        $data = mysqli_fetch_array($resultset, 1);
    }else{
        $data = [];
        while(($row = mysqli_fetch_array($resultset, 1)) != null){
            $data[] = $row;
    
    
        }
    }
    mysqli_close($conn);

    return $data;
}

?>