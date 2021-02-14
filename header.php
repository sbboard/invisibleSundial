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
    <link rel="stylesheet" href="<?php //echo get_bloginfo('template_directory'); echo "/css/";?>style.css">
	  <?php //wp_head(); ?>
	 <style>
		 body h1{background-color: inherit;}
	  </style>
  </head>
	  <body>
    <audio id="mainTrack" src="./mp3/crazy-santa.mp3" volume=".2" autoplay onended="mainEnd()"></audio>
    <audio id="secretTrack" src="./mp3/Luigi41.wav" preload volume=".2" onended="secretEnd()"></audio>
    <audio id="rabbitTrack" src="./mp3/Bowser18.wav" preload volume=".2" onended="secretEnd()"></audio>
    <script>
    let mainTrack = document.getElementById("mainTrack")
      function changeMusic(trackToPlay){
        document.getElement
        if(trackToPlay == 'rabbit'){
          mainTrack.pause()
          document.getElementById("rabbitTrack").play()
        }
        else if(trackToPlay == 'hologram'){
          mainTrack.pause()
          document.getElementById("secretTrack").play()
        }
      }

      function secretEnd(){
        mainTrack.play()
      }

      function mainEnd(){
        mainTrack.currentTime = 0
        mainTrack.play()
      }
    </script>
    <div id="leftOverflow"></div>
    <div id="rightOverflow"></div>
    <script src="./js/overflow.js"></script>