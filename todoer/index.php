<?php
require 'vendor/autoload.php';
$configuration = [
  "settings" => [
    "displayErrorDetails" => true 
  ]
];

$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);


$app->get('/', function($request, $response) {
  $connection = new MongoDB\Client("mongodb://localhost/todos");
  $db = $connection->todos;

  $doc = array (
    "title" => "Do something",
    "done" => false
  );
  $db->todos->insertOne($doc);


  $response->write("Document inserted");
  return $response;
});

$app->run();

?>
