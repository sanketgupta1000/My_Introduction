let darkbutton=document.getElementById("toggledark");

function toggleDark(event)
{
    document.body.classList.toggle("dark-body");
    document.querySelector("header").classList.toggle("dark-header");
    document.getElementById("togglenavimg").classList.toggle("dark-togglenavimg");
    document.querySelector("nav").classList.toggle("dark-nav");
    let navlinks=document.getElementsByClassName("navlink");
    for(n of navlinks)
    {
        n.classList.toggle("dark-navlink");
    }
    let sections=document.querySelectorAll("section");
    for(s of sections)
    {
        s.classList.toggle("dark-section");
    }
    document.getElementById("uparrow").classList.toggle("dark-uparrow");

    if(event.target.innerHTML=="OFF")
    {
        event.target.innerHTML="ON";
        document.cookie="dark=on; path=/";
    }
    else
    {
        event.target.innerHTML="OFF";
        document.cookie="dark=off; path=/";
    }
}

darkbutton.addEventListener("click", toggleDark);

let e=new Event("click");

function load_dark()
{
    if(document.cookie.includes("dark=on"))
    {
        document.getElementById("toggledark").dispatchEvent(e);
    }
}

// load_dark();