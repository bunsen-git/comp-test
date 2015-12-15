<?php
namespace Root\BasicFunction;

class BasicClass
{
    private $name = null;
    function __construct($name){
        $this->name = $name;
    }
    
    function getFriend(){
        return 'bunSen';
    }
}

?>