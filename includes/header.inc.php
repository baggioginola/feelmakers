<?php
/**
 * Created by PhpStorm.
 * User: mariocue
 * Date: 13/12/2016
 * Time: 03:13 PM
 */
require_once __DIR__ . '/../config.php';
require_once FRAMEWORK . 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app  = new \Slim\Slim(array(
        'debug' => true,
        'templates.path' => 'app/view/',
        'view' => '\Slim\LayoutView',
        'layout' => 'layouts_master/master.php',
        'http.version' => '1.1'
    )
);

$app->notFound(function () use ($app) {

    $response = array(
        'type' => 'not_found',
        'message' => 'The requested resource does not exist.'
    );
});