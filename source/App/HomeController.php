<?php

namespace Source\App;
use League\Plates\Engine;


class HomeController {
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme/", "phtml");
    }

    public function index(): void{
        echo $this->view->render("home", [
            "title" => "Home | ".SITE
        ]);
    }

    public function error(array $data): void{
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}