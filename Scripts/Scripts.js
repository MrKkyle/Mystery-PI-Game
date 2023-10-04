let buttons = document.querySelectorAll(".button5");
let info = document.querySelectorAll(".database-div");
let edit = document.getElementById("edit");

for(let i = 0; i < buttons.length; i++)
{
    buttons[i].onclick = function(event)
    {
        if(buttons[i].onclick)
        {
            edit.style.display = "none";
            info[i].style.display = "block";
        }
    }
}

/* Close Buttons */
let closeButton = document.querySelectorAll(".close");

for(let i = 0; i < closeButton.length; i++)
{
    closeButton[i].onclick = function(event)
    {
        if(closeButton[i].onclick)
        {
            edit.style.display = "block";
            info[i].style.display = "none";
        }
    }
}








