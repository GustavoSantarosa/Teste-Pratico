<?php
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Produto;

class ProdutoController {
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme/produtos", "phtml");
    }

    public function index(): void{
        $produtos = (new Produto())->find()->fetch(true);

        echo $this->view->render("home", [
            "title" => "Home | ".SITE,
            "produtos" => $produtos
        ]);
    }

    public function create(): void{
        echo $this->view->render("create", [
            "title" => "Home | ".SITE
        ]);
    }
    
    public function store(): void{

        $Produto = new Produto();
            $Produto->__set("descricao", "affe");
            $Produto->__set("tipo", 1);
            $Produto->__set("quantidade", 3);
            $Produto->__set("valor", 10.00);
            $Produto->save();

        $produtos = (new Produto())->find()->fetch(true);
        echo $this->view->render("home", [
            "title" => "Home | ".SITE,
            "produtos" => $produtos
        ]);
    }

    public function error(array $data): void{
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}