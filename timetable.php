<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
        <title>Exam Timetable page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="timetable.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
    </head>


    <body>
<nav>
        <ul class="topul">
                <li class="fed">Federal University of Technology,<br> Owerri</li>
                <li class="topli"><a href = "adminlog">Login</a></li>
                <li class="topli"><a href ="rules">Exam Rules and Regulation</a></li>
                <li class="topli"><a href ="calendar">Semester Calendar</a></li>
                <li class="topli"><a href ="halls">Exam Halls</a></li>
                <li class="topli"><a href ="index">Home</a></li>
            </ul>
            <div class="contain">
                    <img src= "Images/logo2.jpeg" style="width: 100%; height: 100%;" class="image">
                    <div class="top-right"> Exam Timetable </div>
                </div>
                </nav>


                <section>

                </section>

                <footer class="navbar-fixed-bottom">
                        <p>Copyright <span id="xam">2020</span> <b>-</b>
                             Federal University of Technology Owerri 
                             <span class="glyphicon glyphicon-hand-right"></span>
                              <span class="glyphicon glyphicon-hand-left"></span></p>
                           </footer>

        <script src= "jquery-3.4.1.min.js"></script>
        <script src= "jqueryui/jquery-ui.js"></script>     
        <script>
                function calendarYear(){
        var p;
        var w = new Date().getFullYear();
        p = document.getElementById("xam").innerHTML = w;
    }
    window.onload = calendarYear;
    
    
            </script>
    </body>
</html>