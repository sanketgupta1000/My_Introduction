let nav = document.querySelector("nav");
let imgbtn = document.getElementById("togglenav");

function toggleNav() {
    if (nav.style.height) {
        nav.style.height=null;
    }
    else {
        nav.style.height=nav.scrollHeight+"px";
    }
}

imgbtn.addEventListener("click", toggleNav);