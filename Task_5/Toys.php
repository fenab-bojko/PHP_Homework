<?php
session_start();

class Toys {
    private $_simbolToys = null;

    public function getToys () {
        $_SESSION['simbolToys'] = $this->_simbolToys;
    }

    public function setToys ($toys) {
        $this->_simbolToys = $toys;
    }

    public function deleteToys () {
        $this->_simbolToys = null;
    }
}