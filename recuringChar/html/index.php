<!-- 



FINISHED FOR 55 min.


 -->
<?php
//add the php file
include_once '../php/index.php'; 
//make the operation
$initiate = new Check();
$initiate-> recuringCharacters();
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
        #formCont form #cheInp{
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
  <title>Fourth Project</title>
</head>

<body>
    <h1>The First Repeating Character</h1>
    <div id="formCont">
        <form method="POST" id="Usform">
            
            <label>Input numbers or letters to be checked.</label>
            <input type="text" id="cheInp" name="recChar">
            <input id="submitBtn" type="submit" value="Done">
        </form>
    </div>
    <div id="output"><span><?php $initiate->print() ?></span></div>
</body>
<script src="../js/jQueryv3.4.1.js"></script>
<script>
    $('#Usform').submit(function(){
        //validate if there is no input of words
        if($('#cheInp').val()==""){
            alert("Please input words or characters");
        }
    });
    </script>
</html>
