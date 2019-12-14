<?php
class Checker{
    public $combination=array();

    function  recuringCharacters(){
        //store the word from input and lower case the input
        if( $_SERVER["REQUEST_METHOD"] == "POST" ):
            //get from inout of user
            $userInp = $_POST['frmInp'];
            //split and combine
            $split=str_split($userInp);
            
            //store it in a multidimensional array for easy pairing
            //pair the arrays             
            $newArrayElementIndex = 0;

            for( $newArrayIndex = 0 ;  $newArrayIndex < count( $split ) ; $newArrayIndex++ ):
                for( $newArrayElement = 0 ; $newArrayElement < count( $split ) ; $newArrayElement++ ):
                    $newArraySecondElement = $newArrayElement + 1 ;
                    if( array_key_exists( $newArraySecondElement , $split ) && $newArrayIndex < $newArraySecondElement ):
                        $this->combination[ $newArrayElementIndex ] = array( $split[ $newArrayIndex ] ,  $split[ $newArrayElement + 1 ] );
                        $newArrayElementIndex++;
                    endif;
                endfor;
            endfor;
        endif;
        
    }

    function print(){
        foreach($this->combination as $val):
            $sum=$val[0]+$val[1];
            
            if($sum==8):
                echo $val[0]."  ".$val[1];
                echo " (sum is 8)<br> ";
            else:
                echo $val[0]."  ".$val[1]."<br>";
            endif;
        endforeach;
    }
}
?>