<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Masters</title>
</head>
<body>
    <h1>Welcome to Crypto Masters</h1>
    <form action="convert.php" method="post">
        <label for="amount">Amount</label>
        <input type="text" name="amount">
        <label for="crypto">Cryptocurrency</label>
        <select name="crypto" id="crypto">
            <option>Bitcoin</option>
            <option>Ethereum</option>
        </select>
        <button type="submit">Convert</button>
    </form>
</body>
</html>
