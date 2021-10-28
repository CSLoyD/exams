<?php
exit;
class Operation{
    public $result=array();

    function fibonacci(){
    
        if($_SERVER["REQUEST_METHOD"]=="POST"):
            //store the value from the input of the user
            $userInput = $_POST['numberInput'];

            //variables for fibonacci
            $prevNum = 1;
            $presentNum = 1; 
            $nextNum; 

            //perform operation
            for($counter=0; $counter < $userInput; $counter++){
                array_push($this->result,$prevNum);
                $nextNum = $prevNum + $presentNum;
                $prevNum = $presentNum; 
                $presentNum = $nextNum; 
            } 
        endif;

    }
    

    //prints the input
    function print(){
        foreach ($this->result as $value):
            echo " ".$value." ";
        endforeach;
    }
}
?>
