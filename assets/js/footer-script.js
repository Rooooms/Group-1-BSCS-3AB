const text = document.querySelector("#copy-email");
const popup = document.querySelector(".popup");

text.addEventListener("click", () => {
  popup.classList.add("active");
  copyToClipBoard();
});
popup.addEventListener("animationend", () => {
  popup.classList.remove("active");
});

function copyToClipBoard() {
  const textarea = document.createElement("textarea");
  textarea.setAttribute("readonly", "");
  textarea.value = text.innerText;
  textarea.style.position = "absolute";
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");
  document.body.removeChild(textarea);
}

// Roms Creator Popup
document.getElementById("creator-roms").addEventListener("click", function() {
  document.getElementsByClassName("roms-popup")[0].classList.add("active");
});

document.getElementById("roms-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-roms").style.display = "block";
  document.getElementsByClassName("roms-popup")[0].classList.remove("active");
});

// Dylan Creator Popup
document.getElementById("creator-dylan").addEventListener("click", function() {
  document.getElementsByClassName("dylan-popup")[0].classList.add("active");
});

document.getElementById("dylan-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-dylan").style.display = "block";
  document.getElementsByClassName("dylan-popup")[0].classList.remove("active");
});

// Errol Creator Popup
document.getElementById("creator-errol").addEventListener("click", function() {
  document.getElementsByClassName("errol-popup")[0].classList.add("active");
});

document.getElementById("errol-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-errol").style.display = "block";
  document.getElementsByClassName("errol-popup")[0].classList.remove("active");
});

// Ros Creator Popup
document.getElementById("creator-aba").addEventListener("click", function() {
  document.getElementsByClassName("aba-popup")[0].classList.add("active");
});

document.getElementById("aba-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-aba").style.display = "block";
  document.getElementsByClassName("aba-popup")[0].classList.remove("active");
});

// Ros Creator Popup
document.getElementById("creator-ros").addEventListener("click", function() {
  document.getElementsByClassName("ros-popup")[0].classList.add("active");
});

document.getElementById("ros-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-ros").style.display = "block";
  document.getElementsByClassName("ros-popup")[0].classList.remove("active");
});

// Saey Creator Popup
document.getElementById("creator-saey").addEventListener("click", function() {
  document.getElementsByClassName("saey-popup")[0].classList.add("active");
});

document.getElementById("saey-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-saey").style.display = "block";
  document.getElementsByClassName("saey-popup")[0].classList.remove("active");
});