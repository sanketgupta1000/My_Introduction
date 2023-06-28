<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies | Sanket Gupta</title>

    <link rel="stylesheet" href="/My_Introduction/helpers/helper.css">
    <style>

        main
        {
            display: flex;
            flex-flow: row wrap;
        }

        main>section
        {
            flex: 400px;
        }

        section#philosophy
        {

        }

        section#books
        {
            
        }

        section#movies
        {

        }

        section#pokemon
        {

        }

        .content
        {
            
        }


        section.carousel
        {
            padding: 0px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #ffcf74;
        }

        button.switch
        {
            background: orange;
            width: 50px;
            height: 52px;
            border: 0;
        }
        
        button.switch:hover
        {
            background-color: #ffb734;
            cursor: pointer;
        }

        button#left
        {

        }

        button#right
        {

        }

        .imgpanel
        {

        }

        .carouselimg
        {
            width: 40vw;
            display: none;
        }

        #carousel1
        {
            display: block;
        }

        #carousel2
        {

        }

        #carousel3
        {

        }

        .fade
        {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade 
        {
            from {opacity: .4}
            to {opacity: 1}
        }

        .dark-switch
        {
            background-color: #6d6d6d !important;
            color: yellow !important;
        }

        .dark-switch:hover
        {
            background-color: gray !important;
        }

    </style>
</head>

<body>

    <?php include("./../helpers/helper.html"); ?>
    <h2>
        My Hobbies
    </h2>
    <section class="carousel">
        <button id="left1" class="switch">&#10094;</button>
        <div class="imgpanel">
            <img src="/My_Introduction/hobbies/images/neverletmego.jpg" alt="" class="carouselimg fade" id="carousel1" style>
            <img src="/My_Introduction/hobbies/images/interstellar.jpeg" alt="" class="carouselimg fade" id="carousel2" style>
            <img src="/My_Introduction/hobbies/images/pokemon.jpg" alt="" class="carouselimg fade" id="carousel3" style>
        </div>
        <button id="right1" class="switch">&#10095;</button>
    </section>

    <main>
    <!-- &#10094; -->
    <!-- &#10095; -->
        <section id="philosophy">
            <h3>My Philosophy</h3>
            <div class="content">
                My philosophy of life is that I try to enjoy whatever I do. I try to deep dive and know of the crux of the work that I am doing. I also believe that whatever we do, there has to be a very strong purpose behind it. This is because without purpose, one can never reach where they want to, or so I believe. I do believe in preferences too. Like I love reading, and writing, but others may like something else. One may not be good at science and stuff, but they may be good at art. It's all about personal choices. In the end, I believe, life is in vain if we did not do what we loved the most. The reason for this philosophy of mine are my experiences, my surroundings, and my hobbies.
            </div>
        </section>

        <section id="books">
            <h3>Books</h3>
            <div class="content">
                Books have been an inevitable part of my life, and they always will be. Since childhood, I was into fantasy movies, and as I grew up, I started reading fantasy books. The Hobbit, The Lord of the Rings, and Harry Potter have taught me how to live life in adverse situations. I have also written many stories inspired by these books, though never published. I have also grown a liking for Ruskin Bond books and stories, Falling in Love Again being my favourite. I also enjoy biographies/autobiographies to the fullest. The Diary of a Young Girl by Anne Frank, The Story of My Life by Helen Keller are among those read by me. And recently I have read Never Let Me Go by Kazuo Ishiguro. His unbelieveably realistic representation of imagination is what I love the most about him.
            </div>
        </section>

        <section id="movies">
            <h3>Movies</h3>
            <div class="content">
                I love movies with great stories. Though I started with fantasy movies, but I did not take much time in realizing what biographical movies have to offer. I have watched and loved Interstellar, with its beautiful soundtrack. It manages to capture the most beautiful emotion, the emotion of love, and represent it like never before. I also love Avatar, for its amazing stpry, and visuals. The bravery of Jake Sully with which he tries to defy the whole humanity is what amazes me. I have also watched biographical movies like The Theory of Everything, based on the life of Stephen Hawking, A Beautiful Mind, based on the life of John Nash, The Man who knew Infinity, based on the life of Srinivasa Ramanujan.
            </div>
        </section>

        <section id="pokemon">
            <h3>Pokemon Games</h3>
            <div class="content">
                Lastly, I play these amazing beautiful games developed by Gamefreak on my mobile phone, through emulators. Sometimes, I too feel that life is chaotic, and so I take some time for myself and play these Pokemon games. I have played quite a lot of them, from Gen. 1 games to Gen. 5 games. Each one, I love for its story, and its beautiful world. I am definitely amazed by how far gamefreak has come, in terms of the quality of experience they provide. I am definitely intrigued by the idea of catching my own Pokemon, training it, and battling Gyms.
            </div>
        </section>

    </main>
    <?php require("./../helpers/footer.html"); ?>

        <script src="./../helpers/helper.js"></script>
        <script>
            let leftbtn=document.getElementById("left1");
            let rightbtn=document.getElementById("right1");

            let count=document.getElementsByClassName("carouselimg").length;

            function showCarousel(id)
            {
                console.log(id);
                document.getElementById("carousel"+id).style.display="block";
                leftbtn.id="left"+id;
                rightbtn.id="right"+id;
            }

            function moveRight(event)
            {
                // console.log("inside move right");
                let id=event.target.id.substr(5);
                // console.log(id);
                // console.log(count);
                document.getElementById("carousel"+id).style.display="none";
                // console.log((Number(id)+1)>count);
                if((Number(id)+1)>count)
                {

                    showCarousel(1);

                }
                else
                {
                    showCarousel(Number(id)+1);
                }
            }

            function moveLeft(event)
            {
                let id=event.target.id.substr(4);
                document.getElementById("carousel"+id).style.display="none";

                if((Number(id)-1)<1)
                {
                    showCarousel(count);
                }
                else
                {
                    showCarousel(Number(id)-1);
                }
            }

            leftbtn.addEventListener("click", moveLeft);
            rightbtn.addEventListener("click", moveRight);


            function thisDark()
            {
                let switches=document.getElementsByClassName("switch");
                console.log(switches);
                for(s of switches)
                {
                    s.classList.toggle("dark-switch");
                }
            }

            darkbutton.addEventListener("click", thisDark);
        </script>
        <script>
            load_dark();
        </script>
</body>

</html>