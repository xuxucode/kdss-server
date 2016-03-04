<?php
require 'vendor/autoload.php';

/*
 * A simple Slim based sample application
 *
 * See Slim documentation:
 * http://www.slimframework.com/docs/
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App();

$app->get('/app-update', function (Request $request, Response $response) {
    $update = array(
      'title'  => 'KDSS new updates',
      'code'   => 1,
      'name'   => '1.0',
      'url'    => 'http://app.mi.com/download/1066?ref=search',
      'change' => '1. AA\n2. BB',
    );
    $response->getBody()->write(json_encode($update));
    return $response;
});

$app->run();
