<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if (empty($_SESSION['player_results'])) {
        $_SESSION['player_results'] = array();
    }

    function save($this)
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
        deleteAll();
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/player2", function() use($app) {
        save($_POST);
      
        return $app['twig']->render('player2.html.twig', getAll($_SESSION['player_results']));
    });
    
    $app->post("/results", function() use($app) {
        save($_POST);
        $results = new RockPaperScissors;
        $results_array = $results->rockPaperScissorsGame($_SESSION['player_results'][0]['player1'], $_SESSION['player_results'][1]['player2']);
        
        return $app['twig']->render('results.html.twig', array('results'=>$results_array));
        
    });



    return $app;
?>
