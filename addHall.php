<?php

        //session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        //header("location: login.php");
       // exit;

        //include '../config.php';
        include_once 'config.php';                 


        $hallName = $hallCapacity ="";
        $hallName_err = $hallCapacity_err ="";


        if(isset($_POST['addHall'])){    

         $faculty = trim($_POST['faculty']);
         $dept = trim($_POST['dept']);
         $hallName = trim($_POST['hallName']);
         $hallCapacity = trim($_POST['hallCapacity']);
        
         

        if (empty($hallName)) {
            $hallName_err = "Input hall name";
        }
        if (empty($hallCapacity)) {
            $hallCapacity_err = "Input hall capacity";
        }
        
    // Check input errors before inserting in database
    if(empty($hallName_err) && empty($hallCapacity_err)){
       
        // Prepare an insert statement
        $sql = "INSERT INTO hall (hallFaculty, hallDept, hallName, hallCapacity) VALUES (?,?,?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $faculty, $dept, $hallName, $hallCapacity);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Hall Added successfully";
                echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";

                // echo "<script>window.open('panelHall', '_self')</script>";
               exit();
            } else{

                $_SESSION['status'] = "error";
                $_SESSION['message'] = "Something went wrong. Please try again later.";
                echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";

                //echo "<script>window.open('panelHall', '_self')</script>";
            }
        }
         
        //Close statement
       mysqli_stmt_close($stmt);
    }
    
    // Close connection
    //mysqli_close($dbconnected);

    }
}

else{
        header('location:adminlog');
    }
   

      // Close connection
    mysqli_close($dbconnected);
    ?>