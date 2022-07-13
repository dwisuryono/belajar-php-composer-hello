<?php 

namespace DwiSuryono\Belajar;

class Customer {

    public function __construct(private string $name)
    {
        
    }

    public function sayHello($name)
    {
        echo "Hello $name, my name is $this->name";
    }

}

?>