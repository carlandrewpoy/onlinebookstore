<?php
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('display_errors', 1);

class MySoapServer {
  public function displayString($message) {
    return "This is from server: " . $message;
  }
}

$options = array(
  'uri' => 'http://example.com/soap',
  'location' => 'http://localhost:80/onlinebookstore/server.php'
);

$server = new SoapServer(null, $options);
$server->setClass('MySoapServer');
$server->handle();

?>