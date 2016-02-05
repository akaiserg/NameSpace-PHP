<?php

class Gc1 {

    function __construct(globalDto\IDto $dto=null){

        echo "at the constructor of Gc1 without namespace<br>";
        echo $dto->getAtt()."<br>";
    }

}