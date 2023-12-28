<?php 

namespace App\Controller;
use Slim\Views\Twig;

class LoginController{
    function login($request, $response, $args){
        $view = Twig::fromRequest($request);
        $parametros = [
            'title'=>'Log In',
            'controller' => 'login',
        ];
        return $view -> render($response, 'login.php', $parametros);
    }
}

?>