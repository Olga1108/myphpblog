<?php

namespace MyProject\Controllers;

class MainController 
{
    public function main() 
    {
        echo 'Main Page';
    }

    public function sayHello(string $name) 
    {
        echo 'Hello, ' . $name;
    }
}