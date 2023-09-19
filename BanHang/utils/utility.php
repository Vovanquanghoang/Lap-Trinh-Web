<?php

function fixSqlInject($sql){
    $sql = str_replace('\\', '\\\\', $sql);
    $sql = str_replace('\'', '\\\'', $sql);
}

function getGet($key){
    $value = '';
    if(isset($_GET[$key])){
        $value =$_GET[$key];
        $value = fixSqlInject(($value));
    }
    return $value;
}

function getPost($key){
    $value = '';
    if(isset($_GET[$key])){
        $value =$_GET[$key];
        $value = fixSqlInject(($value));
    }
    return $value;
}

function getRequest($key){
    $value = '';
    if(isset($_GET[$key])){
        $value =$_GET[$key];
        $value = fixSqlInject(($value));
    }
    return $value;
}

function getCookie($key){
    $value = '';
    if(isset($_GET[$key])){
        $value =$_GET[$key];
        $value = fixSqlInject(($value));
    }
    return $value;
}



?>