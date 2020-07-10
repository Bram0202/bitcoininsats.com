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
    <link rel="stylesheet" href="css/about.css">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,600|Montserrat:400,700" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Satoshi's Price shows the Bitcoin price in satoshi, because it is easier to read and to count." />
    <meta name="twitter:title" content="Satoshi's Price" />
    <meta name="twitter:site" content="@brambakx" />
    <title>About Satoshi's Price</title>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <?php require "includes/header.php"; ?>
      </div>

      <div id="body">
        <div class="container my-container">
          <div class="row my-row">
            <div class="col-md-6 offset-md-3 my-col">

              <h1>About Satoshi's Price</h1>
            </br>

              <h2>Why? 🤔</h2>
              <ul>
                <li>I think we need to use the <span class="orange">easiest and best readable format</span> for Bitcoin transactions.</li>
                <li>I want (new) people to realise that you can buy <span class="orange">a part of a bitcoin</span>.</li>
                <li>I wanted to create an <span class="orange">easy tool</span> for people to check the price of Bitcoin in sats.</li>
              </ul>
              </br>
              <h2>What? ℹ️</h2>
              <p>Back in the days I heard <a href="https://twitter.com/GKBoris" target="_blank">@GKBoris</a> speak about Lightning ⚡
                 in the Cryptocast (a Dutch podcast about crypto/Bitcoin).
                 He spoke about some experimenting he did with Lightning transactions and wallets.
                 His point: Lightning is awesome and a few sats feel like a fortune in a Lightning wallet.
               </p>

              <p>
                I tried it for myself and noticed that he was right.
                A few satoshi's feeled like a fortune indeed.
                Besides it is a lot easier to read the amount of sats you’re sending or
                receiving using the satoshi format instead of the weird 0.something format.
                For example: 1000 sats is easier to read than 0.000001000 and 326,034 sats is
                so much easier than 0.00326034.
              </p>
              </br>
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
