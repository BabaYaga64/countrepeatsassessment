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


    $app->get("/view_frequency", function()  use ($app) {
        $view_frequency = new RepeatCounter;
        $result = $view_frequency->CountRepeats($_GET['input_word'], $_GET['input_string']);

        return $app['twig']->render('displayfrequency.twig', array('frequency' => $result));

    });


    $app->post("/view_frequency", function () use ($app) {
        $word_to_search_for = $_POST['input_word'];
        $string_to_search_in = $_POST['input_string'];

        $new_frequency = new RepeatCounter;
        $result = $new_frequency->CountRepeats($word_to_search_for, $string_to_search_in);

        return $app['twig']->render('displayfrequency.twig', array('result' => $result));

    });


    return $app;

?>
