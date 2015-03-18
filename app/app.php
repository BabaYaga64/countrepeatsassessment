<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;


    $app->get("/", function() use ($app) {
        return $app['twig']->render('inputform.twig');

    });


    $app->post("/view_frequency", function()  use ($app) {
        $my_repeat_counter = new RepeatCounter;

        $word_frequency->save();

        return $app['twig']->render('displayfrequency.twig', array('array_of_words' => $word));

    });

    return $app;

?>
