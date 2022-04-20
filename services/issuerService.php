/*

*/
<?php 
declare('type_strict = 1');
namespace Services\issuers;

include_once "../lib/services/service.php";
use Core\Services\service;


class issuerService extends service
{
    function Insert(issuer $T_Model):bool
    {
        return true;
    }
    function Update(issuer $T_Model):bool
    {
        return true;
    }

    function Delete(issuer $T_Model):bool
    {
        return true;
    }

    function Fetch(issuer $T_Model):array
    {
        return true;
    }
}
>