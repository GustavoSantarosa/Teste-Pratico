<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Tipo extends DataLayer{
    public function __construct()
    {
        parent::__construct("tipo", [
            "descricao",
            "imposto1",
            "imposto2",
            "created_at",
            "updated_at"
        ]);
    }
}