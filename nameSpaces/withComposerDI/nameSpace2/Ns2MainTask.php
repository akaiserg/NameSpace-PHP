<?php

namespace nameSpace2;

//require_once 'subNameSpace2/Sns2SubTask.php';

//use nameSpace2\subNameSpace2;

class Ns2MainTask {

    function __construct(subNameSpace2\Sns2SubTask $sns2SubTask){

        echo "at the constructor of Ns2MainTask, namespace <b>'nameSpace2'</b><br>";
        $this->doSomething($sns2SubTask);

    }


    private function doSomething(subNameSpace2\Sns2SubTask $sns2SubTask){

        echo "class Ns2MainTask-> ".$sns2SubTask->doSomething()."<br>";

    }

}