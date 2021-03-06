<?php 
namespace Models\actions;

include "../../lib/model/baseModel.php";

use Core\Models\baseModel as baseModel;

class action extends baseModel
{
    private string $title;
    private string $start;
    private string $end;
    private  array $performs;

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

    public function getPerforms():array
    {
        return $this->performs;
    }    
    public function setPerforms(array $value):void
    {
        $this->performs = $value;
    }

}
?>