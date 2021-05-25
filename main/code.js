var slideIndex = 1;
var timeout;

function plusSlides(n) {
    if(!isNaN(n))
    {
      slideIndex += n;
    }
    showSlides(slideIndex, true);
    clearTimeout(timeout);
    timeout = setTimeout(showSlides, 3000);
}

function showSlides(n, flaga=false) {
  var i;
  var slides = document.getElementsByClassName("fade_obr");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  if(flaga == false) slideIndex++;

  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  clearTimeout(timeout);
  timeout = setTimeout(showSlides, 3000);
}