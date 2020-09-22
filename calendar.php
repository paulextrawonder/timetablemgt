<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
        <title>View Semester Calendar</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="calendar.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
    </head>


    <body>
<nav>
        <ul class="topul">
                <li class="futo-logo"><img src="Images/logo2.jpeg" width="60" height= "60"></li>
                <li class="futo-logo-mobile"><img src="Images/logo2.jpeg" width="120" height= "120"></li>
                <li class="fed">Federal University of Technology,<br> Owerri</li>
                <li class="modal_icon"><span class="glyphicon glyphicon-menu-hamburger"
                    data-toggle="modal" data-target="#popup1"></span></li> <!--modal icon-->
            <li class="topli"><a href = "adminlog">Login</a></li>
            <li class="topli"><a href ="rules">Exam Rules and Regulation</a></li>
            <li class="topli"><a href ="calendar">Semester Calendar</a></li>
            <li class="topli"><a href ="halls">Exam Halls</a></li>
            <li class="topli"><a href ="index">Home</a></li>
            </ul>
            <div class="contain">
                <img src= "Images/logo2.jpeg" class="image" width="200" height ="210">
                <div class="top-right">Semester Calendar</div>
            </div>
            <!--mobile part-->
            <div class="for_mobile"> 
                <span class="texts" style="opacity: 0.5;">Semester Calendar</span>
                <!--modal menu-->
                  <div id="popup1" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: #114111; width: 57%; float: right; margin-top:-5%;">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" style="color: white; margin-top: 10%; margin-right: 3%;">&times;</button>
                                <h2 class="modal-title" style="color: white; align: left; margin-top: 5%; 
                                font-family:cursive; margin-left: 3%;">Welcome</h2>
                            </div>
                            <div class="modal-body" style="color: white; background-color: #114111;">
                                <p style="font-size: 20px; margin-top: 13px; margin-bottom: 6%; margin-left: 3%;">
                                    <i class="glyphicon glyphicon-home" style="margin-right: 4%; font-size: 25px;"></i><a href="index">Home</a></p>
                                <p style="font-size: 20px; margin-bottom: 6%; margin-left: 3%;">
                                    <i class="glyphicon glyphicon-picture" style="margin-right: 4%; font-size: 25px;"></i><a href="halls">Exam Halls</a></p>
                                <p style="font-size: 20px; margin-bottom: 6%; margin-left: 3%;">
                                    <i class="glyphicon glyphicon-calendar" style="margin-right: 4%; font-size: 25px;">
                                    </i><a href="calendar">Semester Calendar</a></p>
                                <p style="font-size: 20px; margin-bottom: 6%; margin-left: 3%;">
                                    <i class="glyphicon glyphicon-education" style="margin-right: 4%; font-size: 25px;">
                                    </i><a href="rules">Exam Rules and Regulation</a></p>
                                <p style="font-size: 20px; margin-left: 3%; margin-bottom: 6%;">
                                    <i class="glyphicon glyphicon-time" style="margin-right: 4%;
                                     font-size: 25px;"></i><a href="timetable">View Timetable</a></p>
                                      <a href="adminlog" class="btn btn-lg submit">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
            <section>
            <h4 class="download"><a href="#">Download pdf</a></h4>
            <div class="container">
            <h4 class="subtitle">HARMATTAN SEMESTER 2019/2020 Session</h4>
            <p>24TH NOVEMBER, 2019 <span>-</span> <span class="t">FRESH STUDENTS COME INTO RESIDENCE</span></p>
            <p>25TH NOVEMBER, 2019 <span>-</span> <span class="t">REGISTRATION OF FRESH STUDENTS BEGIN</span></p>
            <p>28TH NOVEMBER, 2019 <span>-</span> <span class="t"><b>SENATE</b></p>
            <p>1ST DECEMBER, 2019 <span>-</span> <span class="t">RETURNING (OLD) STUDENTS COME INTO RESIDENCE</span></p>
            <p>2ND DECEMBER, 2019 <span>-</span> <span class="t">RETURNING STUDENTS COMMENCE REGISTRATION</span></p>
            <p>7TH DECEMBER, 2019 <span>-</span> <span class="t"><b>CONVOCATION</b></span></p>
            <p>9TH DECEMBER, 2019 <span>-</span> <span class="t">REGISTRATION OF FRESH AND RETURNING STUDENTS CONTINUES</span></p>
            <p>16TH DECEMBER, 2019 <span>-</span> <span class="t">LECTURES COMMENCE FOR ALL STUDENTS/WEEK 1 LECTURES</span></p>
            <p>21ST DECEMBER, 2019 TO 4TH JANUARY, 2020 <span>-</span> <span class="t">CHRISTMAS AND NEW YEAR BREAK</span></p>
            <p>5TH JANUARY, 2020 <span>-</span> <span class="t">ALL STUDENTS RETURN TO CAMPUS</span></p>
            <p>6TH JANUARY, 2020 <span>-</span>  <span class="t">WEEK 2 LECTURES</span></p>
            <p>13TH JANUARY, 2020 <span>-</span>  <span class="t">WEEK 3 LECTURES</span></p>
            <p>20TH JANUARY, 2020 <span>-</span> <span class="t">WEEK 4 LECTURES</span></p>
            <p>27TH JANUARY, 2020 <span>-</span> <span class="t">WEEK 5 LECTURES</span></p>
            <p>6TH JANUARY, 2020 <span>-</span>  <span class="t">WEEK 2 LECTURES</span></p>
            <p>30TH JANUARY, 2020 <span>-</span> <span class="t"><b>SENATE</b></span></p>
            <p>3RD FEBRUARY, 2020 <span>-</span> <span class="t">WEEK 6 LECTURES/ END OF SUBMISSION OF 2018/2019 RAIN SEMESTER
                EXAMINATION COMPUTED RESULTS</span>
            </p>
            <p>10TH FEBRUARY, 2020 <span>-</span> <span class="t">WEEK 7 LECTURES/ MATRICULATION</span></p>
            <p>17TH FEBRUARY, 2020 <span>-</span> <span class="t">WEEK 8 LECTURES</span></p>
            <p>24TH FEBRUARY, 2020 <span>-</span> <span class="t">WEEK 9 LECTURES</span></p>
            <p>27TH FEBRUARY, 2020 <span>-</span> <span class="t"><b>SENATE</b></span></p>
            <p>2ND MARCH, 2020 <span>-</span> <span class="t">WEEK 10 LECTURES</span></p>
            <p>9TH MARCH, 2020 <span>-</span> <span class="t">WEEK 11 LECTURES</span></p>
            <p>16TH MARCH, 2020 <span>-</span> <span class="t">WEEK 12 LECTURES</span></p>
            <p>23RD MARCH, 2020 <span>-</span> <span class="t">WEEK 13 LECTURES/ REVISION</span></p>
            <p>26TH MARCH, 2020 <span>-</span> <span class="t"><b>SENATE</b></p>
            <p>30TH MARCH, 2020 <span>-</span> <span class="t">HARMATTAN SEMESTER EXAMINATION BEGINS</span></p>
            <p>6TH APRIL, 2020 <span>-</span> <span class="t">HARMATTAN SEMESTER EXAMINATION CONTINUES</span></p>
            <p>10TH APRIL, 2020 <span>-</span> <span class="t">GOOD FRIDAY</p>
            <p>14TH APRIL, 2020 <span>-</span> <span class="t">HARMATTAN SEMESTER EXAMINATION CONTINUES</span></p>
            <p>20TH APRIL, 2020 <span>-</span> <span class="t">HARMATTAN SEMESTER EXAMINATION CONTINUES</span></p>
            <p>25TH APRIL, 2020 <span>-</span> <span class="t">END OF HARMATTAN SEMESTER</span></p>
            <p>26TH APRIL, 2020 TO 9TH MAY, 2020 <span>-</span> <span class="t">HARMATTAN SEMESTER BREAK</span></p>
            <p>1ST MAY, 2020 <span>-</span> <span class="t">WORKERS DAY</span></p>
            </div>
            <h4 class="download2"><a href="#">Download pdf</a></h4>
            <p class="scroll"><a href= "#top"><span class="glyphicon glyphicon-arrow-up"></span></a></p>
            </section>
           
            <footer>
                    <p>Copyright <span id="xam" style="margin-left: 4px; margin-right: 0%;">2020</span> <b>-</b>
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