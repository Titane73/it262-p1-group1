<!doctype html> 
<html>
<body>
    <form action="" method="post">
        <label>Enter temperature (digits only):</label><input type="number" name="temp"><br><!-- User input area for degrees -->
        
        <label>Choose starting scale:</label><br><!-- The origin scale radio buttons -->
        <input type="radio" name="originScale" value="Farenheit">
            <label for="Farenheit">Farenheitheit</label><br>
        
        <input type="radio" name="originScale" value="Celsius">
            <label for="Celsius">Celsius</label><br>
        
        <input type="radio" name="originScale" value="Kelvin">
            <label for="Kelvin">Kelvin</label><br>
        
        
        <label>Choose scale to convert to:</label><br><!-- The converted scale radio buttons -->
        <input type="radio" name="convScale" value="Farenheit">
            <label for="Farenheit">Farenheitheit</label><br>
        
        <input type="radio" name="convScale" value="Celsius">
            <label for="Celsius">Celsius</label><br>
        
        <input type="radio" name="convScale" value="Kelvin">
            <label for="Kelvin">Kelvin</label><br>
        
        <input type="submit" value="Submit"> 
    </form>
</body>
</html>


<?php
if(isset($_POST['originScale'], //makes sure the buttons are filled before continuing
         $_POST['convScale'],
         $_POST['temp'])
    ){ 
$originScale = $_POST['originScale'];//grabs the values from the user inputs
$convScale = $_POST['convScale'];
$temp = $_POST['temp'];

$endTemp;

    
$fToC = ($temp - 32) * (5 / 9); //Faren to Celsius formula
$cToK = $temp + 273.15; //Celsius to Kelvin formula
$kToF = ($temp - 273.15) * (9 / 5) + 32; //Kelvin to Faren formula

$fToK; //Faren to Kelvin formula
$cToF; //Celsius to Faren formula
$ktoC; //Kelvin to Celsius formula

if($originScale == "Farenheit"){ //if first scale is Faren
    if($convScale == "Celsius"){
        $endTemp = $fToC; //converts to Celsius
    }else{
        $endTemp = $fToK; //converts to Kelvin
    }
}else if($originScale == "Celsius"){ //if first scale is Celsius
    if($convScale == "Farenheit"){
        $endTemp = $cToF; //converts to Faren
    }else{
        $endTemp = $cToK; //converts to Kelvin
    }
}else{ //if first scale is Kelvin
    if($convScale == "Farenheit"){
        $endTemp = $kToF; //converts to Faren
    }else{
        $endTemp = $kToC; //converts to Celsius
    }
}
    
echo '<p>The temp was converted from '.$originScale.' to '.$convScale.' </p>'; //outputs all the degree info from the user inputs and conversions
echo '<p>'.$temp.' degrees '.$originScale.' equals '.$endTemp.' degrees '.$convScale.'.</p>';
}//end isset if
