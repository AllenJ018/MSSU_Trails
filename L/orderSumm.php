<!DOCTYPE html>
<body>

<h1>Order Summary</h1>

<?php
function calculateTotalCost($selectedItems)
{
    // Prices for each type of light bulb
    $prices = [
        "fourRegular" => 2.39,
        "eightRegular" => 4.29,
        "fourLongLife" => 3.95,
        "eightLongLife" => 7.49,
    ];

    // Sales tax rate
    $salesTaxRate = 0.062;

    // Calculate subtotal
    $subtotal = 0;
    foreach ($selectedItems as $item) {
        if (isset($prices[$item])) {
            $subtotal += $prices[$item];
        }
    }

    // Calculate total cost with sales tax
    $totalCost = $subtotal * (1 + $salesTaxRate);

    return $totalCost;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedItems = isset($_POST["bulbType"]) ? $_POST["bulbType"] : [];
    $paymentMethod = isset($_POST["paymentMethod"]) ? $_POST["paymentMethod"] : "";



    echo "<table border='1'>";
    echo "<tr><th>Item</th><th>Quantity</th></tr>";

    foreach ($selectedItems as $item) {
        echo "<tr><td>$item</td><td>1</td></tr>";
    }

    echo "</table>";

    $totalCost = calculateTotalCost($selectedItems);
    echo "<p>Total Cost (including 6.2% sales tax): $" . number_format($totalCost, 2) . "</p>";


    echo "<p>Payment Method: $paymentMethod</p>";
}
?>

</body>
</html>
