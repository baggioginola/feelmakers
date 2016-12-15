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

$app->get('/cinematografia', function() use($app) {
    $app->render('cinematografia.php');
});

$app->get('/fotografia', function() use($app) {
    $app->render('fotografia.php');
});

$app->get('/acerca', function() use($app) {
   $app->render('acerca.php');
});

$app->run();