<?php

class Produto {

    private int $a;
    private int $b;
    private int $c;

    /**
     * @return int
     */
    public function getA(): int
    {
        return $this->a;
    }

    /**
     * @param int $a
     */
    public function setA(int $a): void
    {
        $this->a = $a;
    }

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @param int $b
     */
    public function setB(int $b): void
    {
        $this->b = $b;
    }

    /**
     * @return int
     */
    public function getC(): int
    {
        return $this->c;
    }

    /**
     * @param int $c
     */
    public function setC(int $c): void
    {
        $this->c = $c;
    }

    function multiplica($a, $b, $c){
        return $a * $b * $c;
    }
    
}

$obj = new Produto();

$mult = $obj->multiplica(1,2,3);

echo $mult;
