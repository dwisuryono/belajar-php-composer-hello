<?php 

namespace DwiSuryono\Belajar;

class Customer {

    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name = "Guest")
    {
        echo "Hello $name, my name is $this->name";
    }

}

?>