<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {
    private array $messages = [
        " Hello!", " Hi!", " Bye!"
    ];
    
    #[Route(path:"/{limit<\d+>?3}", name:"app_index")] // 3 - default value for limit number of messages
    public function index(int $limit) {
        // We can set a $limit parameter to handle any values exceded the limit
        return new Response(
            implode(",", array_slice($this->messages, 0, $limit)));
    }

    #[Route("/messages/{id<\d+>}", name:"app_show_one")]
    public function showOne(int $id) {
        return new Response(($this->messages[$id]));
    }
}