<?php

namespace Models\conformances;

include "../../lib/model/baseModel.php";
use Core\Models\baseModel as baseModel;

class conformanceState extends baseModel
{
    public string $state;
    public int $predesessor;

    public function getState():string
    {
        return $this->state;
    }
    public function setState(string $value):void
    {
        $this->state = $value;
    }

    public function setPredecessor(int $value):void
    {
        $this->predesessor = $value;
    }
    public function getPredecessor():int
    {
        return $this->predesessor;
    }
}
?>