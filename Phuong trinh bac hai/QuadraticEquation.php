<?php
class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }
    public function checkAbc() {
        if ($this->a==0) {
            if ($this->b==0) {
                die("The equation has no real roots");
            } else {
                echo "The equation has one root ".(-$this->c/$this->b);
                die();
            }
        }
    }
//    Tinh denlta
    public function getDiscriminant() {
        return (($this->b*$this->b)-(4*$this->a*$this->c));
    }

    public function getRoot1() {
        return ((-$this->b+sqrt($this->getDiscriminant()))/(2*$this->getA()));
    }
    public function getRoot2() {
        return ((-$this->b-sqrt($this->getDiscriminant()))/2*$this->getA());
    }

    function disPlay() {
        $this->checkAbc();
        $delta = $this->getDiscriminant();
        if ($delta > 0) {
            echo "The equation has two roots ".$this->getRoot1()." and ".$this->getRoot2();
        } elseif ($delta == 0) {
            echo "The equation has one root ".$this->getRoot1();
        } else echo "The equation has no real roots";
    }

}

