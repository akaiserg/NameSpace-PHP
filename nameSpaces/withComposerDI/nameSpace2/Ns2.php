<?php

namespace nameSpace2;

use globalDto;

class Ns2 {

    function __construct(globalDto\IDto $dto){

        echo "at the constructor of Ns2, namaspace <b>'nameSpace2'</b><br>";
        echo $dto->getAtt()."<br>";

    }

}