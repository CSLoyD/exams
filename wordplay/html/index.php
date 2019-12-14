<!-- 


Von Wilhelm Guiang
FINISHED FOR 50 min.


 -->
<?php
//add the php file
include_once '../php/index.php'; 
//make the operation
$initiate = new Operation();
$initiate-> reverse();
?>


<!DOCTYPE html>
<html>

<head>
    <style>

        #formCont{
            background-color:#cc77da;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #formCont form #word{
            padding: 10px;
            margin: 20px;
            border: 1px solid purple;
            width: 500px;
        }
        #formCont #submitBtn{
            border:none;
            padding: 25px;
        }
        #output{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #c63ddc;
            height:50px;
        }
    </style>
  <title>Project One</title>
</head>

<body>
    <h1>Word Play</h1>
    <div id="formCont">
        <form method="POST" id="getWord">
            <input type="text" id="word" name="word" placeholder="Input words to be written backwards.">
            <input id="submitBtn" type="submit" value="Done">
        </form>
    </div>
    <div id="output"><span><?php $initiate->print() ?></span></div>
</body>
<script src="../js/jQueryv3.4.1.js"></script>
<script>
    $('#getWord').submit(function(){
        //validate if there is no input of words
        if($('#word').val()==""){
            alert("Please input words or characters");
        }
    });
    </script>
</html>
