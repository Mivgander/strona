var slideIndex = 1;
var timeout;

function plusSlides(n) {
    if(!isNaN(n))
    {
      slideIndex += n;
    }
    showSlides(slideIndex,true);
    clearTimeout(timeout);
    timeout = setTimeout(showSlides, 6000);
}

function showSlides(n,flaga = false) {
  var i;
  var slides = document.getElementsByClassName("fade_obr");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  if(flaga === false){
  timeout = setTimeout(showSlides, 6000); 
  }
}