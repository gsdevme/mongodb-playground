<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

$mongo = new \MongoDB\Driver\Manager('mongodb://127.0.0.1/');


VarDumper::dump($mongo);
