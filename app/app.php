<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if (empty($_SESSION['player_results'])) {
        $_SESSION['player_results'] = array();
    }

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return  $app['twig']->render('home.html.twig');
    });

    $app->post("/player2", function() use($app) {

    });

    return $app;
?>
