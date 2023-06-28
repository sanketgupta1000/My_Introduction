<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Sanket Gupta</title>
    <link rel="stylesheet" href="/My_Introduction/helpers/helper.css">
    <link rel="stylesheet" href="/My_Introduction/projects_memberships/helpers/helper.css">
    <style>

        section#projects
        {

        }

        section#showcases
        {
            padding: 0px;
        }

        .widecard
        {
            width: 350px;
            height: 520px;
        }

        .accordion
        {
            margin: 0px;
            padding: 10px 0px;
        }


        .accordion:hover,.accordion:active
        {
            background-color: #efb038;
            cursor: pointer;
        }

        .accordion_panel
        {
            height: 0px;
            overflow: hidden;
            transition: height 0.5s ease-out;
        }

    </style>

</head>
<body>
    <?php require("./../../helpers/helper.html"); ?>
    
    <section id="showcases">
        
        <h3 class="accordion">Showcases</h3>

        <div class="cardcont accordion_panel">

            <div class="card widecard">
                <h3>Geolocation API Showcase</h3>
                <div class="brief"><?php include("./helpers/location.html") ?></div>
            </div>
            <div class="card widecard">
                <h3>Drag-drop API Showcase</h3>
                <div class="brief"><?php include("./helpers/img_drag.html") ?></div>
            </div>

        </div>

    </section>

    <section id="projects">

        <h3>Projects:</h3>

        <div class="cardcont">

            <div class="card">
                <div class="imgcont"><img src="./images/tictactoe.png" alt=""></div>
                <h3>Tic-Tac-Toe</h3>
                <div class="brief">
                    A C Language adaptation of the children's game by the same name. I created this project in order to get a better hold of the fundamental concepts of C Language, such as looping and conditional statements. The two players input the position where they want to play their turns. I also took care of errorneous inputs by the players, like playing a turn at a position which already has a cross or circle, inputting an inexistent position.
                </div>
                <div class="linkcont"><a href="https://github.com/sanketgupta1000/Tic-Tac-Toe" target="_blank">Project Link</a></div>
            </div>

            <div class="card">
                <div class="imgcont"><img src="./images/unitconverter.png" alt=""></div>
                <h3>Unit Converter</h3>
                <div class="brief">
                    A highly accurate Unit Converter designed in C Language, with a custom database of its own which can be easily modified by a non-programmer. Creating this project helped I and my teammates realize how the concepts of programming are applied to real life. We learnt and used File Management in C to read from the custom database. The user also gets a log of all the conversions in a log folder, so that they can access their conversions anytime after.
                </div>
                <div class="linkcont"><a href="https://github.com/sanketgupta1000/Unit-Converter-using-C" target="_blank">Project Link</a></div>
            </div>

            <div class="card">
                <div class="imgcont"><img src="./images/supermart.jpg" alt=""></div>
                <h3>SuperMart</h3>
                <div class="brief">
                    An e-commerce website having both sides: the manager, and the customer. The manager is able to manage the stock in his inventory. The customer is able to view that inventory, add items to their cart, and place order. After successful order, the items get deducted from the inventory of the manager, and the customer is redired to a bill page where he can print the electronically generated bill. I and my teammates learnt many things about Web Development, specifically hoe the data flows between the three sides: database, server, client.
                </div>
                <div class="linkcont"><a href="" target="_blank">Project Link</a></div>
            </div>

            <div class="card">
                <div class="imgcont"><img src="./images/myintro.png" alt=""></div>
                <h3>My Introduction</h3>
                <div class="brief">
                    The frontend of a website that is supposed to serve as My Portfolio. It contains many pages such as the landing page, academics, projects, etc. I learnt a lof of concepts of HTML, CSS, as well as JS while creating this project. I learnt and implemented the concept of displaying information in the form of cards, the Geo-location API, the Drag-drop API. I also learnt accordion type of widgets and implemented. Lastly, I used flexbox to make the website responsive.
                </div>
                <div class="linkcont"><a href="">Project Link</a></div>
            </div>

        </div>

    </section>

    <?php require("./../../helpers/footer.html"); ?>

    <script src="./../../helpers/helper.js"></script>
    <script src="./../helpers/darkhelper.js"></script>
    <script>
        console.log("HI");
        let accordions=document.getElementsByClassName("accordion");
        
        function accordionToggle(event)
        {
            console.log("inside event handler");
            let panel=event.target.nextElementSibling;
            console.log(panel);
            
            event.target.classList.toggle("active");

            if(panel.style.height)
            {
                console.log("when clicked, height was non zero");
                panel.style.height=null;
            }
            else
            {
                console.log("when clicked, height was zero");
                panel.style.height=panel.scrollHeight+"px";
            }
        }
        
        for(a of accordions)
        {
            a.addEventListener("click", accordionToggle);
        }
    </script>
    <script>
        load_dark();
    </script>
    </body>
</html>