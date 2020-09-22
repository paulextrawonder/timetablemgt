 <?php 
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: adminlog");
  exit;
}

$level = trim($_GET['level']);
$semester = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $semester = trim($_POST['semester']);
  $level = trim($_POST['level']);
  

}

if (!empty($semester)) {
  header('location: panelAddcourse1?level='.$level.'&&semester='.$semester);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Select semester page </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
</head>
        <body>
    <?php include_once 'sideBar.php'; ?>

           
<!--this is the third page-->
              <div id="third_page" style="margin-left: 20%;" >
                <ul class="top_nav3">
                  <li class="note1">Students > year <?php echo $level; ?></li>
                  <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                    <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                    </span></a>
                  </li>
                </ul>

                <h2 class="header">Register Courses</h2>

                <!--form for select semester-->
<form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post">
  <!-- this is the select semester accordion-->
  <div class="flex">
<p class="semester">Semester</p>
<div class="panel-group over">
  <div class="panel" style="border-top: 2px solid #b3b3b3;border-bottom: 1px solid #b3b3b3;
   border-left: 2px solid #b3b3b3;border-right: 2px solid #b3b3b3;">
    <div class="panel-heading" style="background-color: white;">
      <h4 class="panel-title" style="color: #b3b3b3;">
        <a href="#my56" data-toggle= "collapse" class="txtnicon">
          <span class="txxt">Select Semester</span>
          <span class="glyphicon glyphicon-menu-down arrow" id="dwn"></span>
           <span class="glyphicon glyphicon-menu-up arrow" id="up" style="display: none" onclick="arrows()"></span>
        </a>
      </h4>
      <div id= "my56" class= "panel-collapse collapse">
        <div class= "panel-body content">
          <input type="radio" name="semester" value= "1" id="sem1" required style="margin-bottom: 5%; margin-right: 10%;"/> First Semester <br>
          <input type="radio" name="semester" value= "2" id="sem2" required style="margin-right: 10%;"/> Second Semester
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="level" value="<?php echo($level) ?>">
</div>
</div>
<input name="submit" type="submit" class="save" value="submit">
</form>
              </div>


                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                   <script src="adminPanelExtension.js"></script>

                   <script>
                

</script>
        </body>
       
</html>
