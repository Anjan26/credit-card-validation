<?php
session_start();
?>
<html>
    <head>
        <style>
            body{
                background-image: url("image.jpg");
                background-size: cover;
            }
           #box{
                width:200px;
                padding: 50px;
                margin: auto;
                margin-top: 10px;
                background-color: white;
                border-radius: 10px;
             }
        </style>
      
    </head>
    <body>
    <center>
  
    <h1>Card Validation</h1>
    <form method="post">
    <div id="box">
    Enter your Card Number <input name="cardNumber" type='text'require ></br></br>
    
    <input type="submit" value="Submit" name="submit"/>
    </div>
    <?php 
        if(isset($_POST['submit'])){

            $number = $_POST['cardNumber'];
            if(!preg_match("/^([0-9])$/",$number)){

                if(strlen($number) == 16){
                    // echo "<h2 style='color: green;'> Detected credit card number is valid </h2>";
                    header('Location: b.php');
                    echo "<h2 style='color: green;'> Detected credit card number is valid </h2>";
                }
                else{
                    echo " <h2 style='color: red;'> This credit card number is invalid </h2>"; 
                    }

            }  
            else{
                echo " <h2 style='color: red;'> This credit card number is invalid </h2>"; 
            }
         }

           
?>
</form>

    </center>

    </body>
</html>