<?php
require 'config.php';
require 'vendor/autoload.php';

$Opauth = new Opauth\Opauth\Opauth($config);

try {
    $response = $Opauth->run();
    echo 'Authed as ' . $response->name . ' with uid '. $response->uid;
    echo "\n<br>";
    echo '<pre>';
    print_r($response);
    echo '</pre>';
} catch (OpauthException $e) {
    echo "Authentication error: " . $e->getMessage();
}
