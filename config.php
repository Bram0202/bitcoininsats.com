<?php
//require "functions.php";


// Russian Ruble link: https://api.coindesk.com/v1/bpi/currentprice/RUB.json

// Pakt de prijs uit de juiste JSON file van Coindesk.
function linkToJson($url, $cur) {
  $fgc = file_get_contents($url);
  $json = json_decode($fgc, true);

  $price = $json["bpi"][$cur]["rate_float"];
  return $price;
}

$eurPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice.json", "EUR");
$usdPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice.json", "USD");
$gbpPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice.json", "GBP");
$jpyPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/jpy.json", "JPY");
$cnyPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/cny.json", "CNY");
$chfPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/chf.json", "CHF");
$audPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/aud.json", "AUD");
$rubPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/rub.json", "RUB");
$cadPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/cad.json", "CAD");
$dkkPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/dkk.json", "DKK");
$nokPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/nok.json", "NOK");
$sekPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/sek.json", "SEK");

// Laatste keer dat de prijs is ge-updated.
// MM-DD, YYYY UU-MM-SS UTC
$url = "https://api.coindesk.com/v1/bpi/currentprice.json";
$fgc = file_get_contents($url);
$json = json_decode($fgc, true);

$lastUpdated = $json["time"]["updated"];


?>
