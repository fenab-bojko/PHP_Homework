<?php
include_once 'CreateTree.php';
include 'index.html';



$higth = $_POST['higth'] ? $_POST['higth'] : null;
$simbol = $_POST['simbol'] ? $_POST['simbol'] : null;

if ($higth && $simbol) {
    $tree = new CreateTree;
    $tree -> createTree($higth, $simbol);
}