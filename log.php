<?php
require_once('1.php');

$Log = new Log ();
//$Log->write('test.txt','this a logger file ');
echo "<pre>";
echo $Log->Read('test.txt');

?>