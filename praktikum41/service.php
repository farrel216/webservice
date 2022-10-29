<?php
function tambah($a,$b){
    return $a+$b;
}
$server = new SoapServer(null, array('uri' => 'urn://http://localhost/p11/'));
$server->addFunction("tambah");
$server->handle();
?>