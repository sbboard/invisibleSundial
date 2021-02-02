let albumBox = document.getElementById("albumsHere");
let toInput = "";
fetch("albums.json")
  .then((response) => response.json())
  .then(function (json) {
    toInput += `<h4>Albums</h4><div class="albumBox">`;
    for (let i = 0; i < json.albums.length; i++) {
      if (json.albums[i].type == "album") {
        toInput += `<div class="albumWrap"><a href="album.php?album=${i}"><img src="img/albums/${json.albums[i].art}"></a></div>`;
      }
    }
    toInput += `</div><h4>EPs</h4><div class="albumBox">`;
    for (let i = 0; i < json.albums.length; i++) {
      if (json.albums[i].type == "EP") {
        toInput += `<div class="albumWrap"><a href="album.php?album=${i}"><img src="img/albums/${json.albums[i].art}"></a></div>`;
      }
    }
    toInput += "</div>";
    albumBox.innerHTML = toInput;
  });
{
  /* <h4>Albums</h4>
<div class="albumBox">
  <div class="albumWrap"><a href="#"><img src="img/albums/open1.jpg"></a></div>
  <div class="albumWrap"><a href="#"><img src="img/albums/open2.jpg"></a></div>
  <div class="albumWrap"><a href="#"><img src="img/albums/open4.jpg"></a></div>
</div>
<h4>EPs</h4>
<div class="albumBox">
  <div class="albumWrap"><a href="#"><img src="img/albums/open3.jpg"></a></div>
  <div class="albumWrap"><a href="#"><img src="img/albums/open5.jpg"></a></div>
</div> */
}
