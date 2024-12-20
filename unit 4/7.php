<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Electricity Bill Calculator</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="units">Enter the number of units consumed:</label>
                <input type="number" name="units" id="units" min="1" required>
            </div>
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
        function calculateBill($units) {
            $bill = 0;

            if ($units <= 50) {
                $bill = $units * 3.50;
            } elseif ($units <= 150) {
                $bill = (50 * 3.50) + (($units - 50) * 4.00);
            } elseif ($units <= 250) {
                $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
            } else {
                $bill = (50 * 3.50) + (100 * 4.00) + (150 * 5.20) + (($units - 250) * 6.50);
            }

            return $bill;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
            $units = $_POST["units"];
            $bill = calculateBill($units);
            echo "<div class='result'>Electricity bill for $units units is Rs. " . number_format($bill, 2) . "</div>";
        }
        ?>
    </div>
</body>
</html>