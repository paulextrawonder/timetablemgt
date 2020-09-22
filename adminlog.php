<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: panelHome");
  exit;
}
 
// Include config file
require_once ("config.php");
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
 
    // Check if email is empty
    if(empty($email)){
        $email_err = "Please enter email.";
    }
    
    // Check if password is empty
    if(empty($password)){
        $password_err = "Please enter your password.";
    } // Compare password in database
    else{
            $sql = "SELECT password FROM admin WHERE email = '$email' ";
             if($result = mysqli_query($dbconnected, $sql)){
                $rowCount = mysqli_num_rows($result);
                  if($rowCount == 1){
                     while($row = mysqli_fetch_array($result)){    
                                                 
                       $db_pass = $row['password'];

                            $password_check =($password);
                                if ($password_check != $db_pass) {
                                    $password_err = "<span class = 'btn alert-danger'>Invalid password</span>";
                        }

                    }

                     mysqli_free_result($result);
                } else{
                     $email_err =  "<span class = 'btn alert-danger'>Invalid Email address</span>";
            }
        }                      
 
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM admin WHERE email = ?";
        
        // initialize the prepare statement.
        $stmt = mysqli_stmt_init($dbconnected);

        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
             // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){    

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $email);
                    if(mysqli_stmt_fetch($stmt)){
                        //$password_hash = password_hash($password, PASSWORD_DEFAULT);
                        //if(password_verify($password, $password_hash)){

                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;


                            
                            // Redirect user to welcome page
                            header("location: panelHome");
                        //} else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        // Close connection
    mysqli_close($dbconnected);
    }
    
    

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Login page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="adminlog.css">
        <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
        
    </head>

   
    <body>
            <ul>
                    <li class="futo-logo"><img src="Images/logo2.jpeg" width="60" height= "60"></li>
                <li class="fed">Federal University of Technology,<br> Owerri</li>
            <li><a href ="adminlog">Login</a></li>
            <li><a href ="rules">Exam Rules and Regulation</a></li>
            <li><a href ="calendar">Semester Calendar</a></li>
            <li><a href ="halls">Exam Halls</a></li>
            <li><a href ="index">Home</a></li>
            </ul>
          <div class="cover">
              <div class="imgcover">
                  <img src="Images/ii.jpg" style="width: 100%;">
              </div>
        <div class="Formcover">
                <span class="glyphicon glyphicon-user admin"></span> <h4> Log in</h4>
                <form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" class="hng" method="POST">

                    <label for="email">Email</label>
                <div class="inputWithIcon" style="margin-bottom: 1%;">
                    <input type="email" name="email" placeholder="@gmail.com" id="email" required>
                    <i class="glyphicon glyphicon-user" style="top:15px;"></i>
                    <span><?php echo "$email_err"; ?></span>
                </div>
    <p id="ist" style="margin-bottom: 8%;"></p>

    <label for="password" id="password-label">Password</label>
    <div class="inputWithIcon">
            <input type="password" name="password" placeholder="password" id="password" required>
            <i class="glyphicon glyphicon-lock" style="top: 15px;"></i>
            <span class="text-danger" ><?php echo "$password_err"; ?></span>
        </div>
        <p id="secs"></p>
        <span class="fp"><a href="#"> Forgot password?</a></span>
        <span class="check">Remember me <input type="checkbox" name="check"
            value="checkbox"> </span>
           
        <input type="submit" name="submit" value="Login" class="submit">
       
        </form>
   </div>
</div>
   <footer>
        <p>Copyright <span id="xam">2020</span> <b>-</b>
             Federal University of Technology Owerri 
             <span class="glyphicon glyphicon-hand-right"></span>
              <span class="glyphicon glyphicon-hand-left"></span></p>
           </footer>
          
    <!--mobile view-->
   
        <div class="overlay">
            <span class="glyphicon glyphicon-user admin_mobile"></span> <h4> Admin Login</h4>
            <form name="myFormz" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" class="hng" method="POST">
                <div class="inputWithIcon">
                    <input type="email" placeholder="@gmail.com" name="email">
                    <span><?php echo "$email_err"; ?></span>
                </div>
                <p id="txt"></p>
                <div class="inputWithIcon">
                        <input type="password" placeholder="password" name="password" >
                        <span><?php echo "$password_err"; ?></span>
                    </div>
                    <p id="txts"></p>
                    <input type="submit" name="submit" value="submit" class="submit">
                    <span class="fp"><a href="#"> Forgot password?</a></span>
                    <span class="check">Remember me <input type="checkbox" name="check"
                        value="checkbox"> </span>
                    </form>
                    <a href="index" class="btn btn-lg return">Return to Home</a>
                   
        </div> 
        <script src="adminlog.js"></script>
        script src= "jquery-3.4.1.min.js"></script>
<script src= "jqueryui/jquery-ui.js"></script>
</body>
</html>