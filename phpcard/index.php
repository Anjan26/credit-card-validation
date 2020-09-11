<?php 
function CCValidate($type, $cNum) {
    switch ($type) {
    case "American":
        $pattern = "/^([34|37]{2})([0-9]{13})$/";//American Express 340000000000009
		return (preg_match($pattern,$cNum)) ? true : false; 
        break;
    case "Dinners":
        $pattern = "/^([30|36|38]{2})([0-9]{12})$/";//Dinner's Club 38520000023237
		return (preg_match($pattern,$cNum)) ? true : false;
        break;
    case "Discover":
        $pattern = "/^([6011]{4})([0-9]{12})$/";//Discover Card 6011000000000004
		return (preg_match($pattern,$cNum)) ? true : false;
        break;
    case "Master":
        $pattern = "/^([51|52|53|54|55]{2})([0-9]{14})$/";//Mastercard 5500000000000004
		return (preg_match($pattern,$cNum)) ? true : false;
        break;
    case "Visa":
        $pattern = "/^([4]{1})([0-9]{12,15})$/";//Visa 4111111111111111
		return (preg_match($pattern,$cNum)) ? true : false; 
        break;               
   }
} 
?>
 
<?php
  if(isset($_REQUEST) && !empty($_REQUEST)) {
  	echo (CCValidate($_REQUEST['type'], $_REQUEST['cNum'])) ? "<h3>Credit Card Valid.</h3>" : "<h3>Credit Card Invalid, Please check again..!!</h3>";
  }
?>
 <html>
     <body>
<form action="" method="post">
<select name="type">
<option value="American">American Express</option>
<option value="Dinners">Diner's Club</option>
<option value="Discover">Discover</option>
<option value="Master">Master Card</option>
<option value="Visa">Visa</option>
</select>
<input type="text" name="cNum">
<button type="submit">Submit</button>
</form>
</body>
 </html>