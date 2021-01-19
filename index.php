<?php 
// index.php

// add php here
// also add php in errors and results divs, 
//   current error/result text is dummy text for example
        $fToC = ($temp - 32) * (5 / 9); //Fahren to Celsius formula
        $cToK = $temp + 273.15; //Celsius to Kelvin formula
        $kToF = ($temp - 273.15) * (9 / 5) + 32; //Kelvin to Fahren formula


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
    
                        <label><input type="radio" name="StartScale" value="StartF" /> Fahrenheit</label>
                        <label><input type="radio" name="StartScale" value="StartC" /> Celsius</label>
                        <label><input type="radio" name="StartScale" value="StartK" /> Kelvin</label>
                            
                    </fieldset>
    
                    <fieldset>
                        <legend>Conversion Scale</legend>
    
                        <label><input type="radio" name="ConvScale" value="ConvF" /> Fahrenheit</label>
                        <label><input type="radio" name="ConvScale" value="ConvC" /> Celsius</label>
                        <label><input type="radio" name="ConvScale" value="ConvK" /> Kelvin</label>
    
                    </fieldset>
                </div>
    
                <input type="submit" value="Convert" />
    
            </form>
    
            <div class="errors">
                <p>Error, Will Robinson! Error!</p>
            </div>
    
            <div class="results">
                <p>Your starting value was: 32</p>
                <p>Your starting scale was: Fahrenheit</p>
                <p>Your conversion scale was: Celsius</p>
                <p>Your converted value is: 0</p>
            </div>

        </div> <!-- end container -->
    
    </body>
    
</html>