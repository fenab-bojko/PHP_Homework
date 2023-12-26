<?php

class Toys {
    
    private $_simbolToys = null;

    public function setToys ($s) {
        $this->_simbolToys = $s;
        return $this->_simbolToys;
    }

    public function getToys () {
        return $this->_simbolToys;
    }

    public function delToys () {
        $this->_simbolToys = $_POST['simbol'];
        return $this->_simbolToys;
    }
}