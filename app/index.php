<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    $echoString = $_GET['message'];
    echo "{\"message\": \"${echoString}\"}";
?>