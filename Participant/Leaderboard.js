function openNav() 
{
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() 
{
    document.getElementById("myNav").style.height = "0%";
}

let open = document.getElementById("open");
let close = document.getElementById("close");

/* Get elements */
let btn = document.getElementById("rtn");
let table = document.querySelector(".table-info");

open.onclick = function(event)
{
    openNav();
    btn.style.display = "none";
    table.style.display = "none";
}

close.onclick = function(event)
{
    closeNav();
    setTimeout(() =>
    {
        btn.style.display = "block";
        table.style.display = "block";
    }, 500);
}