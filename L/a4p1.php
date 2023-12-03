<!DOCTYPE html>
<body>

<h1>Light Bulb Order Form</h1>

<form action="#" method="post">

    <label for="userName">Name:</label>
    <input type="text" id="userName" name="userName">

    <br>
    <label>
        <input type="checkbox" name="bulbType[]" value="fourRegular"> 4 25-watt light bulbs - $2.39
    </label>
    <br>
    
    <label>
        <input type="checkbox" name="bulbType[]" value="eightRegular"> 8 25-watt light bulbs - $4.29
    </label>
    <br>
    
    <label>
        <input type="checkbox" name="bulbType[]" value="fourLongLife"> 4 25-watt long-life light bulbs - $3.95
    </label>
    <br>
    
    <label>
        <input type="checkbox" name="bulbType[]" value="eightLongLife"> 8 25-watt long-life light bulbs - $7.49
    </label>
    <br>
    <p>Select Payment Method:</p>
    
    <label>
        <input type="radio" name="paymentMethod" value="visa"> Visa
    </label>
    <br>
    
    <label>
        <input type="radio" name="paymentMethod" value="masterCard"> Master Card
    </label>
    <br>
    
    <label>
        <input type="radio" name="paymentMethod" value="discover"> Discover
    </label>
    <br>
    <input type="submit" value="Submit">

</form>

<?php
$bulbs = [
    "fourRegular" => [
        "price" => 2.39,
        "description" => "4 25-watt light bulbs",
    ],
    "eightRegular" => [
        "price" => 4.29,
        "description" => "8 25-watt light bulbs",
    ],
    "fourLongLife" => [
        "price" => 3.95,
        "description" => "4 25-watt long-life light bulbs",
    ],
    "eightLongLife" => [
        "price" => 7.49,
        "description" => "8 25-watt long-life light bulbs",
    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBulbTypes = isset($_POST["bulbType"]) ? $_POST["bulbType"] : [];
    $salesTaxRate = 0.062;
    if (!empty($selectedBulbTypes)) {
        $subtotal = 0;
        echo "<table><tr><th>You ordered</th></tr>";
        foreach ($selectedBulbTypes as $bulbType) {
            if (isset($bulbs[$bulbType])) {
                $subtotal += $bulbs[$bulbType]["price"];
                echo "<tr><td>" . $bulbs[$bulbType]["description"] . "</td></tr>";
            }
        }
        echo "</table>";

        $totalCost = $subtotal * (1 + $salesTaxRate);

        echo "<p>Total Cost (including 6.2% sales tax): $" . number_format($totalCost, 2) . "</p>";
    }
}
?>

</body>
</html>
