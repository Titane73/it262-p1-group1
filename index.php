<?php 
// index.php

    // add php here
    // also add php in errors and results divs, 
    //   current error/result text is dummy text for example

    // ------------->  Dominick's formulas 
            // $FtoC = ($temp - 32) * (5 / 9); //Fahrenheit to Celsius formula
            // $CtoK = $temp + 273.15; //Celsius to Kelvin formula
            // $KtoF = ($temp - 273.15) * (9 / 5) + 32; //Kelvin to Fahrenheit formula

    // -------------> Christopher's Formulas here


    // ************* Variables *************

    $tempConversion = "";
    $errorMsg = "";
    $userTemp = 0.00;
    $userScale = "";
    $endScale = "";
    $newTemp = 0.00;


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // IF server has a request method of POST, do the following:

        // ************* Error Checking *************

        // First checks if userTemp is an empty string. If so, appends msg to errorMsg.
        // if(empty($_POST['userTemp'])){
        //     $errorMsg .= "<p>Please enter a starting temperature.</p>";
        // }else{
        //     if (is_numeric($_POST['userTemp']) == FALSE) {
        //         $errorMsg .= "<p>Alphabetical characters are not allowed. <br>Please enter a number.</p>";
        //     }else {
        //         $userTemp = $_POST['userTemp'];
        //     }
        // }

        // // Checks if Starscel has been set. If not, appends msg to errorMsg.
        // if(empty($_POST['StartScale'])){
        //     $errorMsg .= "<p>Please select a starting scale.</p>";
        // }else{
        //     $StartScale = $_POST['StartScale'];
        // }

        // // Checks if ConvScale has been set. If not, appends msg to errorMsg.
        // if(empty($_POST['ConvScale'])){
        //     $errorMsg .= "<p>Please choose the conversion scale.</p>";
        // }else{
        //     $ConvScale = $_POST['ConvScale'];
        // }


        if( empty($_POST['userTemp']) ){
            $errorMsg .= "<p>Please enter a starting temperature.</p>";
        }
        if( empty($_POST['StartScale']) ) {
            $errorMsg .= "<p>Please select a starting scale.</p>";
        }
        if( empty($_POST['ConvScale']) ) {
            $errorMsg .= "<p>Please choose the conversion scale.</p>";
        }
        // if( $_POST['StartScale'] == $_POST['ConvScale'] ) {
        //     $errorMsg .= "<p>The starting and conversion scales cannot be the same. Please, try again.</p>";
        // }
        elseif( isset(
            // IF all the above errors work out, do the following:

            $_POST['userTemp'],
            $_POST['StartScale'],
            $_POST['ConvScale']) ) {
                // IF all of these are set, do the following:

                if( is_numeric($_POST['userTemp']) ) {

                    // ************* CONVERSIONS *************

                    $userTemp = $_POST['userTemp'];

                    // Fahrenheit to Celsius
                    if ($_POST['StartScale'] == 'StartF' && $_POST['ConvScale'] == 'ConvC') {
                        $userScale = "Fahrenheit";
                        $endScale = "Celsius";
                        $newTemp = (($userTemp - 32)* (5/9));
                    } 

                    // Fahrenheit to Kelvin
                    if ($_POST['StartScale'] == 'StartF' && $_POST['ConvScale'] == 'ConvK') {
                        $userScale = "Fahrenheit";
                        $endScale = "Kelvin";
                        $newTemp = (($userTemp - 32)* (5/9) + 273.15);
                    } 

                    // Celsius to Fahrenheit
                    if ($_POST['StartScale'] == 'StartC' && $_POST['ConvScale'] == 'ConvF') {
                        $userScale = "Celsius";
                        $endScale = "Fahrenheit";
                        $newTemp = (($userTemp * 9/5) + 32);
                    } 

                    // Celsius to Kelvin
                    if ($_POST['StartScale'] == 'StartC' && $_POST['ConvScale'] == 'ConvK') {
                        $userScale = "Celsius";
                        $endScale = "Kelvin";
                        $newTemp = ($userTemp + 273.15);  
                    } 

                    // Kelvin to Fahrenheit
                    if ($_POST['StartScale'] == 'StartK' && $_POST['ConvScale'] == 'ConvF') {
                        $userScale = "Kelvin";
                        $endScale = "Fahrenheit";
                        $newTemp = (($userTemp - 273.15)* (9/5) + 32);
                    } 

                    // Kelvin to Celsius
                    if ($_POST['StartScale'] == 'StartK' && $_POST['ConvScale'] == 'ConvC') {
                        $userScale = "Kelvin";
                        $endScale = "Celsius";
                        $newTemp = ($userTemp - 273.15);
                    } 

                } else {
                    $errorMsg .= "<p>Alphabetical characters are not allowed. <br>Please enter a number.</p>";
                } // end if

            } // end elseif

    } // end server

?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>IT 262 P1: Temperature Conversion - Group 1</title>
        <meta name="author" content="Kira Abell, Ti Hall, Christopher Yip, Dominick Nelson" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>

        <div class="container">

            <div class="title">
                <h1>IT 262 P1: Temperature Conversion - Group 1</h1>
                <h2>Kira Abell, Ti Hall, Christopher Yip, Dominick Nelson</h2>
            </div>
    
            <form action="" method="POST">
    
                <label class="temp-num">
                    Temperature to convert: <input type="text" name="userTemp" value="" />
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

                <!-- <input type="submit" value="Convert" />
                <p class="reset"><a href="">Reset</a></p> -->

                <div class="center">
                    <button type="submit" class="button">Convert</button>
                    <button type="button" class="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
                </div>
        
            </form>
    
            <div class="errors">
                <?php 
                    if ($errorMsg != "") {
                        echo "<p>Error, Will Robinson! Error!</p>";
                        echo $errorMsg;
                    }
                ?>
                
            </div>
    
            <div class="results">
                <p>The initial temperature was <br> <?=number_format($userTemp, 2)?> <?=$userScale?>.</p>
                <p>The new temperature is <br> <?=number_format($newTemp, 2)?> <?=$endScale?>.</p>

            </div>

        </div> <!-- end container -->
    
    </body>
    
</html>