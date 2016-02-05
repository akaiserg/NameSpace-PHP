<?php

namespace util;

//require_once"subUtil/Sutil.php";

class Util {

    private $oSutil;

    function __construct(subUtil\Sutil $oSutil){

        echo "at the constructor of Util, namespace <b>'util'</b><br>";
        $this->oSutil=$oSutil;

    }

    public function doSomething(){

        return "Method doSomething from class Util";

    }

    public function doSomethingSUtil(){

       return  " class Util-> ".$this->oSutil->doSomething()."<br>";

    }

}