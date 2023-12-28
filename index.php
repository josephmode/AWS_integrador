<?php
require(__DIR__ . "/vendor/autoload.php");
use App\Controller\SessionController;
use App\Controller\LoginController;
use App\Controller\RootController;
use Slim\Views\TwigMiddleware;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

try{
    $app = AppFactory::create();

    $twig = Twig::create('src/Views', ['cache'=> false, 'debug'=>true]);
    $app->add(TwigMiddleware::create($app, $twig));
    $app->addErrorMiddleware(true, true, true);

    $app->get('/', RootController::class . ':index');
    $app->get('/Login', LoginController::class . ':login');
    $app->post('/menu', SessionController::class . ':index');

    $app->run();
}catch(Exception $e){
    echo "ERROR: " . $e->getMessage();
}
?>