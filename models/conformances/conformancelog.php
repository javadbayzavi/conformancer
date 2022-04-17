<?php

namespace Models\conformances;

include "../../lib/model/baseModel.php";
use Core\Models\baseModel as baseModel;

class conformanceLog extends baseModel
{
    public string $date;
    public conformanceState $state;
    public conformance $conformance;

    public function getDate():string
    {
        return $this->date;
    }
    public function setDate(string $value):void
    {
        $this->date = $value;
    }

    public function setState(conformanceState $value):void
    {
        $this->state = $value;
    }
    public function getState():conformanceState
    {
        return $this->state;
    }

    public function setConformance(conformance $value):void
    {
        $this->conformance = $value;
    }
    public function getConformance():conformance
    {
        return $this->conformance;
    }
}
?>