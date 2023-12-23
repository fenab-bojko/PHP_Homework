<?php
include_once 'Toys.php';

class CrismassTree {
    private $_higth = 0;
    private $_simbol = null;
    private $_toys = 0;
    private $_simbolToys = null;
    private $_massResult = [];

    public function createTree ($higth, $simbol) {
        $this->_higth = $higth;
        $this->_simbol = $simbol;
        $mass = [];

        for ($i = 0; $i < $this->_higth; $i++) {
            $mass[] = $this->_simbol;
            $this->_massResult[] = implode ($mass);
        }
        $data = $this->_massResult;
        extract($data);
        include 'CrismassTree.tpl';
    }

    public function addToys ($toys) {
        $f = new Toys;
        $this->_simbolToys = $f->getSimbol();
        $this->_toys = $toys;

        while ($this->_toys) {
            foreach ($data as $key => $elem) {
                $massElem = str_split($elem);
                $random = rand(1, count($massElem));

                foreach($massElem as $i => $item) {
                    if ($random == $i && $this->_toys && $item !== $this->_simbolToys) {
                        $massElem[$i] = $simbolToys;
                        $this->_toys--;
                        $data[$key] = implode($massElem);
                    } else {
                        $data[$key] = implode($massElem);
                    }
                }

            }
        }
        return $data;

    }
}