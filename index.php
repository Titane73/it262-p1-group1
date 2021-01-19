<?php 
// index.php

// add php here
// also add php in errors and results divs, 
//   current error/result text is dummy text for example
if($_SERVER['REQUEST_METHOD'] == 'POST'){//if satement for error statements
    if(empty($_POST['temp'])){
        $errorTemp = "Please give a starting temperature";
    } else{
       $temp = $_POST['temp'];
        
        $fToC = ($temp - 32) * (5 / 9); //Fahren to Celsius formula
        $cToK = $temp + 273.15; //Celsius to Kelvin formula
        $kToF = ($temp - 273.15) * (9 / 5) + 32; //Kelvin to Fahren formula

        $fToK; //Fahren to Kelvin formula
        $cToF; //Celsius to Fahren formula
        $ktoC; //Kelvin to Celsius formula
    }
    
    if(empty($_POST['StartScale'])){
        $errorStart = "Please choose a Starting Scale";
    }else{
        $StartScale = $_POST['StartScale'];  
    }
    
    if(empty($_POST['ConvScale'])){
        $errorConv = "Please choose a Conversion Scale";
    }else{
        $ConvScale = $_POST['ConvScale'];
    }
}//end error if

if($StartScale == "Fahrenheit"){ //if first scale is Fahren
    if($ConvScale == "Celsius"){
        $endTemp = $fToC; //converts to Celsius
    }else{
        $endTemp = $fToK;
    }
}else if($StartScale == "Celsius"){ //if first scale is Celsius
    if($ConvScale == "Fahrenheit"){
        $endTemp = $cToF;
    }else{
        $endTemp = $cToK;
    }
}else{ //if first scale is Kelvin
    if($ConvScale == "Fahrenheit"){
        $endTemp = $kToF;
    }else{
        $endTemp = $kToC;
    }
}

?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>IT 262 P1: Temperature Conversion - Group 1</title>
        <meta name="author" content="Kira Abell, Ti Hall, Christopher Yip, Dominick Nelson" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <link href="css/reset.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    
    <body>

        <div class="container">

            <div class="title">
                <h1>IT 262 P1: Temperature Conversion - Group 1</h1>
                <h2>Kira Abell, Ti Hall, Christopher Yip, Dominick Nelson</h2>
            </div>
    
            <form action="" method="POST">
    
                <label class="temp-num">
                    Temperature to convert: <input type="text" name="temp" value="" />
                </label>
    
                <div class="options">
                    <fieldset>
                        <legend>Starting Scale</legend>
    
                        <label><input type="radio" name="StartScale" value="Fahrenheit" /> Fahrenheit</label>
                        <label><input type="radio" name="StartScale" value="Celsius" /> Celsius</label>
                        <label><input type="radio" name="StartScale" value="Kelvin" /> Kelvin</label>
                            
                    </fieldset>
    
                    <fieldset>
                        <legend>Conversion Scale</legend>
    
                        <label><input type="radio" name="ConvScale" value="Fahrenheit" /> Fahrenheit</label>
                        <label><input type="radio" name="ConvScale" value="Celsius" /> Celsius</label>
                        <label><input type="radio" name="ConvScale" value="Kelvin" /> Kelvin</label>
    
                    </fieldset>
                </div>
    
                <input type="submit" value="Convert" />
    
            </form>
    
            <div class="errors">
                <?php echo '<p>'.$errorStart.'</p>' ;?>
                <?php echo '<p>'.$errorConv.'</p>' ;?>
                <?php echo '<p>'.$errorTemp.'</p>' ;?>
            </div>
    
            <div class="results">
                <?php echo '<p>Your starting value was: '.$temp.'</p>';?>
                <?php echo '<p>Your starting scale was: '.$StartScale.'</p>';?>
                <?php echo '<p>Your conversion scale was: '.$ConvScale.'</p>';?>
                <?php echo '<p>Your converted value is: '.$endTemp.'</p>';?>
            </div>

        </div> <!-- end container -->
    
    </body>
    
</html>