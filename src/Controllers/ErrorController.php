<?php

namespace App\Controllers;

//on se creer  une classe specifique pour gerer les eurreurs afin de pouvoir rajouter
//les methodes defferente en dontion de chaque erreurs

class ErrorController
{
    static function notFound()
    {
        http_response_code(404);
        require_once(__DIR__ . '/../Views/errors/404.php');
    }
}
