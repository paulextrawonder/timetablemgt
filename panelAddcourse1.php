 <?php 
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: adminlog");
  exit;
}

include_once 'addCourse.php';

$semester = trim($_GET['semester']);
$level = trim($_GET['level']);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Add Courses Here</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
     <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
    <style>
    .inputclass{
      width:100%; padding-left:20%; border:0px;
    }
  .inputclass:focus, .inputclass:focus{
    outline: none;
  } 
    </style>
</head>
        <body>
            <?php include_once 'sideBar.php'; ?>
            

              <!--fourth page-->
              <div id="fourth_page" style="margin-left: 20%;">
                <ul class="top_nav3">
                  <li class="note1">Students > year <?php echo $level; ?></li>
                  <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                    <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                    </span></a>
                  </li>
                </ul>
                <h2 class="header2">Course Details</h2>
                <button class=" btn btn-lg addCourse" data-toggle="modal" data-target="#popup1">Add Course</button>


<!--modal-->
<div id="popup1" class="modal fade">
  <div class="modal-dialogue">
      <div class="modal-content">
        <!--modal header-->
          <div class="modal-header">
              <button class="close" data-dismiss="modal" style=" color: white; background-color: black;
              margin-top: -5.1%; margin-right: -5.3%;
               font-size: 50px; padding-left: 1.3%;
                padding-right: 1.3%; border: 3px solid white;
                 border-radius: 50%;">&times;</button>
              <h2 class="modal-title lead">Add Course</h2>
          </div>
          <!--modal body-->
          <div class="modal-body">
<!--form in modal-->
            <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="POST">

              <input type="hidden" name="semester" value="<?php echo($semester) ?>"> 
              
             <div class="row" style="margin-top: 3%;">
               <div class="col-md-6">
          <span class="labels">School</span>  

          <select id="school" name="school" required>
          <option value="<?php echo($faculty) ?>" Readonly><?php echo($faculty) ?></option>
          
          </select>
               
          </div>
          <div class="col-md-6">
             <span style="margin-left: 4%;" class="labels">Dept.</span> 
             <select id="dept" name="dept" required>
             <option value="<?php echo($dept) ?>" Readonly><?php echo($dept) ?></option>
            <!-- <option value="aec">AEC</option>
             <option value="aex">AEX</option>
             <option value="ast">AST</option>
             <option value="cst">CST</option>
             <option value="fat">FAT</option> 
              <option value="fwt">FWT</option>
             <option value="sst">SST</option> -->
             <!--sbms-->
              <!-- <option value="ant">Anatomy</option>
             <option value="psy">Physiology</option> -->
             <!--sobs-->
             <!-- <option value="bch" id="sobs">BCH</option>
             <option value="bio" id="sobs">BIO</option>
             <option value="btc" id="sobs">BTC</option>
             <option value="mcb" id="sobs">MCB</option>
             <option value="forensic" id="sobs">Forensic Science</option> -->
             <!--sict-->
             <!-- <option value="csc" id="sict">CSC</option>
             <option value="ift" id="sict">IFT</option>
             <option value="cys" id="sict">CYS</option>
             <option value="software eng" id="sict">Softwr Eng</option> -->
             <!--seet-->
            <!--  <option value="abe">ABE</option>
             <option value="che">CHE</option>
             <option value="cie">CIE</option>
             <option value="eee">EEE</option>
             <option value="fst">FST</option> 
              <option value="mme">MME</option>
             <option value="mee">MEE</option>
             <option value="mechatronics">Mechatronics</option> 
              <option value="pet">PET</option>
             <option value="pte">PTE</option> -->
             <!--soet-->
             <!-- <option value="arc" id="soes">ARC</option>
             <option value="bld" id="soes">BLD</option>
             <option value="evt" id="soes">EVT</option>
             <option value="qst" id="soes">QST</option>
             <option value="svg" id="soes">SVG</option>
             <option value="urp" id="soes">URP</option> -->
             <!--smat-->
             <!-- <option value="fmt">FMT</option>
             <option value="mmt">MMT</option>
             <option value="pmt">PMT</option>
             <option value="tmt">TMT</option>
             <option value="mgt">MGT</option>  -->
              <!--soht-->
              <!-- <option value="bmt">BMT</option>
              <option value="dnt">DNT</option>
              <option value="opt">OPT</option>
              <option value="pot">POT</option>
              <option value="PHT">PHT</option>  -->
             <!--sops-->
            <!--  <option value="geo" id="sops">GEO</option>
             <option value="mth" id="sops">MTH</option>
             <option value="sta" id="sops">STA</option>
             <option value="chm" id="sops">CHM</option> -->
             
                    </select>
                  </div>
             </div>

             <div class="row" style="margin-top: 5%;">
                <div class="col-md-6">
            <span class="labels">Level</span>  
            <select id="level" name="level" required value = "<?php echo($level) ?>">
              <option value="<?php echo($level) ?>"><?php echo $level; ?></option>
            <!-- <option value="100">100</option>
           <option value="200">200</option>
           <option value="300">300</option>
           <option value="400">400</option>
           <option value="500">500</option> -->
                  </select>
                </div>
                <div class="col-md-6">
              <span style="margin-left: 4%;" class="labels">Course Code</span> 
              <select id="coursecode" name="ccode" required>
              <option value="">Select Course title</option>
              <option value="BIO101">BIO 101</option>
              <option value="CHM101">CHM 101</option>
              <option value="CHM102">CHM 102</option>
              <option value="ENG101">ENG 101</option>
              <option value="ENG103">ENG 103</option>
              <option value="FRN101">FRN 101</option>
              <option value="GST101">GST 101</option>
              <option value="GST103">GST 103</option>
              <option value="GST108">GST 108</option>
              <option value="IGB101">IGB 101</option>
               <option value="MTH101">MTH 101</option>
              <option value="PHY101">PHY 101</option>
                     </select>
                   </div>
              </div>
 <span class="labels">Course Title</span>
 <input type="text" id="course" name="ctitle" required style=" margin-top: 4%; margin-left: 5%; width: 80%;" class="textInput"><br>
 <span class="labels">Number Of Students</span>
 <input type="text" id="NOS" name="no_of_student" required style="margin-left: 5%; width: 71%; margin-top: 5%;" class="textInput"> <br> 

 <span class="labels">Unit</span>
   <select id="unit" name="cunit" required>
    <option value="">Select Course Unit</option>
  <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="6">6</option>
          </select>   <br>
          
          <button name="addCourse" class="btn btn-lg save" type="submit">Save</button>
 

            </form>
          </div>
          <!--end of modal body-->
      </div>
  </div>
</div>
<!--end of modal-->

                    <!-- <div align="center" style="width: auto; height: auto; border: 1px solid green; border-radius: 5px; align-content: center; margin: 50px"> -->
                     
                      <?php echo include_once 'courses_list.php'; ?>

                    <!-- </div> -->
               

                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                <script src="js/sweetalert2.min.js">"></script>

                 <?php include_once 'sweetalert2.php' ?>
              
        </body>
       
</html>
