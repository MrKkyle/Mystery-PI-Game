
let d_elements = document.querySelectorAll(".d-elements");
let modal = document.querySelector(".modal");
let board = document.querySelector(".board");
let timer = document.getElementById("app");
let hint = document.getElementById("hint");
let text = document.querySelectorAll(".text");
var img = document.querySelectorAll('.img');
let hide = document.getElementById("hide");
let message2 = document.getElementById("message-2");
/* Set the images  */ 
Image1 = "../../../Media/Stages/usa1.jpg";
Image2 = "../../../Media/Stages/usa2.jpg";
Image3 = "../../../Media/Stages/usa3.jpg";

array = [Image1, Image2, Image3];

for(let i = 0; i < (d_elements.length - 1); i++)
{
    d_elements[i].addEventListener("click", () =>
    {
        /* hide modal */
        modal.style.animation = "fadeOut 1s ease-out";
        setTimeout(() =>
        { 
            modal.style.display = "none";
            modal.style.opacity = "0";
        }, 1000);


        /* show board */
        board.style.animation = "fadeIn 1s ease-out";
        board.style.opacity = "1";
        setTimeout(() =>
        { 
            board.style.display = "block";
            board.style.backgroundImage = 'url(' + array[i] + ')';
            timer.style.display = "block";
        }, 100);
        

    });
}

/* Text animation */

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

/* Randomizes the images */
var winWidth = 1850;
var winHeight = 900;

for (let i = 0; i < img.length; i++ ) 
{
    var thisDiv = img[i];
    randomTop = getRandomNumber(0, winHeight);
    randomLeft = getRandomNumber(0, winWidth);
    
    // update top and left position
    img[i].style.top = randomTop +"px";
    img[i].style.left = randomLeft +"px";
    
}
function getRandomNumber(min, max) 
{
  return Math.random() * (max - min) + min;
}

/* Displays the images */
let list = document.querySelector(".list");
let ul = document.createElement("ul");

function easyMode()
{
    let array = [];
    element = ~~(Math.random() * img.length);
    for(let i = 0; i < 15; i++)
    { 
        while(array.includes(element))
        {
            element = ~~(Math.random() * img.length); 
        }
        array[i] = element;
        img[element].style.display = "block";

        let li = document.createElement("li");
        li.innerHTML = img[element].id;

        ul.appendChild(li);
    }
    list.appendChild(ul);
}
function mediumMode()
{
    let array = [];
    element = ~~(Math.random() * img.length);
    for(let i = 0; i < 35; i++)
    { 
        while(array.includes(element))
        {
            element = ~~(Math.random() * img.length); 
        }
        array[i] = element;
        img[element].style.display = "block";

        let li = document.createElement("li");
        li.innerHTML = img[element].id;

        ul.appendChild(li);
    }
    list.appendChild(ul);
}
function hardMode()
{
    let array = [];
    element = ~~(Math.random() * img.length);
    for(let i = 0; i < 48; i++)
    { 
        while(array.includes(element))
        {
            element = ~~(Math.random() * img.length); 
        }
        array[i] = element;
        img[element].style.display = "block";

        let li = document.createElement("li");
        li.innerHTML = img[element].id;

        ul.appendChild(li);
    }
    list.appendChild(ul);
}

