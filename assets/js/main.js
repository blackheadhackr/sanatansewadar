/**
 * Scroll Top
 */

const scrollTop = document.querySelector(".scroll-top");
if (scrollTop) {
  const togglescrollTop = function () {
    window.scrollY > 100
      ? scrollTop.classList.add("active")
      : scrollTop.classList.remove("active");
  };
  window.addEventListener("load", togglescrollTop);
  document.addEventListener("scroll", togglescrollTop);
  scrollTop.addEventListener(
    "click",
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    })
  );
}


/**
 * JQUERY DATE [Date of Birth] (JOIN US PAGE)
 */

$(document).ready(function () {
  $(function () {
    $('#datepicker').datepicker({
      format: 'dd/M/yyyy'
    });
  });
});



/**
 * Service Page Slider
 */

var arrImages = [ 
  "assets/image/services/gallery1.jpg", 
  "assets/image/services/gallery2.jpg", 
  "assets/image/services/gallery3.jpg", 
  "assets/image/services/gallery4.jpg", 
  "assets/image/services/gallery5.jpg", 
];
                  

var i = 1; //We start at the second image, because the first one is loaded already by default
var image = document.getElementById("image");

function nextImage() {

  setTimeout(function () {
    image.style.opacity = 0;
  }, 4000);

  image.src = arrImages[i]; //Change picture
  image.style.opacity = 100;

  if (i + 1 >= arrImages.length) {
    i = 0;
  } else {
    i++;
  }

}

function startSlideshow() {
  image.src = arrImages[0]; //Load first picture by default
  image.style.opacity = 100;

  //Change opacity back to 0, 1 second before changing the picture
  setTimeout(function () { image.style.opacity = 0; }, 4000);

  setInterval(function () {
    nextImage()
  }, 5000);
}

startSlideshow();



