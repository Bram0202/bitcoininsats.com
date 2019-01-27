<?php
  require "config.php";
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,600|Montserrat:400,700" rel="stylesheet">

    <title>Satoshi's Price</title>
  </head>
  <body>
    <?php
      /*
      De wiskunde die gedaan moet worden om de data van Coindesk om te rekenen naar het aantal satoshi.
      1 btc = $3500
      1 satoshi = (3500/100.000.000)
      1/.000035 is het aantal satoshi dat $1 waard is!
      */

      // Function die de prijs van 1BTC omrekent naar de hoeveelheid satoshi die 1€/$/£ etc. waard is.
      function priceInSatoshi($price) {
        $tinyPrice = $price / 100000000;
        $satoshiPrice = 1 / $tinyPrice;
        return (int) $satoshiPrice;
      }

      // Reken de verschillende currencies om naar het aantal satoshi.
      $eurSatoshi = priceInSatoshi($eurPrice);
      $usdSatoshi = priceInSatoshi($usdPrice);
      $gbpSatoshi = priceInSatoshi($gbpPrice);
      $jpySatoshi = priceInSatoshi($jpyPrice);
      $cnySatoshi = priceInSatoshi($cnyPrice);
      $chfSatoshi = priceInSatoshi($chfPrice);
      $audSatoshi = priceInSatoshi($audPrice);
      $rubSatoshi = priceInSatoshi($rubPrice);
      $cadSatoshi = priceInSatoshi($cadPrice);
      $dkkSatoshi = priceInSatoshi($dkkPrice);
      $nokSatoshi = priceInSatoshi($nokPrice);
      $sekSatoshi = priceInSatoshi($sekPrice);
    ?>

      <!-- Header Content. -->
      <?php require "header.php"; ?>

      <!-- Main content. -->
      <main>

        <div class="content-left">
          <h2>Bitcoin 🗺️</h2>
          <p>฿1 = 100.000.000 satoshi</p></br>
          <h2>Euro 🇪🇺</h2>
          <p>€1 = <?php echo $eurSatoshi; ?> satoshi</p></br> <!-- euro vs. satoshi -->
          <h2>U.S. Dollar 🇺🇸</h2>
          <p>$1 = <?php echo $usdSatoshi; ?> satoshi</p></br> <!-- dollar vs. satoshi -->
          <h2>British Pound 🇬🇧</h2>
          <p>£1 = <?php echo $gbpSatoshi; ?> satoshi</p></br> <!-- Britse pond vs. satoshi -->
          <h2>Japanese Yen 🇯🇵</h2>
          <p>¥1 = <?php echo $jpySatoshi; ?> satoshi</p></br> <!-- Japanse Yen vs. satoshi -->
          <h2>Chinese Yuan 🇨🇳</h2>
          <p>¥1 = <?php echo $cnySatoshi; ?> satoshi</p></br> <!-- Chinese Yuan vs. satoshi -->
          <h2>Swiss Franc 🇨🇭</h2>
          <p>₣1 = <?php echo $chfSatoshi; ?> satoshi</p></br> <!-- Zwitserse Frank vs. satoshi -->
        </div>

        <div class="content-right">
          <h2>Australian Dollar 🇦🇺</h2>
          <p>$1 = <?php echo $audSatoshi; ?> satoshi</p></br> <!-- Australische Dollar vs. satoshi -->
          <h2>Russian Ruble 🇷🇺</h2>
          <p>₽1 = <?php echo $rubSatoshi; ?> satoshi</p></br> <!-- Russische Roebel vs. satoshi -->
          <h2>Canadian Dollar 🇨🇦</h2>
          <p>$1 = <?php echo $cadSatoshi; ?> satoshi</p></br> <!-- Canadese Dollar vs. satoshi -->
          <h2>Danish Krone 🇩🇰</h2>
          <p>kr1 = <?php echo $dkkSatoshi; ?> satoshi</p></br> <!-- Deense Kroon vs. satoshi -->
          <h2>Norwegian Krone 🇳🇴</h2>
          <p>kr1 = <?php echo $nokSatoshi; ?> satoshi</p></br> <!-- Noorse Kroon vs. satoshi -->
          <h2>Swedish Krona 🇸🇪</h2>
          <p>kr1 = <?php echo $sekSatoshi; ?> satoshi</p></br> <!-- Zweedse Kroon vs. satoshi -->

          <p>Last updated: <?php echo $lastUpdated; ?></p>
        </div>
      </main>

      <!-- Footer Content. -->
      <?php require "footer.php"; ?>

      </body>
</html>
