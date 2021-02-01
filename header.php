<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Invisible Sundial</title>
    <link
      rel="stylesheet"
      href="node_modules\@fortawesome\fontawesome-free\css\all.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="node_modules\@fortawesome\fontawesome-free\js\all.min.js"></script>
    <script src="js/p5.min.js"></script>
    <script src="js/p5.sound.min.js"></script>
    <script src="js/jquery.gcal_flow.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
	  <?php wp_head(); ?>
  </head>
	  <body>
    <div id="topBox">
      <div id="topWrap">
        <nav>
          <div id="secret">jib</div>
          <a href="#home">home</a>
          <a href="#blog">news</a>
          <a href="#albums">albums</a>
          <a href="#aboutUs">about us</a>
          <a href="#calendar">calendar</a>
          <!-- <a href="#merch">merch</a> -->
        </nav>
        <div id="webPlayer">
          <div id="playerWrap">
            <i class="fas fa-fast-backward" onclick="lastTrack()"></i>
            <div id="wave"></div>
            <i class="fas fa-fast-forward" onclick="nextTrack()"></i>
          </div>
        </div>
      </div>
    </div>