<?php
namespace App\Controller;

use App\Model\UsuariosModel as usuario;
use Slim\Views\Twig;

class SessionController
{
    public static function index($request, $response, $args)
    {

        if (isset($_POST)) {
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            if (usuario::IniciarSesion($usuario, $clave)) {
                $view = Twig::fromRequest($request);
                $parametros = [
                    'usu_nombre' => $_SESSION['usu_nombre'],
                    'usu_id' => $_SESSION['usu_id'],
                    'class' => 'off',
                ];
                return $view->render($response, 'iniciado.php', $parametros);
            } else {
                $view = Twig::fromRequest($request);
                $parametros = [
                     'warning' => "no",
                 ];
                return $view->render($response, 'login.php', $parametros);
            }
        }
    }
}
?>