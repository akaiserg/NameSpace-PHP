<?php

namespace globalDto;

class Dto2 implements  IDto {

    private $att1;

    public function setAtt($att1)
    {
        $this->att1 = $att1;
    }

    public function getAtt()
    {
        return $this->att1;
    }


}