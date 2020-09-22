<?php
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Adminlog");
    exit;
}
 
// Include config file
 include_once 'config.php';

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>change Password page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
     <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
</head>
        <body>
                
                <?php include_once "sideBar.php" ?>
              
<!--this is the second page-->
              <div id="second_page" style="margin-left: 20%;">
                <ul class="top_nav3">
                  <li class="note1">Password</li>
                  <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                    <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                    </span></a>
                  </li>
                </ul>

                <div class="workspace">
                  <h4>CHANGE PASSWORD</h4>
                  <form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="POST">
                    <input type="hidden" name="email" value="<?php echo($email) ?>">
                 <span class="op">Old Password:</span> 
                   <input type="password" name="old_pass"  required>
                <p id="alert1"></p>
                <span class="np">New Password:</span>
                 <input type="password" name="new_password" required>
                <p id="alert2"></p>
                <span class="cp">Confirm Password:</span>
                 <input type="password" name="confirm_password" required>
                <p id="alert3"></p>
                <input type="submit" class="submit" value="Update">
                  </form>
                </div>

              </div>


                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                <script src="js/sweetalert2.min.js">"></script>
                <?php include_once 'sweetalert2.php' ?>
                  
        </body>
       
</html>

<?php
 
    // Define variables and initialize with empty values
    $id = $_SESSION["id"];
    $email = $_SESSION["email"];
    $old_pass=$new_password = $confirm_password = "";
    $old_pass_err=$new_password_err = $confirm_password_err = "";

    $sql = "SELECT password FROM admin WHERE email = '$email' ";
                    if($result = mysqli_query($dbconnected, $sql)){
                      $rowCount = mysqli_num_rows($result);
                        if($rowCount == 1){

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                                                     
                                  $db_pass = $row['password'];
                                 

                                  }

                            mysqli_free_result($result);
                        } else{
                            echo "";
                        }
                        // Close connection
                    //mysqli_close($dbconnected);

                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }                          
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $old_pass = trim($_POST['old_pass']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);  

      
        // Validate old password
    if(empty($old_pass)){
        $old_pass_err = "Please enter old password";     
    }
    if ($db_pass != $old_pass) {
      $old_pass_err = "password do not match";
        }

       // Validate new password
    if(empty($new_password)){
        $new_password_err = "Please enter the new password.";     
    }
    if (strlen($new_password) < 5) {
       $new_password_err = "Password must not be less than 5";
     } 
        
    // Validate confirm password
    if(empty($confirm_password)){
        $confirm_password_err = "Please confirm the password.";
    } 

        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    
        
    // Check input errors before updating the database
    if(empty($old_pass_err) && empty($new_password_err) && empty($confirm_password_err)){


        // Prepare an update statement
        $sql = "UPDATE admin SET password = ? WHERE email = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $new_password, $email);
            
            // Set parameters
            //$password_harsh = password_hash($new_password, PASSWORD_DEFAULT);
            $email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Password change successfully";

                session_destroy();
                echo "<script>window.open('adminlog', '_self')</script>";
               
               // header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($dbconnected);
}
?>

