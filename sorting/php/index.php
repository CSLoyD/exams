<?php
class Sort{
    public $sortedAr=array();

    function arrange(){
        //store the word from input and lower case the input
        if( $_SERVER["REQUEST_METHOD"] == "POST" ):

            //gets the word from the user
            $toSort = $_POST['arVal'];
            //explode and sort
            $sepVal = explode(" ",$toSort);
            $sorted = sort($sepVal);

            foreach($sepVal as $val):
                array_push($this->sortedAr, $val);
            endforeach; 
        endif;

    }

    //prints the input
    function print(){
        foreach($this->sortedAr as $val):
            echo $val." ";
        endforeach;
    }
}
?>