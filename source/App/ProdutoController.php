<?php
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Produto;

class ProdutoController {

    private $view;
    private $router;

    public function __construct($router)
    {
        $this->view = Engine::create(__DIR__."/../../theme/produtos", "phtml");
        $this->router = $router;
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
            $Produto->descricao     = $_POST["descricao"];
            $Produto->tipo          = $_POST["tipo"];
            $Produto->quantidade    = $_POST["quantidade"];
            $Produto->valor         = $_POST["valor"];
            var_dump($Produto->save());exit;
            $Produto_id = $Produto->save();

        $this->router->redirect("produtos/");
    }

    public function error(array $data): void{
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}