<?php

//oop | scope and calculator
class calc
{
    public $input;
    protected $input2;
    private $output;

    function SetInput($int)
    {
        $this->input = (int) $int;

    }
    function SetInput2($int)
    {
        $this->input2 = (int) $int;
    }

    function calculate()
    {
        $this->output =$this->input*$this->input2 ;
    }

    function getResult()
    {
        
        return $this->output;
    }
}

$calc = new calc();
$calc ->SetInput(5);
$calc ->SetInput2(6);
$calc->calculate();
echo $calc->getResult();
echo  $calc->input2;


?>