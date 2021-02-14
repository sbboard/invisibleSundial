const gifs = ["1.gif", "3.gif", "4.gif"];

function roll() {
  let randomNum = Math.floor(Math.random() * (20 + 1));
  if (randomNum == 3 || randomNum == 4) {
    let gifUsed = Math.floor(Math.random() * gifs.length);
    let side;

    let docHeight = window.innerHeight;
    let docWidth = window.innerWidth;

    //create element
    var hologram = document.createElement("IMG");
    hologram.src = `./img/gifs/${gifs[gifUsed]}`;

    let coll = (docWidth - 1000) / 2;

    //get side
    if (randomNum % 2 == 0) {
      side = document.getElementById("leftOverflow");
      hologram.style.left = Math.floor(Math.random() * coll - 100) + "px";
    } else {
      side = document.getElementById("rightOverflow");
      hologram.style.right = Math.floor(Math.random() * coll - 100) + "px";
    }
    hologram.style.bottom =
      Math.floor(Math.random() * (docHeight - 195)) + 95 + "px";
    hologram.onclick = clickHologram;
    side.appendChild(hologram);
    setTimeout(function () {
      side.removeChild(hologram);
    }, 10000);
  }
}

function clickHologram() {
  changeMusic("hologram");
}

setInterval(roll, 1000);
