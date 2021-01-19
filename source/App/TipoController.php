<?php
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Tipo;

class TipoController {
    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../theme/tipos", "phtml");
    }

    public function index(): void{
        $Tipos = (new Tipo())->find()->fetch(true);

        echo $this->view->render("home", [
            "title" => "Home | ".SITE,
            "Tipos" => $Tipos
        ]);
    }

    public function error(array $data): void{
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}