<?php
$client = new SoapClient(null, array(
    'uri' => 'urn://http://localhost/p12/', 
'location' => 'http://localhost/prak/phpws/tugas/service.php'));
$to100 = $client->__soapCall("to100", array(420));
echo $to100;
echo "<br>";
$to50 = $client->__soapCall("to50", array(57));
echo $to50;
echo "<br>";
$to20 = $client->__soapCall("to20", array(57));
echo $to20;
echo "<br>";
$to10 = $client->__soapCall("to10", array(78));
echo $to10;
?>