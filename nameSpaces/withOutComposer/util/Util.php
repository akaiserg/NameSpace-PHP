<?php

namespace util;
require_once"subUtil/Sutil.php";

class Util {

    function __construct(){

        echo "at the constructor of Util, namespace <b>'util'</b><br>";
        $this->makeInstanceOfSutil();

    }

    private function makeInstanceOfSutil(){

        $o= new subUtil\Sutil();
        echo "an instance of Sutil has been made from  Util, namespace <b>'util'</b><br> ";

    }

}