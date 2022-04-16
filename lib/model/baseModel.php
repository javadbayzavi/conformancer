<?php

namespace lib\model\;

class baseModel
{
    protected int Id;
    public __constructor(){}
    public getId(): int{
        return $this->uId;
    }

    public setId(int $value): void
    {
        $this->Id = $value;
    }
}

?>