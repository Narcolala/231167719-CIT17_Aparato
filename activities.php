<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercises</title>
</head>
<body>
    <?php
    
    $name = "Ryan";
    $age = 20;
    $color = "Black";
    echo "<h3>1. Introduce Yourself</h3>";
    echo "Hi, I'm $name, I am $age years old, and my favorite color is $color.<br><br>";

    
    $a = 12;
    $b = 4;
    echo "<h3>2. Simple Math</h3>";
    echo "Sum: " . ($a + $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";
    echo "Product: " . ($a * $b) . "<br>";
    echo "Quotient: " . ($a / $b) . "<br><br>";

    
    $length = 10;
    $width = 5;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "<h3>3. Area and Perimeter of a Rectangle</h3>";
    echo "Area: $area<br>";
    echo "Perimeter: $perimeter<br><br>";

   
    $celsius = 30;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<h3>4. Temperature Converter</h3>";
    echo "$celsius °C = $fahrenheit °F<br><br>";

    
    $x = 5;
    $y = 10;
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "<h3>5. Swapping Variables</h3>";
    echo "After swapping: x = $x, y = $y<br><br>";

    
    $basic_salary = 20000;
    $allowance = 5000;
    $deduction = 3000;
    $net_salary = $basic_salary + $allowance - $deduction;
    echo "<h3>6. Salary Calculator</h3>";
    echo "Net Salary: ₱$net_salary<br><br>";

    
    $weight = 68;
    $height = 1.75;
    $bmi = $weight / ($height * $height);
    echo "<h3>7. BMI Calculator</h3>";
    echo "BMI: " . round($bmi, 2) . "<br><br>";

    
    $sentence = "Learning PHP is fun and easy!";
    echo "<h3>8. String Manipulation</h3>";
    echo "Sentence: $sentence<br>";
    echo "Number of characters: " . strlen($sentence) . "<br>";
    echo "Number of words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence) . "<br><br>";

    
    $balance = 10000;
    $deposit = 2000;
    $withdraw = 1500;
    $balance = $balance + $deposit - $withdraw;
    echo "<h3>9. Bank Account Simulation</h3>";
    echo "Final Balance: ₱$balance<br><br>";

    
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
    echo "Average: " . round($average, 2) . "<br>";
    echo "Grade: $grade<br><br>";

    
    $php_amount = 1000;
    $usd_rate = 0.017;
    $eur_rate = 0.016;
    $jpy_rate = 2.65;
    echo "<h3>11. Currency Converter</h3>";
    echo "₱$php_amount in USD: $" . round($php_amount * $usd_rate, 2) . "<br>";
    echo "₱$php_amount in EUR: €" . round($php_amount * $eur_rate, 2) . "<br>";
    echo "₱$php_amount in JPY: ¥" . round($php_amount * $jpy_rate, 2) . "<br><br>";

    
    $distance = 200;
    $fuel_consumption = 10;
    $fuel_price = 70;
    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;
    echo "<h3>12. Travel Cost Estimator</h3>";
    echo "Estimated Travel Cost: ₱" . round($travel_cost, 2) . "<br>";
    ?>
</body>
</html>
