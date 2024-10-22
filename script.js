function openNav() {
  document.getElementById("sidebar").style.display = "block";
  document.getElementById("main").style.marginLeft = "0";
}

function closeNav() {
  document.getElementById("sidebar").style.display = "none"
  document.getElementById("main").style.marginLeft = "0";
}

var snd = new Audio("click.mp3");