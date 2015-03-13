<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;


    $app->get("/", function() use ($app) {

        });

        return $app['twig']->render('inputform.twig');



    $app->post("/inputform", function()  use ($app) {
        $word = new RepeatCounter($_POST['input_word']);
        $task->save();

        return $app['twig']->render('inputform.twig');

    });



?>
