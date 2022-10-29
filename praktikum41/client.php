<?php
$client = new SoapClient(null, array(
    'uri' => 'urn://http://localhost/p11/', 
'location' => 'http://localhost/prak/phpws/praktikum41/service.php'));
$return = $client->__soapCall("tambah", array(1,2));
echo $return;
?>