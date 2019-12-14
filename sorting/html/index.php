<!-- 



FINISHED FOR 30 min.


 -->
<?php
//add the php file
include_once '../php/index.php'; 
//make the operation
$initiate = new Sort();
$initiate-> arrange();
?>


<!DOCTYPE html>
<html>

<head>
    <style>

        #formCont{
            background-color:#ff551f;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #formCont form #inValue{
            padding: 10px;
            margin: 20px;
            border: 1px solid purple;
            width: 500px;
        }
        #formCont #submitBtn{
            border:none;
            padding: 25px;
            background-color: #ef5c2c;
        }
        #output{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f74a13;
            height:50px;
        }
    </style>
  <title>Third Project</title>
</head>

<body>
    <h1>Sorting</h1>
    <div id="formCont">
        <form method="POST" id="getVal">
            
            <label>Input numbers or letters to be sorted. Use spaces to separate value of array.</label>
            <input type="text" id="inValue" name="arVal">
            <input id="submitBtn" type="submit" value="Done">
        </form>
    </div>
    <div id="output"><span><?php $initiate->print() ?></span></div>
</body>
<script src="../js/jQueryv3.4.1.js"></script>
<script>
    $('#getVal').submit(function(){
        //validate if there is no input of words
        if($('#inValue').val()==""){
            alert("Please input words or characters");
        }
    });
    </script>
</html>
