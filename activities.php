<!DOCTYPE html>
<html>
<head>
    <title>PHP Activities with User Input</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #fff);
            margin: 0;
            padding: 0;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #1565c0;
            margin-top: 30px;
            text-shadow: 1px 1px 2px #bbb;
        }
        .container {
            width: 80%;
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 25px 35px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #1976d2;
            margin-bottom: 10px;
        }
        form {
            margin-bottom: 15px;
        }
        input[type=text], input[type=number] {
            width: 90%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }
        input[type=submit] {
            background: #1976d2;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type=submit]:hover {
            background: #0d47a1;
        }
        .output {
            background: #f1f8e9;
            border-left: 5px solid #8bc34a;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 8px;
            font-size: 15px;
        }
        hr {
            border: none;
            border-bottom: 1px solid #ddd;
            margin: 25px 0;
        }
    </style>
</head>
<body>

    <h2>🌟 PHP Activities with User Input 🌟</h2>

    <div class="container">

        
        <h3>1. Introduce Yourself</h3>
        <form method="POST">
            Name: <input type="text" name="name"><br>
            Age: <input type="number" name="age"><br>
            Favorite Color: <input type="text" name="color"><br>
            <input type="submit" name="intro" value="Submit">
        </form>
        <?php
        if (isset($_POST["intro"])) {
            $name = $_POST["name"];
            $age = $_POST["age"];
            $color = $_POST["color"];
            echo "<div class='output'>Hi, I'm <b>$name</b>, I am <b>$age</b> years old, and my favorite color is <b>$color</b>.</div>";
        }
        ?>
        <hr>

        
        <h3>2. Simple Math</h3>
        <form method="POST">
            Number A: <input type="number" name="a"><br>
            Number B: <input type="number" name="b"><br>
            <input type="submit" name="math" value="Calculate">
        </form>
        <?php
        if (isset($_POST["math"])) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            echo "<div class='output'>
                Sum: " . ($a + $b) . "<br>
                Difference: " . ($a - $b) . "<br>
                Product: " . ($a * $b) . "<br>
                Quotient: " . ($a / $b) . "
            </div>";
        }
        ?>
        <hr>

        
        <h3>3. Area and Perimeter of a Rectangle</h3>
        <form method="POST">
            Length: <input type="number" name="length"><br>
            Width: <input type="number" name="width"><br>
            <input type="submit" name="rectangle" value="Compute">
        </form>
        <?php
        if (isset($_POST["rectangle"])) {
            $length = $_POST["length"];
            $width = $_POST["width"];
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            echo "<div class='output'>
                Area: $area<br>
                Perimeter: $perimeter
            </div>";
        }
        ?>
        <hr>

        
        <h3>4. Temperature Converter</h3>
        <form method="POST">
            Celsius: <input type="number" name="celsius"><br>
            <input type="submit" name="temp" value="Convert">
        </form>
        <?php
        if (isset($_POST["temp"])) {
            $celsius = $_POST["celsius"];
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "<div class='output'>$celsius °C = $fahrenheit °F</div>";
        }
        ?>
        <hr>

        
        <h3>5. Swapping Variables</h3>
        <form method="POST">
            Value of X: <input type="number" name="x"><br>
            Value of Y: <input type="number" name="y"><br>
            <input type="submit" name="swap" value="Swap">
        </form>
        <?php
        if (isset($_POST["swap"])) {
            $x = $_POST["x"];
            $y = $_POST["y"];
            $temp = $x;
            $x = $y;
            $y = $temp;
            echo "<div class='output'>After swapping: x = $x, y = $y</div>";
        }
        ?>
        <hr>

        
        <h3>6. Salary Calculator</h3>
        <form method="POST">
            Basic Salary: <input type="number" name="basic"><br>
            Allowance: <input type="number" name="allowance"><br>
            Deduction: <input type="number" name="deduction"><br>
            <input type="submit" name="salary" value="Compute Salary">
        </form>
        <?php
        if (isset($_POST["salary"])) {
            $basic = $_POST["basic"];
            $allowance = $_POST["allowance"];
            $deduction = $_POST["deduction"];
            $net = $basic + $allowance - $deduction;
            echo "<div class='output'>Net Salary: ₱$net</div>";
        }
        ?>
        <hr>

        
        <h3>7. BMI Calculator</h3>
        <form method="POST">
            Weight (kg): <input type="number" step="0.01" name="weight"><br>
            Height (m): <input type="number" step="0.01" name="height"><br>
            <input type="submit" name="bmi" value="Calculate BMI">
        </form>
        <?php
        if (isset($_POST["bmi"])) {
            $weight = $_POST["weight"];
            $height = $_POST["height"];
            $bmi = $weight / ($height * $height);
            echo "<div class='output'>BMI: " . round($bmi, 2) . "</div>";
        }
        ?>
        <hr>

        
        <h3>8. String Manipulation</h3>
        <form method="POST">
            Enter a sentence: <input type="text" name="sentence"><br>
            <input type="submit" name="string" value="Analyze">
        </form>
        <?php
        if (isset($_POST["string"])) {
            $sentence = $_POST["sentence"];
            echo "<div class='output'>
                Sentence: $sentence<br>
                Number of characters: " . strlen($sentence) . "<br>
                Number of words: " . str_word_count($sentence) . "<br>
                Uppercase: " . strtoupper($sentence) . "<br>
                Lowercase: " . strtolower($sentence) . "
            </div>";
        }
        ?>
        <hr>

        
        <h3>9. Bank Account Simulation</h3>
        <form method="POST">
            Current Balance: <input type="number" name="balance"><br>
            Deposit: <input type="number" name="deposit"><br>
            Withdraw: <input type="number" name="withdraw"><br>
            <input type="submit" name="bank" value="Update Balance">
        </form>
        <?php
        if (isset($_POST["bank"])) {
            $balance = $_POST["balance"];
            $deposit = $_POST["deposit"];
            $withdraw = $_POST["withdraw"];
            $balance = $balance + $deposit - $withdraw;
            echo "<div class='output'>Final Balance: ₱$balance</div>";
        }
        ?>
        <hr>

        
        <h3>10. Simple Grading System</h3>
        <form method="POST">
            Math: <input type="number" name="math"><br>
            English: <input type="number" name="english"><br>
            Science: <input type="number" name="science"><br>
            <input type="submit" name="grade" value="Compute Grade">
        </form>
        <?php
        if (isset($_POST["grade"])) {
            $math = $_POST["math"];
            $english = $_POST["english"];
            $science = $_POST["science"];
            $average = ($math + $english + $science) / 3;
            if ($average >= 90) $grade = "A";
            elseif ($average >= 80) $grade = "B";
            elseif ($average >= 70) $grade = "C";
            elseif ($average >= 60) $grade = "D";
            else $grade = "F";
            echo "<div class='output'>
                Average: " . round($average, 2) . "<br>
                Grade: $grade
            </div>";
        }
        ?>
        <hr>

        
        <h3>11. Currency Converter</h3>
        <form method="POST">
            PHP Amount: <input type="number" name="php_amount"><br>
            <input type="submit" name="currency" value="Convert">
        </form>
        <?php
        if (isset($_POST["currency"])) {
            $php_amount = $_POST["php_amount"];
            $usd_rate = 0.017;
            $eur_rate = 0.016;
            $jpy_rate = 2.65;
            echo "<div class='output'>
                ₱$php_amount in USD: $" . round($php_amount * $usd_rate, 2) . "<br>
                ₱$php_amount in EUR: €" . round($php_amount * $eur_rate, 2) . "<br>
                ₱$php_amount in JPY: ¥" . round($php_amount * $jpy_rate, 2) . "
            </div>";
        }
        ?>
        <hr>

        
        <h3>12. Travel Cost Estimator</h3>
        <form method="POST">
            Distance (km): <input type="number" name="distance"><br>
            Fuel Consumption (km per liter): <input type="number" name="fuel_consumption"><br>
            Fuel Price per Liter: <input type="number" name="fuel_price"><br>
            <input type="submit" name="travel" value="Estimate Cost">
        </form>
        <?php
        if (isset($_POST["travel"])) {
            $distance = $_POST["distance"];
            $fuel_consumption = $_POST["fuel_consumption"];
            $fuel_price = $_POST["fuel_price"];
            $fuel_needed = $distance / $fuel_consumption;
            $travel_cost = $fuel_needed * $fuel_price;
            echo "<div class='output'>Estimated Travel Cost: ₱" . round($travel_cost, 2) . "</div>";
        }
        ?>

    </div>
</body>
</html>
