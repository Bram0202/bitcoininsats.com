
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,600|Montserrat:400,700" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>

     <nav class="navbar navbar-expand-md navbar-light">

      <!-- Logo. -->
      <a class="my-logo" href="index" class="navbar-brand">The <span class="orange">Bitcoin</span> price in sats</a>

      <!-- Hamburger-menu. -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Main menu. -->
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" id="<?php if($page == 'about'){echo 'active';}?>" href="about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link my-link" href="https://twitter.com/intent/tweet?text=A%20website%20with%20the%20bitcoin%20vs.%20fiat,%20gold%20and%20silver%20prices.%20In%20sats.%20https%3A%2F%2Fbitcoininsats.com" target="_blank">Share on Twitter</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
