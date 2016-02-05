<?php

// requires can't be over the namespaces declaration
namespace main;

require_once __DIR__ . '/vendor/autoload.php';


use globalDto;
use nameSpace1;
use nameSpace2;
use util;
//use util\subUtil;
//use nameSpace2\subNameSpace2; // it's not necessary to define it

$oDto1=new globalDto\Dto1();// dependency
$oDto1->setAtt("DTO type 1");
$oDto2=new globalDto\Dto2();// dependency
$oDto2->setAtt("DTO type 2");

$object1= new \Gc1($oDto1 );
$object2= new  Gc2($oDto2);


$object3= new nameSpace1\Ns1($oDto2);
$object4= new nameSpace2\Ns2($oDto2);


$object5= new nameSpace1\Ns2($oDto1);// the same class name 'Ns2' different namespace
$object6= new nameSpace2\subNameSpace2\Sns2($oDto2);


$oSns2SubTask = new nameSpace2\subNameSpace2\Sns2SubTask(); // dependency
$object7= new nameSpace2\Ns2MainTask($oSns2SubTask);


$oSutil= new util\subUtil\Sutil(); // generating the dependency
$oUtil= new util\Util($oSutil);  // generating the dependency
$object8= new nameSpace1\subNameSpace1\SnsUtil($oUtil);


