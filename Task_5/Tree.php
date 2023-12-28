<?php
session_start();

class Tree {

    private $_higth = 0;
    private $_simbol = null;
    private $_garland = false;
    private $_massTree = [];


    public function setTree ($higth, $simbol) {
        $this->_higth = $higth;
        $this->_simbol = $simbol;
        $_SESSION['simbol'] = $simbol;

        $mass = [];
        $massTree = [];
        for ($i = 0; $i < $this->_higth; $i++) {
            $mass[] = $this->_simbol;
            $massTree[] = $mass;
        }
        $this->_massTree = $massTree;
        $_SESSION['massTree'] = $massTree;
    }

    public function toggleGarland ($garland) {
        $this->_garland = $garland;
        echo $this->_garland;
        return $this->_garland;
    }

    public function getTree () {
        $massTree = $this->_massTree;
        return $massTree;
    }

    public function random () {
        $mass = $_SESSION['massTree'];
        $count = 0;
        foreach ($mass as $elem) {
            foreach ($elem as $e) {
                $count++;
            }
        }
        $random = rand(0, $count);
        return $random;
    }

    public function addToy ($toy) {
        $mass = $_SESSION['massTree'];
        $random = $this->random();
        $massToy = [];
        $massToyResult = [];
        $count = 0;
        foreach ($mass as $k => $elem) {
            foreach ($elem as $key => $item) {
                $count++;
                $elem[$key] = ($count === $random) ? $toy : $item;
            }
            $mass[$k] = $elem;
        }
        $_SESSION['massTree'] = $mass;
        return $mass;
    }

    public function deleteToy ($toy) {
        $mass = $_SESSION['massTree'];
        $simbol = $_SESSION['simbol'];
        $massToy = [];
        $massToyResult = [];
        foreach ($mass as $k => $elem) {
            foreach ($elem as $key => $item) {
                $elem[$key] = ($item === $toy) ? $simbol : $item;
            }
            $mass[$k] = $elem;
        }
        $_SESSION['massTree'] = $mass;
        return $mass;
    }
}