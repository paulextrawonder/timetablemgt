<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>home page</title>
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

<!--first page-->
            <div style="margin-left: 20%;" id="first_page">
              <ul class="top_nav1">
                <li class="note1"><?php echo $faculty." - ".$dept." Department"; ?></li>
                <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                  <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                  </span></a>
                </li>
              </ul>
              <div class="page11">
                  <div class="img_class">
                    <img src="Images/woman.jpg" class="study">
                  </div>
  
                    <div class="text_class">
                      <h5>welcome!</h5>
                      <p style="text-align: justify;">
                        You are expected to confirm your departmental confirm your departmental<br> courses registered in the database,
                        and alert registered in the database,<br> the super admin if there may be any error. In addition any error. In addition
                        <br> to this, you are to submit the number you are to submit the number
                        of<br> students in each of the level and halls. in each of the level and halls.
                        <br><br> follow the steps below to complete your tasks. below to complete your tasks.
                      </p>
                    </div>
                </div>
                <div class="page12">
                  <div class="step1">
                  <button>Step1</button>
                  <div class="step1_text">Click on students<br> for each level. input<br>
                     the total number of<br> registered students</div>
                  </div>

                  <div class="step2">
                  <button>Step2</button>
                  <div class="step2_text">Click on halls, input <br>
                   your lecture halls<br> and capacity</div>
                  </div>

                      <div class="step3">
                          <button>Step3</button>
                          <div class="step3_text">Click on invigilators,<br>
                             input the names of<br> lecturers in your<br> department</div>
                  </div>
                </div>
              </div>
              

                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                  
        </body>
       
</html>
