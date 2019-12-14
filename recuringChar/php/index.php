<?php
class Check{
    public $recuringChar;

    function saveRecuringChar($recur){
        //if there is recuring character store it to recuringChar
        foreach($recur as $key=>$val):
            //if the character repeated twice or more
            if($val>=2):
                $this->recuringChar=$key;
                break;
            endif;
        endforeach;
    }

    function recuringCharacters(){
        //store the word from input and lower case the input
        if( $_SERVER["REQUEST_METHOD"] == "POST" ):

            //gets the word from the user
            $check = $_POST['recChar'];
            
            //split into array
            $split = str_split($check);
            
            //check the recuring char
            $recur = array_count_values($split);

            $this->saveRecuringChar($recur);
        endif;

    }

    //prints the input
    function print(){
        if( $_SERVER["REQUEST_METHOD"] == "POST" ):
            if($this->recuringChar != NULL):
                echo "Recuring character is '".$this->recuringChar."'";
            else:
                echo "There is no recuring character";
            endif;
        endif;    
    }
}
?>