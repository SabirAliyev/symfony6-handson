<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {
    private array $messages = [
        " Hello!", " Hi!", " Bye!"
    ];
    
    #[Route(path:"", name:"app_index")]
    public function index() {
        return new Response(implode(",", $this->messages));
    }

    #[Route("/messages/{id}", name:"app_show_one")]
    public function showOne(int $id) {
        return new Response(($this->messages[$id]));
    }
}