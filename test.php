<?php

include __DIR__.'/vendor/autoload.php';

$dsn = 'mongodb://remoteserver:27018/mongo_log';


$mongo= new \MongoDB\Client($dsn);
var_dump($mongo->listDatabases());
