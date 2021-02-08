<?php include './header.php'?>
<div id="splash" class="section">
  <img src="img/logo.png" alt="band logo" />
  <div id="socMedia">
    <a href="https://twitter.com/nvisiblesundial"
      ><i class="fab fa-twitter-square"></i
    ></a>
    <a href="https://www.twitch.tv/theinvisiblesundial"
      ><i class="fab fa-twitch"></i
    ></a>

    <a href="https://www.twitch.tv/theinvisiblesundial"
      ><i class="fab fa-youtube-square"></i
    ></a>

    <a href="https://open.spotify.com/artist/470lKesDAVt2EAqHABtNM5"
      ><i class="fab fa-spotify"></i
    ></a>
    <a href="https://theinvisiblesundial.bandcamp.com/"
      ><i class="fab fa-bandcamp"></i
    ></a>
    
    <a href="https://www.patreon.com/theinvisiblesundial"
      ><i class="fab fa-patreon"></i
    ></a>
  </div>
</div>

<div id="topBox">
      <div id="topWrap">
        <nav>
          <a href="#albums">discography</a>
          <a href="#blog">news</a>
          <a href="#aboutUs">about us</a>
          <a href="#calendar">calendar</a>
          <!-- <a href="#merch">merch</a> -->
        </nav>
      </div>
    </div>

<div id="albums" class="section">
  <div class="sectionWrap theAlbums">
    <h1><span>discography</span></h1>
    <div id="albumsHere"></div>
    <script src="js/genAlbums.js"></script>
  </div>
</div>
<div id="blog" class="section">
  <div class="sectionWrap">
    <h1><span>news</span></h1>
    
[display-posts posts_per_page="3" image_size="thumbnail" include_excerpt="true"]
    
  </div>
</div>
<div id="aboutUs" class="section">
  <div class="sectionWrap">
    <h1><span>about us</span></h1>
    <p>The Invisible Sundial is a genre-fusing, instrumental solo project based off one bold premise: not everything which creates sound has to be a traditional instrument.</br></br>

The brainchild of multi-instrumentalist Austin Amberg, The Invisible Sundial uses the whole spectrum of synthesis, exploring every angle to create bite-size tasters of sound - inviting the listener in for more. The Invisible Sundial aims to get the absolute most from their tools.</br></br>

With influences from prog-rock, synth-pop, shoegaze, electronica, post rock, and more, The Invisible Sundial doesn’t sit squarely in one place – yet in doing so, manages to range to the lesser-explored regions of The Invisible Sundial’s influences, turning them into something new.
</p>
    <div id="fadeImg">
      <img src="img/band2.JPG">
      <img class="topImg" src="img/band1.JPG">
    </div>
  </div>
</div>
<div id="calendar" class="section">
  <div class="sectionWrap">
    <h1><span>calendar</span></h1>
[MEC id="23"]
  </div>
</div>
<?php include './footer.php'?>