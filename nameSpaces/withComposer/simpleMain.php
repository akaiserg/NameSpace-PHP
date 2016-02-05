<?php

// requires can't be over the namespaces declaration
namespace main;
//just  one require
require_once __DIR__ . '/vendor/autoload.php';

$object1= new \Gc1();
$object2= new Gc2();


use nameSpace1;
use nameSpace2;
//use nameSpace2\subNameSpace2; // it's not necessary to define it

$object3= new nameSpace1\Ns1();
$object4= new nameSpace2\Ns2();

$object5= new nameSpace1\Ns2();// the same class name 'Ns2' different namespace
$object6= new nameSpace2\subNameSpace2\Sns2();



$object7= new nameSpace2\Ns2MainTask();// This class makes a instances of Sns2SubTask

$object8= new nameSpace1\subNameSpace1\SnsUtil();
