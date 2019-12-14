<!-- 



FINISHED FOR 1hr.


 -->
<?php
//add the php file
include_once '../php/index.php'; 
//make the operation
$test = new Operation();
$test-> fibonacci();
?>


<!DOCTYPE html>
<html>

<head>
    <style>

        #fibForm{
            background-color:#a8ca42;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #fibForm #num{
            padding: 10px;
            margin: 20px;
            border: 1px solid green;
            width: 100px;
        }
        #fibForm #submitBtn{
            border:none;
            padding: 25px;
        }
        #output{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #cbe678;
            height:50px;
        }
    </style>
  <title>Second Project</title>
</head>

<body>
    <h1>Fibonacci Generator</h1>
    <div id="formCont">
        <form method="POST" id="fibForm">
            <label>Input count of Fibonacci to generate </label><input type="number" id="num" name="numberInput">
            <input id="submitBtn" type="submit" value="Done">
        </form>
    </div>
    <div id="output"><span><?php $test->print() ?></span></div>
</body>
<script src="../js/jQueryv3.4.1.js"></script>
<script>
    $('#fibForm').submit(function(){
        
        //validate if there is no input of number
        if($('#num').val()==""){
            alert("Please input number.");
        }
    });
    </script>
</html>
