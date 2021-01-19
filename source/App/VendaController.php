<?php
    namespace Source\App;

    class VendaController {
        public function __construct()
        {
            
        }

        public function index(): void{
            echo "<h1>Venda Home</h1>";
        }

        public function create(): void{
            echo "<h1>Inserir</h1>";
        }

        public function error(array $data): void{
            echo "<h1>Erro {$data["errcode"]}</h1>";
        }
    }