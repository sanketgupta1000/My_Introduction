let locationbtn=document.getElementById("currentlocbtn");
let locationpara=document.getElementById("currentloc");

function success(position)
{
    let lat=position.coords.latitude;
    let long=position.coords.longitude;

    locationpara.innerHTML="Latitude:"+lat+"°  Longitude:"+long+"°";
}

function failure()
{
    locationpara.innerHTML="Unable to retrieve your location. Check location permission, as well as your connection.";
}

function displayLocation()
{
    locationpara.innerHTML="";

    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(success, failure);
    }
    else
    {
        locationpara.innerHTML="Your browser does not support location!";
    }

    // let panel=document.querySelector(".accordion_panel");
    // console.log(panel);
    // console.log(panel.scrollHeight);
    // panel.style.height=panel.scrollHeight;
}

locationbtn.addEventListener("click", displayLocation);