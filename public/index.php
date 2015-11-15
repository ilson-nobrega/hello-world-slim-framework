<?php
/**
 * Created by PhpStorm.
 * User: Ilson Nóbrega
 * Date: 14/11/2015
 * Time: 23:55
 */

namespace Application\Pub;

require '../vendor/autoload.php';

use Application\Lib\HttpBasicAuth;
use Slim\Slim;

//Slim configuration
$app = new Slim(array(
    'templates.path' => '../template'
));

//Middleware registry
$app->add(new HttpBasicAuth());


$app->get('/hello/:name', function ($name) use ($app) {
    echo "Hello, $name";
});

//Start application
$app->run();
