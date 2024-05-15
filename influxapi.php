<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
use DateTime;
use DateTimeZone;
use InfluxDB\Options;
use InfluxDB\Client;
use InfluxDB\Adapter\GuzzleAdapter;
use GuzzleHttp\Client as GuzzleHttpClient;
use InfluxDB\Integration\Framework\TestCase as InfluxDBTestCase;
require 'composertest/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 'on');
$http = new \GuzzleHttp\Client();

$options = new Options();
$options->setUsername("xyz");
$options->setPassword("1234");

$adapter = new GuzzleAdapter($http, $options);
$client = new Client($adapter);


//I need to select database "Test"
$database = $client->selectDB('Test');
var_dump($database->query('select * from "app-search"')); 
//var_dump($client->query('select * from "app-search"'));

?>

</body>
</html>