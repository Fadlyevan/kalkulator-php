
<!DOCTYPE html>
<html>

<head>
    <title>BMI Calculator | FADLYY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="form mb-2">
    <h2>BMI Calculator | FADLYY </h2>
</div>

<form class="form" method="GET">
    <div class="form-group">
        <label class="level" for="weight">Weight in (kg):</label>
        <input class="input" type="text" name="weight" id="weight" placeholder="50">
    </div><br>

    <div class="form-group">
        <label class="level" for="height">Height in (m): </label>
        <input class="input" type="text" name="height" id="height" placeholder="1 feet = 0.3048">
    </div><br>

    <div class="form-group">
        <input class="button b1" type="submit" name="calculate" value="Calculate">
        <input class="button" type="submit" name="clear" value="Clear">
    </div>
</form>

<div class="form mt-2 <?php if(isset($_GET['clear'])) { echo 'hide'; }  ?>">
    <?php
    if (isset($_GET['calculate'])) { // var 1
        $weight = $_GET['weight']; // var 2
        $height = $_GET['height']; // var 3
        // /* Shajedul Hassan Arman */
        if(empty($weight) && empty($height)) {
            echo '<span class="error-text">Please inset both value in Number </span>';
        }else {

            function calculateBMI($weight,$height) {
                $calculateBMI = $weight/($height*$height);
                return $calculateBMI;
            }

            $calculateBMI = calculateBMI($weight,$height);
            if ($calculateBMI <= 18.5) {
                $output = "Under Weight";
            } else if ($calculateBMI > 18.5 AND $calculateBMI<=25 ) {
                $output = "Normal Weight";
            } else if ($calculateBMI > 26 AND $calculateBMI<=30) {
                $output = "Over Weight";
            } else if ($calculateBMI > 31 AND $calculateBMI<=40) {
                $output = "OBESE";
            } else {
                $output = "Invalid";
            }
            echo "Your Weight : " . $weight . "</br> Your height : " .$height ;
            echo "</br></br>Your BMI is : " . $calculateBMI . "</br> And you are : " .$output ;
        }
    }

    ?>
</div>

</body>
</html>