<?php
namespace Core\Components;
namespace Core\Services;

abstract class baseComponents implements Icomponent
{
    protected baseService $ServiceProvider;
    private string $name;

    public function __construct(string $value, baseService $ServiceProvider)
    {
        $this->name = $value;
        $this->ServiceProvider = $ServiceProvider;
    }
    
    public static function createComponent(string $component)
    {
        
    }
    public function run(string $command)
    {
        $this->$command();
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