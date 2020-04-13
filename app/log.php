<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
require_once __DIR__.'/vendor/autoload.php';

use Fluent\Logger\FluentLogger;

$body = json_decode(file_get_contents("php://input"), true);

$logger = new FluentLogger("fluentd", "24224");
$logger->post("client_logger.access", $body);

var_dump(">>>>>>>>> LOG SENT | by php <<<<<<<<<<<") or die;