
/* Play button onclick */
let main = document.getElementById("d-select");
let start = document.getElementById("g-select");
let stage = document.getElementById("stage");
let slide = document.getElementById("ss");

start.addEventListener("click", () =>
{
    main.style.animation = "fadeOut 1s ease-out";
    main.style.opacity = "0";
    setTimeout(() =>{ main.style.display = "none";}, 1000);

    setTimeout(() =>
    {
        stage.style.animation = "fadeIn 1s ease-out";
        stage.style.display = "block";
        stage.style.opacity = "1";
        ss.style.display = "block";
    }, 1000);

});

/* hover over a certain stage element changes the background */
let background = document.querySelector(".background-image");
let stage_element = document.querySelectorAll(".stage-elements");
/* Set the images  */ 
Image1 = "Mystery PI Game/Media/Slides/jp2.jpg";
Image2 = "Mystery PI Game/Media/Slides/c1.jpg";
Image3 = "Mystery PI Game/Media/Slides/usa1.jpg";
Image4 = "Mystery PI Game/Media/Slides/sa3.jpg";
array = [Image1, Image2, Image3, Image4];

for(let i = 0; i < stage_element.length; i++)
{
    stage_element[i].addEventListener("mouseover", () =>
    {
        background.style.backgroundImage = 'url(' + array[i] + ')';
    })
}


/* return button */
let rtn = document.getElementById("close");
rtn.addEventListener("click", () =>
{
    /* hide stage */
    stage.style.animation = "fadeOut 1s ease-out";
    stage.style.display = "block";
    stage.style.opacity = "0";
    stage.style.display = "none";
    ss.style.display = "none";

    /* show main */
    main.style.animation = "fadeIn 1s ease-out";
    main.style.opacity = "1";
    setTimeout(() =>{ main.style.display = "block";}, 1000);

});;

/* Text animation */
let text = document.querySelectorAll(".text");

for(let i = 0; i < text.length; i++)
{
    text[i].addEventListener("mouseover", () =>
    {
        text[i].nextElementSibling.style.width = "100%";
        text[i].nextElementSibling.style.height = "100%";
    }); 

    text[i].addEventListener("mouseout", () =>
    {
        text[i].nextElementSibling.style.width = "40%";
        text[i].nextElementSibling.style.height = "50%";
    });
}

/* Slideshow */
let slideIndex = 0;
showSlides();

function showSlides() 
{
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) 
  {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3000);
}

















