<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
       if($initialAge<0) {
           $this->age = 0;
           print("Age is not valid, setting age to 0.". $this->age ."\n");
       }

       // global $T;
       // print($T);

    }
   public  function amIOld() {
            // Do some computations in here and print out the correct statement to the console 
       if($this->age < 13) {
           print("You are young.". $this->age ."\n");
       } else if($this->age >= 13 && $this->age <= 18) {
           print("You are a teenager.". $this->age ."\n");
       } else {
           print ("You are old.". $this->age ."\n");
       }
    }
   public  function yearPasses(){
          // Increment the age of the person in here
      $this->age = $this->age + 1;     
    }
}
