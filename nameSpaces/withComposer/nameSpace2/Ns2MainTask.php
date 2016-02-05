<?php

namespace nameSpace2;

require_once 'subNameSpace2/Sns2SubTask.php';
//use nameSpace2\subNameSpace2;

class Ns2MainTask {

    function __construct(){

        echo "at the constructor of Ns2MainTask, namespace <b>'nameSpace2'</b><br>";
        $this->makeInstanceOfSns2SubTask();

    }

    private function makeInstanceOfSns2SubTask(){

        $o = new subNameSpace2\Sns2SubTask();
        echo "an instance of Sns2SubTask has been made from  Ns2MainTask ";

    }


}