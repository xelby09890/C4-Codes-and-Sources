// Variable
const bannerContent = document.querySelector('#banner');



//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.opacity = 1;
  } else {
    mybutton.style.opacity = 0;
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Variable
const header = document.querySelector('#header');
// const topHeader =document.querySelector('#top-header');
const navbar = document.querySelector('#navbar');
const main = document.querySelector('#main');


// Scroll Y Vanilla Javascript
window.addEventListener('scroll', function(e){

  if(this.scrollY >= 20) {
       header.classList.add('scrolled-down2');
  } else {
       header.classList.remove('scrolled-down2');
  }


});


// Light Gallery
$(document).ready(() => {
  $("#light-gallery").lightGallery({
    pager: true });
});

// Isotope Gallery
// var $grid = $('').isotope({
//   layoutMode: 'fitRows'
// });
  
// filter items on button click
$('.gallery-filter').on( 'click', 'button', function() {
  
  $('.gallery-filter-item').removeClass('active');
  $(this).addClass('active');
  
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
    
});


  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper("#modalServicesSwipper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});


$("#book-now-modal").click(function(){
  $("#book-now-modal-form").modal('show');
});


$("#book-now-modal-close").click(function(){
  $("#book-now-modal-form").modal('hide');
});


// ease in
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 100;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
    // if (elementTop > 20) {
    //   reveals[i].classList.add("active");
    // } else {
    //   reveals[i].classList.remove("active");
    // }
  }
}

window.addEventListener("scroll", reveal);

// image changer
var picPaths = ["1.webp", "2.webp", "3.webp"];
// An index to track the contender image
var imageIndex = 0;
var bannerImage;

// Previous Image Button
document.getElementById("btn-prev-img").onclick = function () { 
  if (imageIndex === 0) {
    imageIndex = picPaths.length - 1;
  } else {
      imageIndex = imageIndex - 1; // It can be replaced with imageIndex ++
  }
  bannerImage.style.backgroundImage = "url('images/banners/" + picPaths[imageIndex] + "')";

  
    case 1:
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = '<p id="ybo-head-sub-special"></p>';
          // bannerSubImage.style.display = "none";
          break;
    case 2:
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = "";
          // bannerSubImage.style.display = "";
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = '<p id="ybo-head-sub-special"></p>';
          break;
    default:     
  }

 };

//  Next Image Button
document.getElementById("btn-next-img").onclick = displayNextImage;

// An event callback for starting the interval
function startInterval() {
  setInterval(displayNextImage, 5000);
}

function displayNextImage() {
  bannerImage.style.backgroundImage = "url('images/banners/" + picPaths[imageIndex] + "')";

  switch (imageIndex) {
    case 0:
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = "";
          // bannerSubImage.style.display = "";
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = '<p id="ybo-head-sub-special"></p>';
          break;
    case 1:
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = '<p id="ybo-head-sub-special"></p>';
          // bannerSubImage.style.display = "none";
          break;
    case 2:
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = "";
          // bannerSubImage.style.display = "";
          // bannersubtitle.innerHTML = "";
          // bannerTagline.innerHTML = '<p id="ybo-head-sub-special"></p>';
          break;
    default:     
  }
  if (imageIndex === picPaths.length - 1) {
    imageIndex = 0;
  } else {
      imageIndex = imageIndex + 1; // It can be replaced with imageIndex ++
  }
}


$(document).ready(function() {
  // bannerImage = document.getElementById("banner");
  // bannersubtitle = document.getElementById("ybo-sub-title");
  // bannerTagline = document.getElementById("ybo-head-sub");
  // bannerImage.style.backgroundImage = "url('images/banners/" + picPaths[0] + "')";
  // bannersubtitle.innerHTML = "";
  // bannerTagline.innerHTML = "";
  // bannerSubImage = document.getElementById("banner-sub-image");
  // startInterval();
});


async function initMap() {
  console.log("Maps JavaScript API loaded.");
}

window.initMap = initMap;