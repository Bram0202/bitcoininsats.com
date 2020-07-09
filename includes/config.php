<?php
  //requires "functions.php";


  // https://api.coindesk.com/v1/bpi/currentprice/EUR.json

  // Pakt de prijs uit de juiste JSON file van Coindesk.
  function linkToJson($url, $cur) {
    $fgc = file_get_contents($url);
    $json = json_decode($fgc, true);

    $price = $json["bpi"][$cur]["rate_float"];
    return $price;
  }
  $btcPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/btc.json", "BTC");
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
  $tryPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/try.json", "TRY");
  $vefPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/vef.json", "VEF");
  $irrPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/irr.json", "IRR");
  $xauPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/xau.json", "XAU");
  $xagPrice = linkToJson("https://api.coindesk.com/v1/bpi/currentprice/xag.json", "XAG");

  // MM-DD, YYYY UU-MM-SS UTC
  $url = "https://api.coindesk.com/v1/bpi/currentprice.json";
  $fgc = file_get_contents($url);
  $json = json_decode($fgc, true);
  $lastUpdated = $json["time"]["updated"];
?>
