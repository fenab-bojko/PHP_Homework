<?php
session_start();

$simbol = $_POST['simbol'] ? $_POST['simbol'] : null;
$higth = $_POST['higth'] ? $_POST['higth'] : null;
$simbolToys = $_POST['simbolToys'] ? $_POST['simbolToys'] : null;
$deleteToys = $_POST['deleteToys'] ? $_POST['deleteToys'] : null;

include 'Tree.php';
include 'Toys.php';
include 'indexForm.tpl';

if ($higth && $simbol) {
    $tree = new Tree();
    $tree->setTree($higth, $simbol);
    $data = $tree->getTree();
    drawTree ($data);
}
    
function drawTree ($data) {
    extract ($data);
    include 'treeForm.tpl';
}

if ($simbolToys) {
    $toys = new Toys();
    $toys->setToys($simbolToys);
    $toy = $toys->getToys();
    $tree = new Tree;
    $data = $tree->addToy($toy);
    drawTree($data);
} 

if ($deleteToys) {
    $tree = new Tree;
    $data = $tree->deleteToy($deleteToys);
    drawTree($data);
}
