<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Produto extends DataLayer{
    public function __construct()
    {
        parent::__construct("produtos", [
            "descricao",
            "tipo_id",
            "quantidade",
            "valor"
        ]);
    }
}