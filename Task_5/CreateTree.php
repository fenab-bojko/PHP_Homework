<?php
session_start();
class CreateTree {
    private $_higth = 0;
    private $_simbol = null;

    public function createTree ($a, $b) {
        $this->_higth = $a;
        $this->_simbol = $b;
        $massRow = [];
        $massTree = [];

        for ($i = 0; $i < $this->_higth; $i++ ) {
            $massRow[] = $this->_simbol;
            $massTree[] = $massRow;
        }
        $data = json_encode($massTree);

        $_SESSION['massTree'] = $data;

    }
}