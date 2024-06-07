<?php
class CryptoConverter
{
    public string $currency;
    public float $amount;

    public function __construct(string $currency, float $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function convert(float $value = 1): float | bool
    {
        $code = $this->currency;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);
        if ($json != false) {
            $data = json_decode($json);
            $price = $data->last;
            // echo "The price of $code is $price USD";
            return $value * $price;
        }
        return false;
    }
}
