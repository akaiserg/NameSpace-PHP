<?php

namespace nameSpace1;

use globalDto;

class Ns2 {

    function __construct(globalDto\IDto $dto){

        echo "at the constructor of Ns2, namespace <b>'nameSpace1'</b><br>";
        echo $dto->getAtt()."<br>";

    }

}