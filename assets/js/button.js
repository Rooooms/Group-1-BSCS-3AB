const card = [...document.querySelectorAll('.cs-hidden')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const prevBtn = [...document.querySelectorAll('.prev-btn')];

card.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    prevBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})