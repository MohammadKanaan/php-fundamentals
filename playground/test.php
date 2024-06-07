<?php
top:
echo "Hello World in PHP!\n";
$name = "John";
$year = 2024;
$boolean = true;
echo $name;

// goto top;

$var = "lol";
$$var = "rofl";
echo $lol;

function testfun()
{
    echo "hello from the function";
}
function calculateTax(float $price, float $tax)
{
    return $price * $tax;
}
calculateTax(100, 0.1);
