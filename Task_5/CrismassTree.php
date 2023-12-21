<?php

class CrismassTree {
    private $_higth = 0;
    private $_simbol = null;
    private $_toys = 0;
    private $_simbolToys = null;
    private $_massTree = [];
    private $_massTreeToys = [];
    private $_garlandFlag = false;

    public function createTree ($higth, $simbol) {
        $this->_higth = $higth;
        $this->_simbol = $simbol;

        for ($i = 0; $i < $this->_higth; $i++) {
            $mass[] = $this->_simbol;
            $this->_massTree[] = implode ($mass);
        }
        $data = $this->_massTree;
        extract($data);
        include 'formTree.tpl';
    }

    public function addToys ($toys, $simbolToys) {
        $this->_toys = $toys;
        $this->_simbolToys = $simbolToys;
        $this->_massTreeToys = $this->_massTree;

        while ($toys) {
            foreach ($this->_massTreeToys as $key => $elem) {
                $massElem = str_split($elem);
                $random = rand(1, count($massElem));

                foreach($massElem as $i => $item) {
                    if ($random == $i && $toys && $item !== $simbolToys) {
                        $massElem[$i] = $simbolToys;
                        $toys--;
                        $this->_massTreeToys[$key] = implode($massElem);
                    } else {
                        $this->_massTreeToys[$key] = implode($massElem);
                    }
                }

            }
        }
        $data = $this->_massTreeToys;
        extract($data);
        include 'formTree.tpl';
    }
    
    public function toggleGarlandFlag () {
        $this->_garlandFlag = !$this->_garlandFlag;
    }
}

$a = new CrismassTree;

$a->createTree(10, '%');
sleep(3);
$a->addToys(10, '*');
