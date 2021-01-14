let img;
const tracks = ['mp3/alvvays.mp3','mp3/creed.mp3','mp3/crazy-santa.mp3']
const names = ['alvvays','creed','crazy santa']
let index = Math.floor(Math.random() * tracks.length)

function preload() {
  sound = loadSound(tracks[index]);
  img = loadImage("img/black.png");
}

function nextTrack(){
  sound.stop();
  index++
  sound = loadSound(tracks[index]);
  text(names[index], 0, 0, width);
  sound.play()
}

function setup() {
  let waveElement = document.getElementById("wave");
  var cnv = createCanvas(waveElement.offsetWidth, waveElement.offsetHeight);
  cnv.parent("wave");
  cnv.mouseClicked(togglePlay);
  fft = new p5.FFT();
  sound.amp(0.2);
}

function draw() {
  let widthCount = Math.ceil(windowWidth / img.width);
  let heightCount = Math.ceil(windowHeight / img.height);
  //each collumn
  for (let y = 0; y < heightCount; y++) {
    for (let x = 0; x < widthCount; x++) {
      image(img, x * img.width, y * img.height);
    }
  }

  var spectrum = fft.analyze();
  noStroke();
  fill(255, 255, 255); // spectrum is green
  for (var i = 0; i < spectrum.length; i++) {
    var x = map(i, 0, spectrum.length, 0, width);
    var h = -height + map(spectrum[i], 0, 255, height, 0);
    rect(x, height, width / spectrum.length, h);
  }

  var waveform = fft.waveform();
  noFill();
  beginShape();
  stroke(255, 255, 255); // waveform is red
  strokeWeight(1);
  for (var i = 0; i < waveform.length; i++) {
    var x = map(i, 0, waveform.length, 0, width);
    var y = map(waveform[i], -1, 1, 0, height);
    vertex(x, y);
  }
  endShape();

  //textAlign(CENTER, TOP);
  //text(names[index], 0, 0, width);
}

// fade sound if mouse is over canvas
function togglePlay() {
  if (sound.isPlaying()) {
    sound.pause();
  } else {
    sound.loop();
  }
}

function windowResized() {
  resizeCanvas(waveElement.offsetWidth, waveElement.offsetHeight);
}
