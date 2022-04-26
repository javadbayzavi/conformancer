<?php
namespace Compontents\Issues;
use Core\Components;
use Services\Issues;

class issue extends baseComponent
{
    public function __construct()
    {
        $this->serviceProvider = new issuerService();
    }
    public function Index():void
    {

    }

    public function Create():void
    {
        
    }

    public function Delete():void
    {
        
    }

    public function Update():void
    {
        
    }

    public function List():void
    {
        
    }

    public function Edit():void
    {
        
    }
}
?>