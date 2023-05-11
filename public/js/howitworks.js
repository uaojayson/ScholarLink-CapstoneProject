const cardWrapper = document.querySelector('.card-wrappers');
const cardWrapperChildren = Array.from(cardWrapper.children);
const widthToScroll = cardWrapper.children[0].offsetWidth;
const arrowPrev = document.querySelector('.arrows.previous');
const arrowNext = document.querySelector('.arrows.nexts');
const cardBounding = cardWrapper.getBoundingClientRect();
const column = Math.floor(cardWrapper.offsetWidth / (widthToScroll + 24));
let currScroll = 0;
let initPos = 0;
let clicked = false;
let autoScrollInterval;

cardWrapperChildren.slice(-column).reverse().forEach(item => {
  cardWrapper.insertAdjacentHTML('afterbegin', item.outerHTML);
});

cardWrapperChildren.slice(0, column).forEach(item => {
  cardWrapper.insertAdjacentHTML('beforeend', item.outerHTML);
});

const cardImageAndLink = cardWrapper.querySelectorAll('img, a');
cardImageAndLink.forEach(item => {
  item.setAttribute('draggable', false);
});

cardWrapper.classList.add('no-smooth');
cardWrapper.scrollLeft = cardWrapper.offsetWidth;
cardWrapper.classList.remove('no-smooth');

arrowPrev.onclick = function() {
  cardWrapper.scrollLeft -= widthToScroll;
};

arrowNext.onclick = function() {
  cardWrapper.scrollLeft += widthToScroll;
};

cardWrapper.onmousedown = function(e) {
  cardWrapper.classList.add('grab');
  initPos = e.clientX - cardBounding.left;
  currScroll = cardWrapper.scrollLeft;
  clicked = true;
};

cardWrapper.onmousemove = function(e) {
  if (clicked) {
    const xPos = e.clientX - cardBounding.left;
    cardWrapper.scrollLeft = currScroll + -(xPos - initPos);
  }
};

cardWrapper.onmouseup = mouseUpAndLeave;
cardWrapper.onmouseleave = mouseUpAndLeave;

function mouseUpAndLeave() {
  cardWrapper.classList.remove('grab');
  clicked = false;
}

function startAutoScroll() {
    autoScrollInterval = setInterval(() => {
      cardWrapper.scrollLeft += widthToScroll;
      if (cardWrapper.scrollLeft >= (cardWrapper.scrollWidth - cardWrapper.offsetWidth)) {
        cardWrapper.scrollLeft = 0;
      }
    }, 3000);
  }

function stopAutoScroll() {
  clearInterval(autoScrollInterval);
}

startAutoScroll();

cardWrapper.addEventListener('scroll', () => {
  stopAutoScroll();
  startAutoScroll();
});


// Get the login and signup buttons
const loginBtn = document.querySelector('.btn-login');

// Add click event listeners to the buttons
loginBtn.addEventListener('click', () => {
  // Redirect to the login page
  window.location.href = '/home';
});