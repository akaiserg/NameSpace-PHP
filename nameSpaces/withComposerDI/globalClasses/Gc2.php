<?php

namespace main;

//  this must be used in order to  the parameter  at the constructor  works well
use globalDto;

class Gc2 {


    function __construct(globalDto\IDto $dto){  // With namespace  de argument has to  have  globalDto\   and   in this case

        echo "at the constructor of Gc2, namespace <b>'main'</b><br>";
        echo $dto->getAtt()."<br>";
    }

}