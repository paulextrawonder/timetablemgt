 <?php 
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: adminlog");
  exit;
}

include_once 'addCourse.php';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Update invigilators page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
     <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">

    <style>
       .input{
        margin-top: -1%; margin-bottom: -1%;
        width: 80%; height: 37px; border: 0px;
        margin-left: -1%; padding-left: 1%;
       }
       .input:focus, .input:active{
         border: 0px; outline: none;
       }
       
        </style>
</head>
        <body onload="updateTable()">
   <?php include_once 'sideBar.php'; ?>


              <!--sixth page-->
              <div id="sixth" style="margin-left: 20%;">
                <ul class="top_nav3">
                  <li class="note1">Invigilators</li>
                  <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                    <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                    </span></a>
                  </li>
                </ul>

                <p class="notice2">Please insert the names of all lecturers in your department for exam
                  invigilation purpose.
                </p>

                  <!-- <button class=" btn btn-lg addCourse" data-toggle="modal" data-target="#addInvigilator">Add Invigilator</button> -->

                  <!-- <div align="center" style="width: auto; height: auto; border: 1px solid green; border-radius: 5px; align-content: center; margin: 50px">
 -->
                      <?php include_once 'invigilator_list.php'; ?>
                      
                    <!-- </div> -->
                    
                </div>

                <span class="glyphicon glyphicon-plus add" data-toggle="modal" data-target="#addInvigilator"></span>


                <!--modal-->
                  <div id="addInvigilator" class="modal fade" role ="dialog" aria-labelledby="addHallModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <!--modal header-->
                            <div class="modal-header">
                                <h2 class="modal-title" id="addHallModalLabel" >Add Invigilator</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <!--modal body-->
                            <div class="modal-body">
                  <!--form in modal-->
                              <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="POST">


                                 <input type="hidden" name="faculty" class="form-control" value="<?php echo($faculty) ?>" readonly>
                                  <input type="hidden" name="dept" class="form-control" value="<?php echo($dept) ?>" readonly>

                                <div class="form-group">
                                  <label class="col-form-label">Title</label>
                                  <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label">Full Name</label>
                                  <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label">Designation</label>
                                  <input type="text" name="designation" class="form-control" required>
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label">Contact Number</label>
                                  <input type="text" name="phone" class="form-control">
                                </div>
                                
                              </div>
                            <!--end of modal body-->

                            <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button name="addInvigilator" type="submit" class="btn btn-primary">Add</button>
                        </div>
                        
                      </form>

                  <!--end of modal-->
                                </div>



                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="js/sweetalert2.min.js">"></script>

                <?php include_once 'sweetalert2.php' ?>
                  

                  
        </body>
       
</html>

<?php
include_once 'addInvigilator.php';
?>