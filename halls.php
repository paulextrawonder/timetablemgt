<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
        <title>Exam Halls</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="halls.css">
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
                    <img src= "Images/logo2.jpeg" style="width: 100%; height: 100%;" class="image">
                    <div class="top-right">Exam Halls</div>
                </div>
                <!--mobile version of header-->
                <div class="for_mobile"> 
                    <span class="text">Exam Halls</span>
                    <span class="glyphicon glyphicon-search" id="searchIcon" onclick="hide()"></span> 
                      
                      <!--modal-->
                      <div id="popup1" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color: #114111; width: 57%; float: right; margin-top:-5%; margin-right: -34%;">
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
                                        <i class="glyphicon glyphicon-time" style="margin-right: 4%; font-size: 25px;"></i><a href="timetable">View Timetable</a></p>
                                      <a href="adminlog" class="btn btn-lg">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of modal-->
                </div>
                <div class="inputWithIcon">
                    <input type="text" id="box" onmouseout="show()">
                    <i class="glyphicon glyphicon-search"></i>
                </div>
            </nav>
           <!--end of header-->

        <section>
            <div class="container" style="border-bottom: 1px solid #114111; 
            margin-bottom: 3%;">
               <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                      <img src="Images/hall1.jpg" class="card-img-top" alt="card image">
              <div class="card-block">
                  <h4 class="card-title lead"> SEET COMPLEX</h4>
              </div>
          </div>
        </div>
        <div class="col-md-6">
                <div class="card" >
                    <img src="Images/hall2.jpeg" class="card-img-top" alt="card image">
                    <div class="card-block">
                        <h4 class="card-title lead"> SCIT BUILDING</h4>
                    </div>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                  <img src="Images/hall3.jpg" class="card-img-top" alt="card image">
          <div class="card-block">
              <h4 class="card-title lead"> SEET COMPLEX</h4>
          </div>
      </div>
    </div>
    <div class="col-md-6">
            <div class="card" >
                <img src="Images/hall4.jpeg" class="card-img-top" alt="card image">
                <div class="card-block">
                    <h4 class="card-title lead"> HALL OF MERCY</h4>
                </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
              <img src="Images/hall5.jpg" class="card-img-top" alt="card image">
      <div class="card-block">
          <h4 class="card-title lead"> AFRI HUB</h4>
      </div>
  </div>
</div>
<div class="col-md-6">
        <div class="card" >
            <img src="Images/hall6.jpg" class="card-img-top" alt="card image">
            <div class="card-block">
                <h4 class="card-title lead"> SCHOOL OF HEALTH BUILDING</h4>
            </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
          <img src="Images/hall1.jpg" class="card-img-top" alt="card image">
  <div class="card-block">
      <h4 class="card-title lead"> SEET COMPLEX</h4>
  </div>
</div>
</div>
<div class="col-md-6">
    <div class="card" >
        <img src="Images/hall2.jpeg" class="card-img-top" alt="card image">
        <div class="card-block">
            <h4 class="card-title lead"> SCHOOL OF HEALTH BUILDING</h4>    
        </div>
    </div>
  </div>
  </div>
            </div>
            <div class="container">
<ul class="pager">
      <li class="next"><a href="#" class= "btn btn-success-outline">Next</a></li>
      <li class="previous"><a href="#" class="btn btn-success-outline">Previous</a></li> 
      <li class="paginatn"><a href="#">1</a></li> 
      <li class="paginatn"><a href="#">2</a></li>
      <li class="paginatn"><a href="#">3</a></li>
      <li class="paginatn"><a href="#">4</a></li>   
 </ul>
 </div>
        </section>
        <footer>
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

function hide(){
    var m;
    document.getElementById("searchIcon").style.display = "none";
m = document.getElementById("box");
m.style.border = "1px solid white";
}

function show(){
    var m;
    document.getElementById("searchIcon").style.display = "inline";
m = document.getElementById("box");
m.style.border = "0px";
}


$(document).ready(function(){
    $("#box").autocomplete({source: ["SEET COMPLEX", "SMAT COMPLEX", "SOSC EXTENSION", 
"FWT BUILDING", "SOPS BUILDING", "IMT HALLS", "FMT HALLS", "SOHT COMPLEX", "OPTOMETRY BUILDING",
 "EVT HALLS", "MECHANICAL BUILDING", "SOBS BUILDING", "NXE BUILDING"]}, {minLength: 2});
});

        </script>
    </body>
</html>