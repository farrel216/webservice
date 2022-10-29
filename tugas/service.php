<?php
function to100($int){
    $sisa = $int % 100;
    $hasil = (int) ($int/100);
    if($sisa && $hasil){
        return $hasil . " Kertas sisa " . $sisa;
    }
    else if($hasil){
        return $hasil . " Kertas";
    }
    else{
        return "sisa ". $sisa;
    }
}
function to50($int){
    $sisa = $int % 50;
    $hasil = (int) ($int/50);
    if($sisa && $hasil){
        return $hasil . " Kertas sisa " . $sisa;
    }
    else if($hasil){
        return $hasil . " Kertas";
    }
    else{
        return "sisa ". $sisa;
    }
}
function to20($int){
    $sisa = $int % 20;
    $hasil = (int) ($int/20);
    if($sisa && $hasil){
        return $hasil . " Kertas sisa " . $sisa;
    }
    else if($hasil){
        return $hasil . " Kertas";
    }
    else{
        return "sisa ". $sisa;
    }
}
function to10($int){
    $sisa = $int % 10;
    $hasil = (int) ($int/10);
    if($sisa && $hasil){
        return $hasil . " Kertas sisa " . $sisa;
    }
    else if($hasil){
        return $hasil . " Kertas";
    }
    else{
        return "sisa ". $sisa;
    }
}
$server = new SoapServer(null, array('uri' => 'urn://http://localhost/p12/'));
$server->addFunction(array("to100", "to50", "to20", "to10"));
$server->handle();
?> 