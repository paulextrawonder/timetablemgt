<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Enter exam Halls page</title>
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
        margin-top: -1.5%; margin-bottom: -1.5%;
        width: 90%; height: 37px; border: 0px;
        margin-left: -6%; padding-left: 6%;
       }
       .input:focus, .input:active{
         border: 0px; outline: none;
       }
      
    
    </style>
</head>
        <body>
    <?php include_once 'sideBar.php'; ?>
        
             
<!--fifth page halls page-->
                  <div id="fifth_page" style="margin-left: 20%;">
                      <ul class="top_nav3">
                        <li class="note1">Halls</li>
                         <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                          <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                          </span></a>
                        </li>
                      </ul>
          <p class="notice">Please insert your exam halls and their capacities that are in good position for examination</p>



        <!-- <button class=" btn btn-lg addCourse" data-toggle="modal" data-target="#addHall">Add Hall</button> -->
        
        
        <?php include_once 'hall_list.php' ?>
      

      <span class="glyphicon glyphicon-plus add" data-toggle="modal" data-target="#addHall"></span>


<!--modal-->
<div id="addHall" class="modal fade" role ="dialog" aria-labelledby="addHallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <!--modal header-->
          <div class="modal-header">
              <h2 class="modal-title" id="addHallModalLabel" >Add Hall</h2>
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
                <label class="col-form-label">Hall Name</label>
                <input type="text" name="hallName" class="form-control" required>
              </div>

              <div class="form-group">
                <label class="col-form-label">Hall Capacity</label>
                <input type="text" name="hallCapacity" class="form-control" required>
              </div>
              
            </div>
          <!--end of modal body-->

          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button name="addHall" type="submit" class="btn btn-primary">Add</button>
      </div>
      
    </form>

<!--end of modal-->
              </div>

              <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                   <script src="adminPanelExtension.js"></script> 
                    <script src="js/sweetalert2.min.js">"></script>

                    <?php include_once 'addHall.php'; ?>

                        <?php include_once 'sweetalert2.php' ?>
                   
        </body>
       
</html>

