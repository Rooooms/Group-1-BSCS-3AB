/*===== GSAP ANIMATION =====*/
// NAV
gsap.from('.logo', {opacity: 0, duration: 0.5, delay: 1, y: -15})
gsap.from('.nav-item', {opacity: 0, duration: 0.5, delay: 1, y: -15, stagger: 0.3,})
gsap.from('.nav-toggle-btn', {opacity: 0, duration: 0.5, delay: 1, y: -15})

// LOGIN SIGNUP CONTAINERS
gsap.from('.login-signup-container', {opacity: 0, duration: 0.5, delay: 1, y: 15})
gsap.from('.overlay-design-container', {opacity: 0, duration: 0.5, delay: 1, y: 15})