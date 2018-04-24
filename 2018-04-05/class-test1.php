<?php
//class-test1.php

$myPerson = new Person('calvo', 'calvin', 1234);
//echo $myPerson->Pay;

echo '<pre>';
var_dump($myPerson);
echo '</pre>';



class Person{
    
    public $LastName = '';
    public $FirstName = '';
    public $Pay = 0;
    
    public function Person($LastName,$FirstName,$Pay){
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->Pay = $Pay;
        
        
    }//end constructor
}//end person class