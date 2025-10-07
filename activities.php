<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercises</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 40px auto;
            max-width: 800px;
            padding: 0 20px;
            line-height: 1.6;
        }
        h3 {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        p, .output {
            background: white;
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            font-size: 1.1em;
        }
        /* Optional: highlight some key parts */
        .highlight {
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    
    $name = "Ryan";
    $age = 20;
    $color = "Black";
    echo "<h3>1. Introduce Yourself</h3>";
    echo "<p class='output'>Hi, my name is <span class='highlight'>$name</span>, I am currently <span class='highlight'>$age</span> years old, and my favorite color is <span class='highlight'>$color</span>.</p>";
    
    
    $a = 14;
    $b = 7;
    echo "<h3>2. Simple Math</h3>";
    echo "<p class='output'>";
    echo "Sum: <span class='highlight'>" . ($a + $b) . "</span><br>";
    echo "Difference: <span class='highlight'>" . ($a - $b) . "</span><br>";
    echo "Product: <span class='highlight'>" . ($a * $b) . "</span><br>";
    echo "Quotient: <span class='highlight'>" . ($a / $b) . "</span><br>";
    echo "</p>";

    
    $length = 18;
    $width = 9;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "<h3>3. Area and Perimeter of a Rectangle</h3>";
    echo "<p class='output'>Area: <span class='highlight'>$area</span><br>";
    echo "Perimeter: <span class='highlight'>$perimeter</span></p>";

   
    $celsius = 32;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<h3>4. Temperature Converter</h3>";
    echo "<p class='output'>$celsius °C = <span class='highlight'>$fahrenheit</span> °F</p>";

    
    $x = 10;
    $y = 20;
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "<h3>5. Swapping Variables</h3>";
    echo "<p class='output'>After swapping: x = <span class='highlight'>$x</span>, y = <span class='highlight'>$y</span></p>";

    
    $basic_salary = 20000;
    $allowance = 5000;
    $deduction = 3000;
    $net_salary = $basic_salary + $allowance - $deduction;
    echo "<h3>6. Salary Calculator</h3>";
    echo "<p class='output'>Net Salary: <span class='highlight'>₱$net_salary</span></p>";

    
    $weight = 74;
    $height = 1.75;
    $bmi = $weight / ($height * $height);
    echo "<h3>7. BMI Calculator</h3>";
    echo "<p class='output'>BMI: <span class='highlight'>" . round($bmi, 2) . "</span></p>";

    
    $sentence = "Learning PHP is fun and easy!";
    echo "<h3>8. String Manipulation</h3>";
    echo "<p class='output'>Sentence: $sentence<br>";
    echo "Number of characters: <span class='highlight'>" . strlen($sentence) . "</span><br>";
    echo "Number of words: <span class='highlight'>" . str_word_count($sentence) . "</span><br>";
    echo "Uppercase: <span class='highlight'>" . strtoupper($sentence) . "</span><br>";
    echo "Lowercase: <span class='highlight'>" . strtolower($sentence) . "</span></p>";

    
    $balance = 10000;
    $deposit = 2000;
    $withdraw = 1500;
    $balance = $balance + $deposit - $withdraw;
    echo "<h3>9. Bank Account Simulation</h3>";
    echo "<p class='output'>Final Balance: <span class='highlight'>₱$balance</span></p>";

    
    $math = 85;
    $english = 90;
    $science = 88;
    $average = ($math + $english + $science) / 3;
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "<h3>10. Simple Grading System</h3>";
    echo "<p class='output'>Average: <span class='highlight'>" . round($average, 2) . "</span><br>";
    echo "Grade: <span class='highlight'>$grade</span></p>";

    
    $php_amount = 10000;
    $usd_rate = 0.017;
    $eur_rate = 0.016;
    $jpy_rate = 2.65;
    echo "<h3>11. Currency Converter</h3>";
    echo "<p class='output'>₱$php_amount in USD: <span class='highlight'>$" . round($php_amount * $usd_rate, 2) . "</span><br>";
    echo "₱$php_amount in EUR: <span class='highlight'>€" . round($php_amount * $eur_rate, 2) . "</span><br>";
    echo "₱$php_amount in JPY: <span class='highlight'>¥" . round($php_amount * $jpy_rate, 2) . "</span></p>";

    
    $distance = 200;
    $fuel_consumption = 10;
    $fuel_price = 70;
    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;
    echo "<h3>12. Travel Cost Estimator</h3>";
    echo "<p class='output'>Estimated Travel Cost: <span class='highlight'>₱" . round($travel_cost, 2) . "</span></p>";
    ?>
</body>
</html>
