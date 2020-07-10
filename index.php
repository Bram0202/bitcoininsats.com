<?php
  require "includes/config.php";
?><html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
      $xauPrice = getPrice("XAU");
      $xagPrice = getPrice("XAG");
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
              <p>₿1 = <?php echo priceInSatoshi(getPrice("BTC")); ?> sats</p>

              <h2>Euro 🇪🇺</h2>
              <p>€1 = <?php echo priceInSatoshi(getPrice("EUR")); ?> sats</p>

              <h2>U.S. Dollar 🇺🇸</h2>
              <p>$1 = <?php echo priceInSatoshi(getPrice("USD")); ?> sats</p>

              <h2>British Pound 🇬🇧</h2>
              <p>£1 = <?php echo priceInSatoshi(getPrice("GBP")); ?> sats</p>

              <h2>Canadian Dollar 🇨🇦</h2>
              <p>$1 = <?php echo priceInSatoshi(getPrice("CAD")); ?> sats</p>

              <h2>Australian Dollar 🇦🇺</h2>
              <p>$1 = <?php echo priceInSatoshi(getPrice("AUD")); ?> sats</p>
            </div>

            <!-- Middelste colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">
              <h2>Japanese Yen 🇯🇵</h2>
              <p>¥1 = <?php echo priceInSatoshi(getPrice("JPY")); ?> sats</p>

              <h2>Chinese Yuan 🇨🇳</h2>
              <p>¥1 = <?php echo priceInSatoshi(getPrice("CNY")); ?> sats</p>

              <h2>Swiss Franc 🇨🇭</h2>
              <p>₣1 = <?php echo priceInSatoshi(getPrice("CHF")); ?> sats</p>

              <h2>Danish Krone 🇩🇰</h2>
              <p>kr1 = <?php echo priceInSatoshi(getPrice("DKK")); ?> sats</p>

              <h2>Norwegian Krone 🇳🇴</h2>
              <p>kr1 = <?php echo priceInSatoshi(getPrice("NOK")); ?> sats</p>

              <h2>Swedish Krona 🇸🇪</h2>
              <p>kr1 = <?php echo priceInSatoshi(getPrice("SEK")); ?> sats</p>
            </div>

            <!-- Rechter colomn met content. -->
            <div class="col-md-3 offset-md-1 my-col">

              <h2>Russian Ruble 🇷🇺</h2>
              <p>₽1 = <?php echo priceInSatoshi(getPrice("RUB")); ?> sats</p>

              <h2>Turkish Lira 🇹🇷</h2>
              <p>₺1 = <?php echo priceInSatoshi(getPrice("TRY")); ?> sats</p>

              <h2>Iranian Rial 🇮🇷</h2>
              <p>﷼1 = <?php echo priceInSatoshi(getPrice("IRR")); ?> sats</p>

              <h2>Venezuelan Bolívar 🇻🇪</h2>
              <p>Bs1 = <?php echo priceInSatoshi(getPrice("VEF")); ?> sats</p>

              <h2>Gold (XAU) ⛏️</h2>
              <p>1 t/oz = <?php echo priceInSatoshi(getPrice("XAU")); ?> sats</p>
              <p> <?php echo $xauPrice; ?> </p>

              <h2>Silver (XAG) ⛏️</h2>
              <p>1 t/oz = <?php echo priceInSatoshi(getPrice("USD")); ?> sats</p>
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
