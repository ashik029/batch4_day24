<?php


namespace App\classes;
use App\classess\User;
use App\classes\interfcaeClass;
use App\classes\Example;
use App\classes\ExampleOne;

class Student extends ExampleOne implements InterfaceClass,Example
{
    protected $country = 'Bangladesh';
    public function __construct()
    {
        $this->name = "BASIS";
        $this->city = "Savar";
    }

    protected function manage ()
    {
//        echo "Institute Name is $this->name & city is $this->city";
        echo $this->hello;

    }
    public function one()
    {
        echo 'Hello one';
    }
    public function two()
    {
        echo 'Hello two';
    }
    public function three()
    {
        echo 'Hello three';
    }
    public function helloFive()
    {
        echo 'Hello five';
    }
}