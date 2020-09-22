 <?php 
//session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: adminlog");
  exit;
}
include_once 'config.php';

$email = $_SESSION['email'];
$id = $_SESSION['id'];

// Attempt select query execution
                    $sql = "SELECT * FROM admin WHERE email = '$email'";
                    if($result = mysqli_query($dbconnected, $sql)){
                      $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                $index = 0;
                                while($row = mysqli_fetch_array($result)){                                  
                                    $index++;
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $faculty = $row['faculty'];
                                    $dept = $row['dept'];
                                    $designation = $row['designation'];

                          }
                           // Free result set
                            mysqli_free_result($result);
                        } else{
                            header('location: adminlog');
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);

                        // Close connection
                    //mysqli_close($dbconnected);
                    }
 
                                        
?>

 <nav class="nav1">
    <ul class="sidenav">
        <li><h4>Admin</h4></li>
        <li class="edit1">
            <img src="Images/p2.jpg" class="dp" width="90" height="90">
            <p class="name"><?php echo $name?></p>
            <p class="mail"><?php echo $email ?></p>
        </li>

        <li class="edit2">
          <!--password-->
            <p class="first"><a href="panelChangepassword">
              <span class="glyphicon glyphicon-lock"></span><br><span style="opacity: 0.5;">password</span></a></p>
              <!--profile-->
            <p class="second"><a href="panelProfile">
              <span class="glyphicon glyphicon-user prof"></span><br><span style="opacity: 0.5;">Profile</span></a></p>
              <!--logout-->
            <p class="third"><a href="logout"><span class="glyphicon glyphicon-log-out"></span><br><span style="opacity: 0.5;">Logout</span></a></p>
        </li>

        <!--home-->
        <li class="edit3">
          <p><a href="panelHome"><span class="glyphicon glyphicon-home" style="color: #1dc81d;"></span>
            <span class="hometext" style="color:#1dc81d;">Home</span></a></p>  
        </li>

        <li class="edit4">
          <!--this is the students' accordion-->
                <div class="panel-group" id="myaccordion">
                    <div class="panel panel-primary" style="border: 0;">
                        <div class="panel-heading" style="background-color: #45403a; border: 0px;">
                            <h4 class="panel-title">
                                <a href="#udemy765" data-parent="#myaccordion" data-toggle="collapse">
                                    <p style="margin: 0; padding: 0;">
                                      <span class="glyphicon glyphicon-user student"></span>
                                        <span class="acc"style="">
                                          Students</span><span class="glyphicon glyphicon-menu-down" id="me" onclick="menus()"></span> 
                                          <span class="glyphicon glyphicon-menu-up" style="display: none;" id="me2" onclick="menuss()"></span>
                                      </p>
                                </a>
                            </h4>
                        </div>
                        <div id="udemy765" class="panel-collapse collapse">
                            <div class="panel-body" style="border: 0px;">
              <ul class="inner_ul">
            <li class="inner_li"><a href="panelSelectsemester1?level=100">
              <span class="glyphicon glyphicon-user sub1"></span>
              <span style="font-size: 12px; font-style: italic;">year 1</span></a></li>
            <li class="inner_li"><a href="panelSelectsemester1?level=200">
              <span class="glyphicon glyphicon-user sub2"></span>
              <span style="font-size: 12px; font-style: italic;">year 2</span></a></li>
            <li class="inner_li"><a href="panelSelectsemester1?level=300">
              <span class="glyphicon glyphicon-user sub3">
              </span><span style="font-size: 12px; font-style: italic;">year 3</span></a></li>
            <li class="inner_li"><a href="panelSelectsemester1?level=400">
              <span class="glyphicon glyphicon-user sub4">
            </span><span style="font-size: 12px; font-style: italic;">year 4</span></a></li>
            <li class="inner_li" style="padding-bottom: 0%;"><a href="panelSelectsemester1?level=500">
              <span class="glyphicon glyphicon-user sub5"></span>
              <span style="font-size: 12px; font-style: italic;">year 5</span></a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
          </li>
          <!--halls-->
          <li class="edit5">
            <p ><a href="panelHall"><span class="glyphicon glyphicon-picture"></span><span class="hometext">Halls</span></a></p>  
          </li>
          <!--invigilators-->
          <li class="edit6">
            <p><a href="panelInvigilator"><span class="glyphicon glyphicon-user invigilator">
            </span><span class="hometext">Invigilators</span></a></p>  
          </li>
          <!--message-->
          <li class="edit7">
            <p><a href="panelMessage"><span class="glyphicon glyphicon-envelope"></span><span class="hometext">Message</span></a></p>  
          </li>
    </ul>
    </nav>