<?php
namespace Models\conformances;
include "../../lib/model/baseModel.php";

use Core\Models\baseModel as baseModel;
use Models\issuers\issuer;

class conformance extends baseModel
{
    private string $title;
    private string $raiseDate;
    private string $lastModifiedDate;
    private string $reasons;
    private issuer $issuer;
    private conformanceState $currentstatus;


    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $value):void
    {
        $this->title = $value;
    }

    public function getRaiseDate():string
    {
        return $this->raiseDate;
    }

    public function setRaiseDate(string $value):void
    {
        $this->raiseDate = $value;
    }

    public function setLastModifiedDate(string $value):void
    {
        $this->lastModifiedDate = $value;
    }
    public function getLastModifiedDate():string
    {
        return $this->lastModifiedDate;
    }

    public function setReason(string $value):void
    {
        $this->reasons   = $value;
    }
    public function getReason():string
    {
        return $this->reasons;
    }

    public function setIsuuer(issuer $value):void
    {
        $this->issuer   = $value;
    }
    public function getIssuer():issuer
    {
        return $this->issuer;
    }

    public function setStatus(conformanceState $value):void
    {
        $this->currentstatus   = $value;
    }
    public function getStatus():conformanceState
    {
        return $this->currentstatus;
    }


}

?>