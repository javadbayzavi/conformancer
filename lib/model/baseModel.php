<?php

namespace Core\Models;


class baseModel
{
    protected int $Id;

    public function getId(): int{
        return $this->Id;
    }

    
    public function setId(int $value): void
    {
        $this->Id = $value;
    }
    
    private function uniqueIdGenerator(): int
    {
        return new random_int(0, 32780);
    }
}

?>