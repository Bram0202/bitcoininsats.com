<?php
  require "includes/config.php";
?><html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon16x16.png"> <!--  https://emojipedia.org/circled-ideograph-accept/ -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon32x32.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x190" href="images/favicon180x180.png">

    <link rel="stylesheet" href="css/main.css">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,600|Montserrat:400,700" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Satoshi's Price shows the Bitcoin price in satoshi's, because it is easier to read and to count." />
    <meta name="twitter:title" content="Satoshi's Price" />
    <meta name="twitter:site" content="@brambakx" />
    <title>Satoshi's Price</title>
  </head>
  <body>
    <?php
      /*
      The math behind the convertion of the Coindesk data.
      1 bitcoin = $3500
      1 satoshi = (3500/100.000.000)
      $1 = 1/000035
      */

      // Function die de prijs van 1 btc omrekent naar de hoeveelheid satoshi die 1€/$/£ etc. waard is.
      function priceInSatoshi($price) {
        $tempPrice = $price / 100000000;
        $priceInSats = 1 / $tempPrice;

        if (round((double) $priceInSats) > 0) {
          return round((double) $priceInSats);
        } elseif (round((double) $priceInSats) <= 0) {
          return round((double) $priceInSats, 4);
        }
      }

      // Reken de verschillende currencies om naar het aantal satoshi.
      $btcPriceInSats = priceInSatoshi($btcPrice);
      $eurPriceInSats = priceInSatoshi($eurPrice);
      $usdPriceInSats = priceInSatoshi($usdPrice);
      $gbpPriceInSats = priceInSatoshi($gbpPrice);
      $jpyPriceInSats = priceInSatoshi($jpyPrice);
      $cnyPriceInSats = priceInSatoshi($cnyPrice);
      $chfPriceInSats = priceInSatoshi($chfPrice);
      $audPriceInSats = priceInSatoshi($audPrice);
      $rubPriceInSats = priceInSatoshi($rubPrice);
      $cadPriceInSats = priceInSatoshi($cadPrice);
      $dkkPriceInSats = priceInSatoshi($dkkPrice);
      $nokPriceInSats = priceInSatoshi($nokPrice);
      $sekPriceInSats = priceInSatoshi($sekPrice);
      $tryPriceInSats = priceInSatoshi($tryPrice);
      $vefPriceInSats = priceInSatoshi($vefPrice);
      $irrPriceInSats = priceInSatoshi($irrPrice);
      $xauPriceInSats = priceInSatoshi($xauPrice);
      $xagPriceInSats = priceInSatoshi($xagPrice);
    ?>
    <div id="container">
      <div id="header">
        <?php require "includes/header.php"; ?>
      </div>

      <div id="body">
        <div class="container my-container">
          <div class="row my-row">

            <!-- Linker colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">

              <h2>Bitcoin <img src="./images/bitcoin_logo.png" height="25px"></h2>
              <p>₿1 = <?php echo $btcPriceInSats; ?> sats</p>

              <h2>Euro 🇪🇺</h2>
              <p>€1 = <?php echo $eurPriceInSats; ?> sats</p>

              <h2>U.S. Dollar 🇺🇸</h2>
              <p>$1 = <?php echo $usdPriceInSats; ?> sats</p>

              <h2>British Pound 🇬🇧</h2>
              <p>£1 = <?php echo $gbpPriceInSats; ?> sats</p>

              <h2>Canadian Dollar 🇨🇦</h2>
              <p>$1 = <?php echo $cadPriceInSats; ?> sats</p>

              <h2>Australian Dollar 🇦🇺</h2>
              <p>$1 = <?php echo $audPriceInSats; ?> sats</p>
            </div>

            <!-- Middelste colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">
              <h2>Japanese Yen 🇯🇵</h2>
              <p>¥1 = <?php echo $jpyPriceInSats; ?> sats</p>

              <h2>Chinese Yuan 🇨🇳</h2>
              <p>¥1 = <?php echo $cnyPriceInSats; ?> sats</p>

              <h2>Swiss Franc 🇨🇭</h2>
              <p>₣1 = <?php echo $chfPriceInSats; ?> sats</p>

              <h2>Danish Krone 🇩🇰</h2>
              <p>kr1 = <?php echo $dkkPriceInSats; ?> sats</p>

              <h2>Norwegian Krone 🇳🇴</h2>
              <p>kr1 = <?php echo $nokPriceInSats; ?> sats</p>

              <h2>Swedish Krona 🇸🇪</h2>
              <p>kr1 = <?php echo $sekPriceInSats; ?> sats</p>
            </div>

            <!-- Rechter colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">

              <h2>Russian Ruble 🇷🇺</h2>
              <p>₽1 = <?php echo $rubPriceInSats; ?> sats</p>

              <h2>Turkish Lira 🇹🇷</h2>
              <p>₺1 = <?php echo $tryPriceInSats; ?> sats</p>

              <h2>Iranian Rial 🇮🇷</h2>
              <p>Bs1 = <?php echo $irrPriceInSats; ?> sats</p>

              <h2>Venezuelan Bolívar 🇻🇪</h2>
              <p>Bs1 = <?php echo $vefPriceInSats; ?> sats</p>

              <h2>Gold ⛏️</h2>
              <p>1 t/oz = <?php echo $xauPriceInSats; ?> sats</p>
              <p> <?php echo $xauPrice; ?> </p>

              <h2>Silver ⛏️</h2>
              <p>1 t/oz = <?php echo $xagPriceInSats; ?> sats</p>
              <p> <?php echo $xagPrice; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 offset-md-1">
              <div class="time-updated">
                <p>Last updated: <?php echo $lastUpdated; ?></p> <!-- MMM DD, YYYY HH:MM:SS UTC -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="footer">
      <?php require "includes/footer.php" ?>
      </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
</html>
