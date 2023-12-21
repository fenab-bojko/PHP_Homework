<?php

class CrismassTree {
    private $_higth = 0;
    private $_simbol = null;
    private $_toys = 0;
    private $_simbolToys = null;
    private $_rowMass = [];
    private $_treeMass = [];

    public function __construct ($higth, $simbol) {
        $this->_higth = $higth;
        $this->_simbol = $simbol;

        for ($i = 0; $i < $this->_higth; $i++) {
            $this->_rowMass[] = $this->_simbol;
            $this->_treeMass[] = implode($this->_rowMass);
        }

    extract ($this->_treeMass);
    include "formTree.tpl";
    }

    public function addToys ($toys, $simbolToys) {
        $this->_toys = $toys;
        $this->_simbolToys = $simbolToys;

        while ($this->_toys) {
            foreach ($this->_treeMass as $key => $elem) {
                $massElem = str_split($elem);
                $random = rand(1, count($massElem));

                foreach($massElem as $i => $item) {
                    if ($random == $i && $toys) {
                        $massElem[$i] = $simbolToys;
                        $toys--;
                        $this->_treeMass[$key] = implode($massElem);
                    } else {
                        $this->_treeMass[$key] = implode($massElem);
                    }
                }

            }
        }
        extract($this->_treeMass);
        include 'formTree.tpl';
    }
}

$tree = new CrismassTree (12, '$');
sleep(3);
$tree->addToys(10, '#');
