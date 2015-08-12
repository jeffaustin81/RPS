<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if (empty($_SESSION['player_results'])) {
        $_SESSION['player_results'] = array();
    }

    function save()
    {
        array_push($_SESSION['player_results'], $this);
    }

    function getAll()
    {
        return $_SESSION['player_results'];
    }

    function deleteAll()
    {
        $_SESSION['player_results'] = array();
    }

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/player2", function() use($app) {
        save($_POST['player1']);
        var_dump($_SESSION['player_results']);
        return $app['twig']->render('player2.html.twig');
    });



    return $app;
?>
