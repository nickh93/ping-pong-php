<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'
  ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_ping_pong", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $user_input_number = $my_PingPongGenerator->generatePingPongArray($_GET['number']);


        return $app['twig']->render('ping_pong_display.html.twig', array('results' => $user_input_number));
    });

    return $app;
?>
