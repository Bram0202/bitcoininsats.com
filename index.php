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
      De wiskunde die gedaan moet worden om de data van Coindesk om te rekenen naar het aantal satoshi.
      1 bitcoin = $3500
      1 satoshi = (3500/100.000.000)
      $1 = 1/000035
      */

      // Function die de prijs van 1BTC omrekent naar de hoeveelheid satoshi die 1€/$/£ etc. waard is.
      function priceInSatoshi($price) {
        $tinyPrice = $price / 100000000;
        $satoshiPrice = 1 / $tinyPrice;

        if (round((double) $satoshiPrice) > 0) {
          return round((double) $satoshiPrice);
        } elseif (round((double) $satoshiPrice) <= 0) {
          return round((double) $satoshiPrice, 4);
        }
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
      $trySatoshi = priceInSatoshi($tryPrice);
      $vefSatoshi = priceInSatoshi($vefPrice);

    ?>

    <div id="container">
      <div id="header">
        <!-- Header content. -->
        <?php require "includes/header.php"; ?>
        <!-- Einde header content. -->
      </div>

      <div id="body">
        <!-- Main content. -->
        <div class="container my-container">
          <div class="row my-row">

            <!-- Linker colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">

              <!-- Bitcoin vs satoshi -->
              <h2>Bitcoin 🌍️</h2>
              <p>₿1 = 100,000,000 sats</p>

              <!-- euro vs. satoshi -->
              <h2>Euro 🇪🇺</h2>
              <p>€1 = <?php echo $eurSatoshi; ?> sats</p>

              <!-- dollar vs. satoshi -->
              <h2>U.S. Dollar 🇺🇸</h2>
              <p>$1 = <?php echo $usdSatoshi; ?> sats</p>

              <!-- Britse pond vs. satoshi -->
              <h2>British Pound 🇬🇧</h2>
              <p>£1 = <?php echo $gbpSatoshi; ?> sats</p>

              <!-- Canadese Dollar vs. satoshi -->
              <h2>Canadian Dollar 🇨🇦</h2>
              <p>$1 = <?php echo $cadSatoshi; ?> sats</p>
            </div> <!-- Einde col -->

            <!-- Middelste colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">

              <!-- Japanse Yen vs. satoshi -->
              <h2>Japanese Yen 🇯🇵</h2>
              <p>¥1 = <?php echo $jpySatoshi; ?> sats</p>

              <!-- Chinese Yuan vs. satoshi -->
              <h2>Chinese Yuan 🇨🇳</h2>
              <p>¥1 = <?php echo $cnySatoshi; ?> sats</p>

              <!-- Zwitserse Frank vs. satoshi -->
              <h2>Swiss Franc 🇨🇭</h2>
              <p>₣1 = <?php echo $chfSatoshi; ?> sats</p>

              <!-- Australische Dollar vs. satoshi -->
              <h2>Australian Dollar 🇦🇺</h2>
              <p>$1 = <?php echo $audSatoshi; ?> sats</p>

              <!-- Russische Roebel vs. satoshi -->
              <h2>Russian Ruble 🇷🇺</h2>
              <p>₽1 = <?php echo $rubSatoshi; ?> sats</p>
            </div> <!-- Einde col. -->

            <!-- Rechter colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">

              <!-- Deense Kroon vs. satoshi -->
              <h2>Danish Krone 🇩🇰</h2>
              <p>kr1 = <?php echo $dkkSatoshi; ?> sats</p>

              <!-- Noorse Kroon vs. satoshi -->
              <h2>Norwegian Krone 🇳🇴</h2>
              <p>kr1 = <?php echo $nokSatoshi; ?> sats</p>

              <!-- Zweedse Kroon vs. satoshi -->
              <h2>Swedish Krona 🇸🇪</h2>
              <p>kr1 = <?php echo $sekSatoshi; ?> satoshi's</p>

              <!-- Turkse Lira vs. satoshi -->
              <h2>Turkish Lira 🇹🇷</h2>
              <p>₺1 = <?php echo $trySatoshi; ?> sats</p>

              <!-- Venezuelaanse Bolivar vs. satoshi -->
              <h2>Venezuelan Bolívar 🇻🇪</h2>
              <p>Bs1 = <?php echo $vefSatoshi; ?> sats</p>

            </div> <!-- Einde col. -->
          </div> <!-- Einde row. -->

          <div class="row">
            <div class="col-md-4 offset-md-1">
              <!-- Laatse keer dat de prijzen zijn ge-updated. -->
              <!-- MMM DD, YYYY HH:MM:SS UTC -->
              <div class="time-updated">
                <p>Last updated: <?php echo $lastUpdated; ?></p>
              </div>
            </div> <!-- Einde col. -->
          </div> <!-- Einde row. -->
        </div> <!-- Einde container. -->
        <!-- Einde main content. -->
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
