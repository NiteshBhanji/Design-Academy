// Get the modal
var modal = document.getElementById("popup-container");
// Get the popup box
var popbox = document.getElementById("popup-box");
var auto_popbox = document.getElementById("auto-popup-box");

var clsbtn = document.getElementById("close-btn-id");
var auto_clsbtn = document.getElementById("auto-close-btn-id");

// Get the button that opens the modal
var btn = document.getElementsByClassName("call-popup-box");
//var btn = document.querySelectorAll(".call-popup-box");


for (var i = 0; i < btn.length; i++) {
  btn[i].onclick = function () {
    modal.style.display = "block";
    popbox.style.display = "block";
  }
}

/*Auto Popup loader*/
setTimeout(function () {
  //if (window.location.match(/www\.infoways\.com\.np$/) || window.location.match(/www\.infoways\.com\.np\/$/)) {
  if (location.href == "https://paux.live/") {
    modal.style.display = "block";
    auto_popbox.style.display = "block";
  }
}, 2000);


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal || event.target == auto_clsbtn) {
    modal.style.display = "none";
    // popbox.style.display = "none";
    auto_popbox.style.display = "none";
  }
}