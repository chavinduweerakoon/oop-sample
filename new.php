<?php

//properties and $this 

class Example
{
    public $item='blah blah blah';
    public $name;

    function Sample()
    {
        $this->Test();
    }

    function Test()
    {
        echo 'Test';
        echo $this->item;
        $regular = 500;
        echo $regular;
    }
}

$d = new Example ();
$d-> Sample();

?>