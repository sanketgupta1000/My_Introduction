<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <link rel="stylesheet" href="/My_Introduction/helpers/helper.css">
    <style>

        body
        {
            background-color: #ffebb4;
        }

        form {
            display: table;
            margin: 40px auto;
            line-height: 2em;
            background-color: orange;
            padding: 23px 60px;
        }

        .inputitem {
            display: table-row;
        }

        .inputitem>label {
            display: table-cell;
        }

        .inputitem>input {
            display: table-cell;
        }

        input:valid {
            border: 2px solid greenyellow;
        }

        input:invalid {
            border: 2px solid red;
        }

        input[type="submit"] {
            padding: 7px 25px;
            border: 0px;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: rgb(214, 214, 216);
            cursor: pointer;
        }

        .dark-form
        {
            background-color: #343434;
        }

    </style>
</head>

<body>
    
    <?php require("./../helpers/helper.html") ?>

    <h2>Feedback Form</h2>

    <form action="backend.php" method="post">

        <div class="inputitem">
            <label for="anony">Do you want to give anonymous feedback? </label>
            <input type="checkbox" name="anony" id="anony">
        </div>


        <div class="inputitem userinfocontainer">
            <label for="name">Full Name: </label>
            <input type="text" id="name" required minlength="5" name="fullname">
        </div>
        <div class="inputitem userinfocontainer">
            <label for="email">Email: </label>
            <input type="email" id="email" required name="email">
        </div>
        <div class="inputitem userinfocontainer">
            <label for="phone">Mobile No.: </label>
            <input type="text" id="phone" required maxlength="10" minlength="10" pattern="[0-9]*"
                placeholder="Enter 10 digit mobile number" name="mobile">
        </div>


        <div class="inputitem">
            <label for="feedback">Feedback:</label>
            <textarea name="feedback" id="feedback" cols="30" rows="5" placeholder="Enter your feedback here." required
                minlength="10"></textarea>
        </div>

        <input type="submit" value="Submit">
    </form>

    <?php require("./../helpers/footer.html"); ?>


    <script src="./../helpers/helper.js"></script>
    <script>
        let consent = document.getElementById("anony");

        function toggleanonymous()
        {
            let userinfo = document.querySelectorAll(".userinfocontainer");
            if (consent.checked)
            {
                for (element of userinfo)
                {
                    element.style.display = "none";
                    element.querySelector("input").required = false;
                }
            }
            else
            {
                for (element of userinfo)
                {
                    element.style.display = "table-row";
                    element.querySelector("input").required = true;
                }
            }

        }

        consent.addEventListener("click", toggleanonymous);


        function thisDark()
        {
            document.querySelector("form").classList.toggle("dark-form");
        }

        darkbutton.addEventListener("click", thisDark);
    </script>
    <script>
        load_dark();
    </script>
</body>

</html>