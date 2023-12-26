<?php

$dev = Array (
    'db_name' => 'developer',
    'db_user' => 'DevUse',
    'db_password' => '1111',
    'db_email' => 'user@mail.ru',
    'app_url' => 'http://user.ru',
);

$prod = Array (
    'db_name' => 'prodact',
    'db_user' => 'ProdUse',
    'db_password' => '2222',
    'db_email' => 'prod@mail.ru',
    'app_url' => 'http://prod.ru',
);

class Config {
private $_mass = [];

    public function __construct ($mass) {
        $this->_mass = $mass;
    }

    public function __sleep() {
        if ($this->_mass['db_name'] === 'developer') {
            return Array ('db_name', 'db_user', 'db_password', 'db_email', 'app_url');
        } else {
            return Array ('db_user', 'app_url');
        }
    }

    public function __wakeup() {

    }
}

$str = new Config ($dev);
echo $str;
