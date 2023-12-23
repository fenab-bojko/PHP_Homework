<?php
session_start();
$_SESSION['visibilityIndex'] = null;
include 'index.tpl';

include_once 'Toys/Toys.php';
include_once 'CrismassTree/CrismassTree.php';

$tree = new CrismassTree;
$toy = new Toys;

$higth = $_POST['higth'] ? $_POST['higth'] : null;
$simbol = $_POST['simbol'] ? $_POST['simbol'] : null;
$toys = $_POST['toys'] ? $_POST['toys'] : null;
$simbolToys = $_POST['simbolToys'] ? $_POST['simbolToys'] : null;

if ($higth && $simbol) {
    $tree->createTree($higth, $simbol);

}

$toys = $_POST['toys'] ? $_POST['toys'] : null;
$simbolToys = $toy->getSimbol();

if ($toys && $simbolToys) {
    $tree->addToys($toys);

}
// $toys = new Toys;
// $tree = new CrismassTree (14, '*');


// $tree(14, '%');