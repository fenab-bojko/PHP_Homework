<?php

class CrismassTree {
    private $higth = 0;
    private $simbol = null;
    private $toys = 0;
    private $simbolToys = null;

    public function __construct ($higth, $simbol) {
        $this->higth = $higth;
        $this->simbol = $simbol;

        $rowMass = [];
        $treeMass = [];

        for ($i = 0; $i < $this->higth; $i++) {
            $rowMass[] = $this->simbol;
            $treeMass[] = implode($rowMass);
        }

    extract ($treeMass);
    include "formTree.tpl";
    }
}

$tree = new CrismassTree (12, '$');