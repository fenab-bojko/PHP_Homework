<?php
include_once 'script.js';
include_once 'style/css';
include_once 'CreateTree.php';
include 'index.html';



$higth = $_POST['higth'] ? $_POST['higth'] : null;
$simbol = $_POST['simbol'] ? $_POST['simbol'] : null;
$simbolToys = $_POST['simbolToys'] ? $_POST['simbolToys'] : null;

echo $higth;
echo $simbol;
echo $simbolToys;

if ($higth && $simbol) {
    $tree = new CreateTree;
    addTree ($tree -> getTree($higth, $simbol));
}

if ($simbolToys) {
    $toys = new Toys();
    $toys->setToys($simbolToys);
    $toys->getToys();
}

function addTree ($mass) {
    extract ($mass);
    include 'index.tpl';
}