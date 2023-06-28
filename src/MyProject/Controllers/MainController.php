<?php

namespace MyProject\Controllers;

use MyProject\View\View;

class MainController 
{
    private $view;
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }
    public function main() 
    {
        $articles = [
            ['name' => 'Article 1', 'text' => 'Text of the article 1'],
            ['name' => 'Article 2', 'text' => 'Text of the article 2']
        ];
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
        // include __DIR__ . '/../../../templates/main/main.php';
    }

    public function sayHello(string $name) 
    {
        echo 'Hello, ' . $name;
    }
}