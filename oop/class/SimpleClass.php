<?php
class SimpleClass{
    public $var = 'a default value';
    public function displayValue(){
        echo $this->var;
    }
}

$res = new SimpleClass();
$res->displayValue();