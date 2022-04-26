<?php  
namespace Core\Services;
use Core\Models\baseModel as Model;
use Core\Services\iservice;

abstract class service implements iservice
{
    function Insert(Model $T_Model):bool
    {
        return true;
    }
    function Update(Model $T_Model):bool
    {
        return true;
    }


    function Delete(Model $T_Model):bool
    {
        return true;
    }

    function Fetch(Model $T_Model):array
    {
        return true;
    }

}
?>