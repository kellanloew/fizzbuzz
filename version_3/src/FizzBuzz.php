<?php

class FizzBuzz
{
    public $reportArray;

    function __construct()
    {
        $this->reportArray = array(
            "fizz"      => 0,
            "buzz"      => 0,
            "fizzbuzz"  => 0,
            "lucky"     => 0,
            "integer"   => 0
        );
    }

    /*
     * allow user to run program from outside of class
     */
    public static function execute()
    {
        $fizz = new FizzBuzz();
        echo $fizz->program();
    }

    /*
     * For a given integer, run fizzbuzz up to that number
     * @int limit
     */
    public function program(int $limit = 100)
    {

        $returnString = "";
        //loop through the values 1 - limit value
        for($i = 1; $i <= $limit; $i++){
            
            //call the checkForFizzBuzz method
            $returnString .= $this->checkForFizzBuzz($i) . " ";
        }

        //report numbers for each type of input
        foreach($this->reportArray as $type => $value){
            $returnString .= "\n$type: $value";
        }
        return $returnString;
    }

    /*
     * For a given integer, returns the proper FizzBuzz string. Also increments the value for the corresponding report.
     * @int inputInt
     */
    public function checkForFizzBuzz(int $inputInt){
        
        $returnString = "";
        $reportArraykey = "";

        //check if value has "3" in it first, since this could be almost any number
        if(strpos($inputInt, "3") !== false){
            $reportArraykey = $returnString = "lucky";
        }
        //check if input is a multiple of 15 next, since 15 is a multiple of 5 and 3 also
        else if($inputInt % 15 == 0){
            $reportArraykey = $returnString = "fizzbuzz";
        }
        else if($inputInt % 5 == 0){
            $reportArraykey = $returnString = "buzz";
        }
        else if($inputInt % 3 == 0){
            $reportArraykey = $returnString = "fizz";
        }
        else{
            $returnString = $inputInt;
            //the array key here is simply "integer"
            $reportArraykey = "integer";
        }

        //increment the value associated with this return string for the report
        $this->reportArray[$reportArraykey]++;
        return $returnString;
    }
}

