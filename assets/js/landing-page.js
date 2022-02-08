var big_wrapper;
var hamburger_menu;

function declare() {
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

declare();

function events() {
    // toggle_btn.addEventListener("click", toggleAnimation);
    hamburger_menu.addEventListener("click", () => {
      big_wrapper.classList.toggle("active");
    });
  }
  
  events();

//FUNCTION TO MOVE IMG
document.addEventListener('mousemove', move);
function move(e){
    this.querySelectorAll('.move').forEach(layer =>{
        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX*speed)/320
        const y = (window.innerHeight - e.pageY*speed)/320

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}

/*===== GSAP ANIMATION =====*/
// NAV
gsap.from('.logo', {opacity: 0, duration: 0.5, delay: 1, y: -15})
gsap.from('.hamburger-menu', {opacity: 0, duration: 0.5, delay: 1, y: -15})
gsap.from('.nav-item', {opacity: 0, duration: 0.5, delay: 1, y: -15, stagger: 0.3,})

// HOME
gsap.from('.title', {opacity: 0, duration: 0.5, delay: 1, y: 15})
gsap.from('.text', {opacity: 0, duration: 0.5, delay: 1, y: 15})
gsap.from('.join-btn', {opacity: 0, duration: 0.5, delay: 1, y: 15})
gsap.from('.creatives', {opacity: 0, duration: 0.5, delay: 1, y: 15})