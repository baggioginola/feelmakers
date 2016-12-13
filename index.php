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

$app->run();