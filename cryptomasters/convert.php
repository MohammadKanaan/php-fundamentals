<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversion Results</h1>

    <?php
require_once 'classes/converter.php';
if (isset($_POST['amount']) && isset($_POST['crypto'])) {
    $amount = $_POST['amount'];
    $crypt = $_POST['crypto'];
    $converter = new CryptoConverter($crypt, $amount);
    $dollar = $converter->convert($amount);
    echo "<p>$amount $crypt is equal to $dollar USD</p>";
} else {
    echo "<h2>Please enter an amount and select a cryptocurrency</h2>";
}

?>
</body>
</html>
