<?php

class CreateTree {
    private $_higth = 0;
    private $_simbol = null;
    private $_massTree = [];

    public function getTree ($a, $b) {
        $this->_higth = $a;
        $this->_simbol = $b;
        $massRow = [];

        for ($i = 0; $i < $this->_higth; $i++ ) {
            $massRow[] = $this->_simbol;
            $this->_massTree[] = $massRow;
        }
        $data = $this->_massTree;
        return $data;
    }

    
}
