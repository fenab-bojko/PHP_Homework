<?php

function CreateTree ($simbol, $higth) {
    $mass = [];
    $massResult = [];

    for ($i = 0; $i < $higth; $i++) {
        $mass[] = $simbol;
        $massResult[] = implode ($mass);
    }
    
    return $massResult;
}


$simbol = $_POST['simbol'];
$higth = $_POST['higth'];
session_start();
$data = CreateTree ($simbol, $higth);
$_SESSION['data'] = $data;
extract($data);
include 'formTree.tpl';

