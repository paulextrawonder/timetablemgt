<?php
session_start();

if (!empty($_GET['id'])) {
 
include_once 'config.php';
    
    // Prepare a delete statement
    $sql = "DELETE FROM invigilator WHERE id = ?";

    // Set parameters
    $id = trim($_GET["id"]);
    
    $stmt = mysqli_stmt_init($dbconnected);
    if($stmt = mysqli_prepare($dbconnected, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $id);
            
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){

            // Records deleted successfully. Redirect to landing page
            $_SESSION['status'] = "success";
            $_SESSION['message'] = "Invigilator Deleted successfully";
            echo "<script>window.open('panelInvigilator', '_self')</script>";

            //echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";
            exit();
        } else{
             $_SESSION['status'] = "error";
             $_SESSION['message'] = "Oops! Something went wrong. Please try again later.";
            echo "<script>window.open('panelInvigilator', '_self')</script>";
           
        }

         // Close statement
    mysqli_stmt_close($stmt);
    }
     
   
    
    // Close connection
    mysqli_close($dbconnected);
} else{
      
        // URL doesn't contain id parameter. Redirect to error page
        header("location: adminlog");
        exit();
    }

?>

