<?php
class Operation{
    public $word;
    function reverse(){
        //store the word from input and lower case the input
        if( $_SERVER["REQUEST_METHOD"] == "POST" ):
            $inputWord = strtolower($_POST['word']);
            //separate the words with spaces
            $sepWord= explode(" ",$inputWord);
            //reverse their positions from array
            $revIndex=array_reverse($sepWord);
            //connect the index value of array
            $conIndex = implode(" ",$revIndex);
            
            //store to the $word and uppercase the first Character 
            return ($this->word = ucfirst($conIndex));
        endif;

    }

    //prints the input
    function print(){
        echo $this->word;
    }
}
?>