<?php

namespace nameSpace1\subNameSpace1;

//require_once '../../util/Util.php'; //You can't call the file directly

//require_once 'util/Util.php'; //  you have to define the path from the root file, but this only works   when the file main.php is called

require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . '../../')."/util/Util.php";// If you're not using Composer, you can fix this problem  by  using  realpath

use util;

class SnsUtil {

    function __construct(){

        echo "at the constructor of SnsUtil, namespace <b>nameSpace1\subNameSpace1'</b><br>";
        $this->makeIsntaceOfUtil();

    }

    private function makeIsntaceOfUtil(){

        $o= new util\Util();
        echo "an instance of Util has been made from  SnsUtil, namespace <b>nameSpace1\subNameSpace1'</b><br> ";

    }

}