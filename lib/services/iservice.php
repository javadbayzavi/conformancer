<?php  
namespace Core\Services;
use Core\Models\baseModel as Model;

interface Iservice
{
    function Insert(Model $T_Model):bool;
    function Update(Model $T_Model):bool;

    function Delete(Model $T_Model):bool;
    function Fetch(Model $T_Model):array;
}
?>