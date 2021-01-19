<?php
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Produto;


class VendaController {
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme/vendas", "phtml");
    }

    public function index(): void{
        $produtos = (new Produto())->find()->fetch(true);
        
        echo $this->view->render("home", [
            "title" => "Home | ".SITE,
            "produtos" => $produtos
        ]);
    }

    public function create(): void{
        echo "<h1>Inserir</h1>";
    }

    public function error(array $data): void{
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}