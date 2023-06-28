<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education | Sanket Gupta</title>
    <link rel="stylesheet" href="/My_Introduction/helpers/helper.css">
    <style>
        body
        {
            /* background-color: #ffebb4; */
        }

        section#education
        {
            /* font-size: 17px; */
        }

        .tablecontainer
        {

        }

        table
        {
            margin: auto;
        }

        thead>tr
        {
            background-color: orange;
        }

        tbody>tr
        {
        }
        
        tbody>tr:nth-of-type(odd)
        {
            
            background-color: #ffc47e;
        }

        tbody>tr:nth-of-type(even)
        {
            background-color: #ffd29d;
        }

        td, th
        {

        }

        .dark-thtr
        {
            background-color: #231f1f;
        }

        .dark-tr:nth-of-type(odd)
        {
            background-color: #2d2d2d;
        }

        .dark-tr:nth-of-type(even)
        {
            background-color: #393939;
        }

    </style>
</head>
<body>
    <?php require("./../helpers/helper.html") ?>
    <section id="education">
        <h3>Education Details:</h3>
        <div class="tablecontainer">
            <table>
                <thead>
                    <tr>
                        <th>Qualification</th>
                        <th>Subjects</th>
                        <th>Completion Year</th>
                        <th>Institute</th>
                        <th>Grade</th>
                        <th>Activities</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SSC</td>
                        <td>
                            <ul>
                                <li>Mathematics</li>
                                <li>Science</li>
                                <li>Computer</li>
                            </ul>
                        </td>
                        <td>2020</td>
                        <td>Sacred Flower School</td>
                        <td>99.91 PR</td>
                        <td>
                            <ul>
                                <li>School Assembly Speaker</li>
                                <li>Annual Function Host</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>HSC</td>
                        <td>
                            <ul>
                                <li>Physics</li>
                                <li>Chemistry</li>
                                <li>Mathematics</li>
                                <li>Computer</li>
                            </ul>
                        </td>
                        <td>2022</td>
                        <td>Hebron</td>
                        <td>99.64 PR</td>
                        <td>
                            <ul>
                                <li>School Assembly Speaker</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>B.Tech. in Computer Engineering</td>
                        <td>
                            <ul>
                                <li>PPS</li>
                                <li>Software Workshop</li>
                                <li>Web Development</li>
                                <li>Mathematics</li>
                            </ul>
                        </td>
                        <td>2026 (Expected)</td>
                        <td>Dharmsinh Desai University</td>
                        <td>9.7 SPI (Sem. 1)</td>
                        <td>
                            <ul>
                                <li>Member of CSI DDU</li>
                                <li>Member of Codechef DDU Chapter</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <?php require("./../helpers/footer.html"); ?>
    <script src="./../helpers/helper.js"></script>
    <script>

        // let darkbutton=document.getElementById("toggledark");

        function thisDark()
        {
            document.querySelector("thead>tr").classList.toggle("dark-thtr");
            let trs=document.querySelectorAll("tbody>tr");
            for(t of trs)
            {
                t.classList.toggle("dark-tr");
            }
        }

        darkbutton.addEventListener("click", thisDark);
    </script>
    <script>
        load_dark();
    </script>
</body>
</html>