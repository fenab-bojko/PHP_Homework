<?php
session_start();

class Toys {
    private $_simbol = null;

    public function setSimbol () {
        $this->_simbol = $_POST['simbolToys'];
    }
    public function getSimbol () {
        $_SESSION['simbolToys'] = $this->_simbol;
        return $this->_simbol;
    }
    public function addToysToTree () {

    }
}