<?php

require_once __DIR__ . '/Address.php';

class Prodotti

{
    public $name;
    public $surname;
    public $permissions;
    public $address;

    public function __construct($name, $surname, Address $indirizzo)
    public function __construct($name, $surname, array $permissions, Address $indirizzo)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->permissions = $permissions;
        $this->address = $indirizzo;
    }
}
