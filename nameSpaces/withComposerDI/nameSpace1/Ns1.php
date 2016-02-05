<?php

namespace nameSpace1;

use globalDto;

class Ns1 {

    function __construct(globalDto\IDto $dto){

        echo "at the constructor of Ns1, namaspace <b>'nameSpace1'</b><br>";
        echo $dto->getAtt()."<br>";

    }

}