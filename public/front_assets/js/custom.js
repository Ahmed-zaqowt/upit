// shange lang 
let lang =document.querySelector("#change-lang");
lang.addEventListener("click", function(){
  document.body.classList.toggle("arabic");
  if(lang.innerText == "AR"){
    lang.innerText = "EN";
  }else{
    lang.innerText = "AR";
  }
  
});
/*=============== SHOW MENU ===============*/
//jquery for toggle dropdown menus
$(document).ready(function(){
  //toggle sub-menus
  $(".sub-btn").click(function(){
    $(this).next(".sub-menu").slideToggle();
  });

  //toggle more-menus
  $(".more-btn").click(function(){
    $(this).next(".more-menu").slideToggle();
  });
});

//javascript for the responsive navigation menu
var menu = document.querySelector(".menu");
var menuBtn = document.querySelector(".menu-btn");
var closeBtn = document.querySelector(".close-btn");

menuBtn.addEventListener("click", () => {
  menu.classList.toggle("active");
  document.body.style.overflow = 'hidden';
});

closeBtn.addEventListener("click", () => {
  menu.classList.remove("active");
  document.body.style.overflow = 'auto';
});
  //javascript for the navigation bar effects on scroll
  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });
//   swiper js first in main
    var swiper = new Swiper(".main-swiper", {
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 3500,
            pauseOnMouseEnter:true,
            disableOnInteraction: false,
          },
        navigation: {
        nextEl: ".main-next",
        prevEl: ".main-prev",
      },
    });
// second, third in main
var swiper = new Swiper(".main-partner-swiper", {
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 3500,
        pauseOnMouseEnter:true,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1, 
            spaceBetween: 20,
        },
        321: {
            slidesPerView: 2,
            spaceBetween: 20, 
        },
        576: {
            slidesPerView: 3, 
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4, 
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 5, 
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 6, 
            spaceBetween: 20,
        },
      },
  });
// second, third in main
var swiper = new Swiper(".main-client-swiper", {
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 3500,
        pauseOnMouseEnter:true,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1, 
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 2, 
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3, 
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4, 
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 5, 
            spaceBetween: 20,
        },
      },
  });


  // num counter 
$('.counter').counterUp({
  delay: 10,
  time: 1500
});

// scroll to top 
  const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.pageYOffset > 300) { // Show backToTopButton
    if(!backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnExit");
      backToTopButton.classList.add("btnEntrance");
      backToTopButton.style.display = "block";
    }
  }
  else { // Hide backToTopButton
    if(backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnEntrance");
      backToTopButton.classList.add("btnExit");
      setTimeout(function() {
        backToTopButton.style.display = "none";
      }, 250);
    }
  }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);

// function backToTop() {
//   window.scrollTo(0, 0);
// }

function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 750;
  let start = null;
  
  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }
}

function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};


