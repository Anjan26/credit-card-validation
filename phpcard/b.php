<?php 
function CCValidate($type, $cNum) {
    switch ($type) {
    case "American":
        $pattern = "/^([1111]{4})([0-9]{12})$/";//American Express 
		return (preg_match($pattern,$cNum)) ? true : false; 
        break;
    case "RuPay":
        $pattern = "/^([2222]{4})([0-9]{12})$/";//RuPay Club 
		return (preg_match($pattern,$cNum)) ? true : false;
        break;
    case "Discover":
        $pattern = "/^([3333]{4})([0-9]{12})$/";//Discover Card 
		return (preg_match($pattern,$cNum)) ? true : false;
        break;
    case "Master":
        $pattern = "/^([4444]{4})([0-9]{12})$/";//Mastercard 
		return (preg_match($pattern,$cNum)) ? true : false;
        break;
    case "Visa":
        $pattern = "/^([5555]{4})([0-9]{12})$/";//Visa 
		return (preg_match($pattern,$cNum)) ? true : false; 
        break;               
   }
} 
?>

 <html>
     <head>
         <style>
             body{
                background-image: url("image4.jpg");
                background-position: center;
                background-size: cover;
            }
            div{
                width:400px;
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
             <div>
        <form action="" method="post">
        <select name="type">
           <option value=""></option>
            <option value="American">American Express</option>
            <option value="RuPay">RuPay</option>
            <option value="Discover">Discover</option>
            <option value="Master">Master Card</option>
            <option value="Visa">Visa</option>
        </select>
        <input type="text" name="cNum">
        <button type="submit" name="submit">Submit</button>
        </form>
        
         
<?php
  if(isset($_REQUEST) && !empty($_REQUEST)) {
  	echo (CCValidate($_REQUEST['type'], $_REQUEST['cNum'])) ? "<h3>Credit Card Valid.</h3>" : "<h3>Credit Card Invalid, Please check again..!!</h3>";
  }
?>
</div>
        </center>
    </body>
</html>