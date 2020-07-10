<?php
  function getPrice($ticker) {
    $url = "https://api.coindesk.com/v1/bpi/currentprice/".$ticker.".json";

    $fgc = file_get_contents($url);
    $json = json_decode($fgc, true);

    $price = $json["bpi"][$ticker]["rate_float"];
    return $price;
  }

  /*
  The math behind the convertion of the Coindesk data.
  For example:
  1 bitcoin = $3500
  1 satoshi = (3500/100.000.000)
  $1 = 1/000035
  */
  function priceInSatoshi($price) {
    $tempPrice = $price / 100000000;
    $priceInSats = 1 / $tempPrice;

    if (round((double) $priceInSats) > 0) {
      return round((double) $priceInSats);
    } elseif (round((double) $priceInSats) <= 0) {
      return round((double) $priceInSats, 4);
    }
  }

  // MM-DD, YYYY UU-MM-SS UTC
  $url = "https://api.coindesk.com/v1/bpi/currentprice.json";
  $fgc = file_get_contents($url);
  $json = json_decode($fgc, true);
  $lastUpdated = $json["time"]["updated"];
?>
