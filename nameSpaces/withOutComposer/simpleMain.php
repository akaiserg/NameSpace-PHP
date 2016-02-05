<?php

// requires can't be over the namespaces declaration
namespace main;

require_once "globalClasses/Gc1.php";
require_once "globalClasses/Gc2.php";
// This one doesn't use namespace
$object1= new \Gc1();  // Without \   you wil get an error: Fatal error: Class 'main\Gc1' not found
$object2= new Gc2();  // Because Gc2 has the same namespace 'main', doesn't need to use  \

require_once "nameSpace1/Ns1.php";
require_once "nameSpace2/Ns2.php";
require_once "nameSpace1/Ns2.php";
require_once "nameSpace2/subNameSpace2/Sns2.php";
require_once "nameSpace2/Ns2MainTask.php";
require_once "nameSpace1/subNameSpace1/SnsUtil.php";

use nameSpace1;
use nameSpace2;
//use nameSpace2\subNameSpace2; // it's not necessary to define it

$object3= new nameSpace1\Ns1();
$object4= new nameSpace2\Ns2();

$object5= new nameSpace1\Ns2();// the same class name 'Ns2' different namespace
$object6= new nameSpace2\subNameSpace2\Sns2();

$object7= new nameSpace2\Ns2MainTask();// This class makes a instances of Sns2SubTask

$object8= new nameSpace1\subNameSpace1\SnsUtil();