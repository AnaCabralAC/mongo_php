<?php 

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$up=new \MongoDB\Driver\BulkWrite;

//$up->update(['nome'=>'Ana Cabral'],['nome'=>'Ana Cabral','idade'=>21]);
$up->update(['nome'=>'Ana Cabral'],['$set'=>['nome'=>'Ana J Cabral']]);

$manager->executeBulkWrite('raiz.academicos',$up);
