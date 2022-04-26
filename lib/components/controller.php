<?php
namespace Core\Components;


use Core\Components;

class controller
{
    protected baseComponent $HomeComponent;
    public string $action;
    public function __construct(string $target)    
    {
        $this->HomeComponent = baseComponent::createComponent($target);        
    }

    public function execute(string $function,$params)
    {
        $this->HomeComponent->run($function);
    }


    public static function createEngine(string $command)
    {
        try {
            
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
?>