/* Configure the difficulties */
d_elements[0].addEventListener("click", () =>
{
    easyMode();

    /* Enable Hint */
    hint.style.display = "block";

    /* IF an image is clicked make the list item turn green */
    let li = document.querySelectorAll("li");
    let message = document.getElementById("message");
    let count = 0;
    for(let i = 0; i < img.length; i++)
    {
        img[i].addEventListener("click", () =>
        {
            for(let z = 0; z < li.length; z++)
            {
                if(li[z].innerHTML == img[i].id)
                {
                    li[z].style.color = "green";
                    count++;
                }
                if(count >= 15)
                {
                    message.style.animation = "fadeIn 1s ease-in"
                    setTimeout(() =>{message.style.display = "block"; message.style.opacity = "1";}, 1000); 
                    clearInterval(timerInterval);
                    ptime.innerHTML = formatTime(timeLeft);
                }

            }
            img[i].style.zIndex = "-1";
        });
    }
});
d_elements[1].addEventListener("click", () =>
{
    mediumMode();
    /* IF an image is clicked make the list item turn green */
    let li = document.querySelectorAll("li");
    let message = document.getElementById("message");
    let count = 0;
    for(let i = 0; i < img.length; i++)
    {
        img[i].addEventListener("click", () =>
        {
            for(let z = 0; z < li.length; z++)
            {
                if(li[z].innerHTML == img[i].id)
                {
                    li[z].style.color = "green";
                    count++;
                }
                if(count >= 35)
                {
                    message.style.animation = "fadeIn 1s ease-in"
                    setTimeout(() =>{message.style.display = "block"; message.style.opacity = "1";}, 1000); 
                    clearInterval(timerInterval);
                    ptime.innerHTML = formatTime(timeLeft);
                }

            }
            img[i].style.zIndex = "-1";
        });
    }
});
d_elements[2].addEventListener("click", () =>
{
    hardMode();
    /* IF an image is clicked make the list item turn green */
    let li = document.querySelectorAll("li");
    let message = document.getElementById("message");
    let count = 0;
    for(let i = 0; i < img.length; i++)
    {
        img[i].addEventListener("click", () =>
        {
            for(let z = 0; z < li.length; z++)
            {
                if(li[z].innerHTML == img[i].id)
                {
                    li[z].style.color = "green";
                    count++;
                }
                if(count >= 48)
                {
                    message.style.animation = "fadeIn 1s ease-in"
                    setTimeout(() =>{message.style.display = "block"; message.style.opacity = "1";}, 1000); 
                    clearInterval(timerInterval);
                    ptime.innerHTML = formatTime(timeLeft);
                }

            }
            img[i].style.zIndex = "-1";
        });
    }
});

/* Script to hide/show main elements */

hide.onmousedown = function(event)
{
    timer.style.display = "none";
    list.style.display = "none";
    hint.style.display = "none";
}
hide.onmouseup = function(event)
{
    timer.style.display = "block";
    list.style.display = "block";
}

/* Hint Script only available in easy mode */
hint.onclick = function(event)
{
    for(let i = 0; i < img.length; i++)
    {
        img[i].style.border = "2px solid green";
        setTimeout(() =>
        { 
            img[i].style.border = "none";
        }, 1000);
    }
    hint.style.display = "none";
}


/* Script for the Timer div element */
const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

const COLOR_CODES = 
{
  info: 
  {
    color: "green"
  },
  warning: 
  {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: 
  {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};
let TIME_LIMIT = 0;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class = "base-timer">
  <svg class = "base-timer__svg" viewBox = "0 0 100 100" xmlns = "http://www.w3.org/2000/svg">
    <g class = "base-timer__circle">
      <circle class = "base-timer__path-elapsed" cx = "50" cy = "50" r = "45"></circle>
      <path
        id = "base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d = "
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id = "base-timer-label" class="base-timer__label">
    ${formatTime(timeLeft)}
  </span>
</div>
`;

function onTimesUp() 
{
  clearInterval(timerInterval);
}

function startTimer(TIME_LIMIT) 
{
  timerInterval = setInterval(() => 
  {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(timeLeft);
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) 
    {
      onTimesUp();
      message2.style.animation = "fadeIn 1s ease-in"
      setTimeout(() =>{message2.style.display = "block"; message2.style.opacity = "1";}, 1000);
    }
  }, 1000);
}

function formatTime(time) 
{
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) 
  {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) 
{
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) 
  {
    document.getElementById("base-timer-path-remaining").classList.remove(warning.color);
    document.getElementById("base-timer-path-remaining").classList.add(alert.color);
  } 
  else if (timeLeft <= warning.threshold) 
  {
    document.getElementById("base-timer-path-remaining").classList.remove(info.color);
    document.getElementById("base-timer-path-remaining").classList.add(warning.color);
  }
}

function calculateTimeFraction() 
{
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() 
{
  const circleDasharray = `${(calculateTimeFraction() * FULL_DASH_ARRAY).toFixed(0)} 283`;
  document.getElementById("base-timer-path-remaining") .setAttribute("stroke-dasharray", circleDasharray);
}


















