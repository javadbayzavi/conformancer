<?php
namespace Core\Components;

interface Icomponent
{
    public function Index();
    public function Create();
    public function Delete();
    public function Update();
    public function List();
    public function Edit();
}
?>