<?php 
namespace Models\actions;

include "../../lib/model/baseModel.php";

use Core\Models\baseModel as baseModel;
use Models\actions\action;

class perform extends baseModel
{
    private string $title;
    private string $start;
    private string $end;
    private action $action;

    public function getTitle():string
    {
        return $this->title;
    }    
    public function setTitle(string $value):void
    {
        $this->title = $value;
    }
    
    public function getStart():string
    {
        return $this->start;
    }    
    public function setStart(string $value):void
    {
        $this->start = $value;
    }

    public function getEnd():string
    {
        return $this->end;
    }    
    public function setEnd(string $value):void
    {
        $this->end = $value;
    }

    public function getAction():action
    {
        return $this->action    ;
    }    
    public function setAction(action $value):void
    {
        $this->action = $value;
    }

}
?>