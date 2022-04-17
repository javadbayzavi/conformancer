<?php
namespace Models\issuers;
include "../../lib/model/baseModel.php";

use Core\Models\baseModel as baseModel;

class issuer extends baseModel
{
    private string $title;
    private string $address;
    private string $contactNumber;

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $value):void
    {
        $this->title = $value;
    }

    public function getAddress():string
    {
        return $this->address;
    }

    public function setAddress(string $value):void
    {
        $this->address = $value;
    }

    public function setContactNumber(string $value):void
    {
        $this->contactNumber = $value;
    }
    public function getContactNumber():string
    {
        return $this->contactNumber;
    }
}

?>