<?php

namespace nameSpace2\subNameSpace2;

use globalDto;

class Sns2 {

    function __construct(globalDto\IDto $dto){

        echo "at the constructor of Sns2, namaspace <b>'nameSpace2/subNameSpace2'</b><br>";
        echo $dto->getAtt()."<br>";

    }

}