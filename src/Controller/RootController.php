<?php 

namespace App\Controller;
use App\Model\UsuariosModel as usuario;
use Slim\Views\Twig;

class RootController{
    function index($request, $response, $args){
        $view = Twig::fromRequest($request);
        $parametros = [
            'title' => 'Clinic A',
            'categoria' => 'home',
        ];
        return $view->render($response, 'raiz.php', $parametros);
    }
}
?>