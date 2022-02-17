<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello = "Arif";
    protected $helloOne = "Jenifar";
    private $helloTwo = "Santo";

    public function helloFour ()
    {
        echo 'hello four';
    }
    abstract function helloFive();
}