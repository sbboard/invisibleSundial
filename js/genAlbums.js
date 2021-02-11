let albumBox = document.getElementById("albumsHere");
let toInput = "";
let jsonSaved;
fetch("albums.json")
  .then((response) => response.json())
  .then(function (json) {
    json.albums.sort((a, b) => (a.date > b.date ? 1 : -1));
    jsonSaved = json;
    toInput += "<h1>Albums</h2>";
    //albums
    for (let i = 0; i < json.albums.length; i++) {
      if (json.albums[i].type == "album") {
        toInput += `<div class="albumBox"><div class="yearBox">${json.albums[i].date} -</div><div class="infoBox"><img onclick="albumSelect(${i})" src="img/albums/${json.albums[i].art}"></div></div>`;
      }
    }
    //eps
    toInput += "<h1>EPs</h2>";
    for (let i = 0; i < json.albums.length; i++) {
      if (json.albums[i].type == "EP") {
        toInput += `<div class="albumBox"><div class="yearBox">${json.albums[i].date} -</div><div class="infoBox"><img onclick="albumSelect(${i})" src="img/albums/${json.albums[i].art}"></div></div>`;
      }
    }
    albumBox.innerHTML = toInput;
  });

function albumSelect(albumChosen) {
  let bigBox = document.getElementById("infoHere");
  let album = jsonSaved.albums[albumChosen];
  let tracklist = "";
  album.tracks.map((i) => (tracklist += `<li>${i}</li>`));
  bigBox.innerHTML = "";
  bigBox.innerHTML = `<img src="img/albums/${album.art}" alt="${album.title}">
    <h1>${album.title}</h1>
    <a href="${album.spotify}"><i class="fab fa-spotify"></i></a>
    <a href="${album.bandcamp}"><i class="fab fa-bandcamp"></i></a>
    <div id="trackListing"><ol>${tracklist}</ol></div>
    <div id="credits">${album.credits}</div>`;
}
