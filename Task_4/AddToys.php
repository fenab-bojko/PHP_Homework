<?php
session_start();

// var_dump($mass);
function AddToys ($toys, $simbolToys, $data) {

    while ($toys) {
        foreach ($data as $key => $elem) {
            $massElem = str_split($elem);
            $random = rand(1, count($massElem));

            foreach($massElem as $i => $item) {
                if ($random == $i && $toys) {
                    $massElem[$i] = $simbolToys;
                    $toys--;
                    $data[$key] = implode($massElem);
                } else {
                    $data[$key] = implode($massElem);
                }
            }

        }
    }
    $result = $data;
    return $result;
}
$toys = $_GET['toys'];
$simbolToys = $_GET['simbolToys'];
$mass = $_SESSION['data'];
$data = AddToys ($toys, $simbolToys, $mass);
extract($data);
include 'formTree.tpl';