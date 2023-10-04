/* Start button onclick */
let main = document.querySelector(".main");
let aref = document.getElementById("aref");
let start = document.getElementById("start");
let stage = document.getElementById("stage");
let slide = document.getElementById("ss");
let share = document.getElementById("share");
let message = document.getElementById("message");
let sp1 = document.getElementById("sp1");

start.addEventListener("click", () =>
{
    main.style.animation = "fadeOut 1s ease-out";
    main.style.opacity = "0";
    aref.style.animation = "fadeOut 1s ease-out";
    aref.style.opacity = "0";

    setTimeout(() =>{ main.style.display = "none"; aref.style.display = "none";}, 1000);

    setTimeout(() =>
    {
        stage.style.animation = "fadeIn 1s ease-in";
        stage.style.display = "block";
        stage.style.opacity = "1";
        ss.style.display = "block";

    }, 1000);

});

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
    main.style.animation = "fadeIn 1s ease-in";
    main.style.opacity = "1";
    aref.style.animation = "fadeIn 1s ease-in";
    aref.style.opacity = "1";
    setTimeout(() =>{ main.style.display = "block"; aref.style.display = "block";}, 1000);

});

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

/* Share button onclick */
share.addEventListener("click", () =>
{
    /* Fade out main and aref */
    main.style.animation = "fadeOut 1s ease-out";
    main.style.opacity = "0";
    aref.style.animation = "fadeOut 1s ease-out";
    aref.style.opacity = "0";
    setTimeout(() =>{ main.style.display = "none"; aref.style.display = "none";}, 1000);

    /* Fade in message */
    message.style.animation = "fadeIn 1s ease-in";
    message.style.opacity = "1";
    setTimeout(() =>{message.style.display = "block";}, 1000);

    sp1.onclick = function(event)
    {
        /* Fade in message */
        message.style.animation = "fadeOut 1s ease-in";
        message.style.opacity = "0";
        setTimeout(() =>{message.style.display = "none";}, 1000);

        /* Fade out main and aref */
        main.style.animation = "fadeIn 1s ease-in";
        main.style.opacity = "1";
        aref.style.animation = "fadeIn 1s ease-in";
        aref.style.opacity = "1";
        setTimeout(() =>{ main.style.display = "block"; aref.style.display = "block";}, 1000);
    }
});







