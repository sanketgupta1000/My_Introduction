function thisDark()
{
    let cards=document.getElementsByClassName("card");
    for(c of cards)
    {
        c.classList.toggle("dark-card");
    }
}

darkbutton.addEventListener("click", thisDark);