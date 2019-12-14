<!-- 



FINISHED FOR 60 min.


 -->
 <pre>
<?php
//add the php file
include_once '../php/index.php'; 
//make the operation
$initiate = new Checker();
$initiate-> recuringCharacters();
?>
</pre>

<!DOCTYPE html>
<html>

<head>
    <style>

        #formCont{
            background-color:#008eff9e;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #formCont form #usInp{
            padding: 10px;
            margin: 20px;
            border: 1px solid purple;
            width: 100px;
        }
        #formCont #submitBtn{
            border:none;
            padding: 25px;
            background-color: #008efff2;
        }
        #output{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0089ff80;
            padding:10px;
        }
    </style>
  <title>Fifth Project</title>
</head>

<body>
    <h1>Combination</h1>
    <div id="formCont">
        <form method="POST" id="Usform">
            
            <label>Input numbers to be paired by 2. This will note if it is a sum of 8.</label>
            <input type="number" id="usInp" name="frmInp">
            <input id="submitBtn" type="submit" value="Done">
        </form>
    </div>
    <div id="output"><span><?php $initiate->print() ?></span></div>
</body>
<script src="../js/jQueryv3.4.1.js"></script>
<script>
    $('#Usform').submit(function(){
        //validate if there is no input of words
        if($('#usInp').val()==""){
            alert("Please input words or characters");
        }
    });
    </script>
</html>
