<?php 

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$db=new \MongoDB\Driver\BulkWrite;

$db->insert(['nome'=>'Ana Cabral','idade'=>21]);

$manager->executeBulkWrite('raiz.academicos',$db);
