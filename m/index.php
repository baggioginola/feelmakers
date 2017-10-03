<?php
/**
 * Created by PhpStorm.
 * User: mariocue
 * Date: 13/12/2016
 * Time: 03:12 PM
 */

require_once __DIR__ . '/includes/header.inc.php';

$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->get('/acerca', function() use($app) {
   $app->render('acerca.php');
});

$app->get('/contacto', function() use($app) {
    $app->render('contacto.php');
});

$app->get('/recomendaciones', function() use($app) {
    $app->render('recomendaciones.php');
});

$app->get('/save-the-date', function() use($app) {
    $app->render('save-the-date.php');
});

$app->get('/feel-session', function() use($app) {
    $app->render('feel-session.php');
});

$app->get('/wedding-day', function() use($app) {
    $app->render('wedding-day.php');
});

$app->get('/trash-the-dress', function() use($app) {
    $app->render('trash-the-dress.php');
});

$app->post('/contacto/sendMessage', function() use($app) {
   require_once __CONTROLLER__ . 'CContactController.class.inc.php';

    if(!$result = Contact::singleton()->sendMessage()){
        echo 'Fail';
    }
    echo $result;
});
$app->run();