<?php

class FizzBuzz
{
    public static function execute()
    {
        //instantiate new FizzBuzz to have access to its method
        $fizz = new FizzBuzz();

        //loop through the values 1 - 100
        for($i = 1; $i <= 100; $i++){
            
            //call the checkForFizzBuzz method
            echo $fizz->checkForFizzBuzz($i) . " ";
        }
    }

    /*
     * For a given, integer, returns the proper FizzBuzz combination
     * @int inputInt
     */
    public function checkForFizzBuzz(int $inputInt){
        
        //check if input is a multiple of 15 first, since 15 is a multiple of 5 and 3 also
        if($inputInt % 15 == 0){
            return "fizzbuzz";
        }
        else if($inputInt % 5 == 0){
            return "buzz";
        }
        else if($inputInt % 3 == 0){
            return "fizz";
        }
        else{
            return $inputInt;
        }
    }
}

