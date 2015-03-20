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
        $repeat_counter = new RepeatCounter;
        $input_word = $_POST['input_word'];
        $input_string = $_POST['input_string'];
        $word_frequency = $repeat_counter->CountRepeats($input_word, $input_string);
        return $app['twig']->render('displayfrequency.twig', array('input_word' => $word_to_search_for, 'input_string' => $string_to_search_in, 'frequency' => $frequency));

    });


    return $app;

?>
