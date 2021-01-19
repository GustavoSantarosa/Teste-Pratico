<?php

    use CoffeeCode\Router\Router;

    require __DIR__."/vendor/autoload.php";

    $route = new Router(ROOT);
    
    $route->namespace("Source\App");

    $route->group(null);
        $route->get("/",            "HomeController:index"        );
    $route->group("produtos");
        $route->get("/",            "ProdutoController:index"     );
        $route->get("/inserir",     "ProdutoController:create"    );
        $route->post("/salvar",     "ProdutoController:store"     );
    $route->group("vendas");
        $route->get("/",            "VendaController:index"       );
        $route->get("/inserir",     "VendaController:create"      );

        $route->group("tipos");
        $route->get("/",            "TipoController:index"       );

    $route->group("ops");
        $route->get("/{errcode}",   "Web:error"     );

    $route->dispatch();

    if($route->error()){
        $route->redirect("/ops/{$route->error()}");
    }