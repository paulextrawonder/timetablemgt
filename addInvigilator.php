<?php

        //session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        //header("location: login.php");
       // exit;

        //include '../config.php';
        include_once 'config.php';                 


        $title = $name = $designation ="";
        $title_err = $name_err = $designation_err ="";
       


        if(isset($_POST['addInvigilator'])){    

         $faculty = trim($_POST['faculty']);
         $dept = trim($_POST['dept']);
         $title = trim($_POST['title']);
         $name = trim($_POST['name']);
         $designation = trim($_POST['designation']);
         $phone = trim($_POST['phone']);
        
         

        if (empty($title)) {
            $title_err = "Enter invigilator's title";
        }
        if (empty($name)) {
            $name_err = "Enter name";
        }
         if (empty($designation)) {
            $designation_err = "Field should not be empty";
        }
                
    // Check input errors before inserting in database
    if(empty($title_err) && empty($name_err) && empty($designation_err)){
       
        // Prepare an insert statement
        $sql = "INSERT INTO invigilator (invFaculty, invDept, invTitle, invName, invDesignation, invPhone) VALUES (?,?,?,?,?, ?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $faculty, $dept, $title, $name, $designation, $phone);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Invigilator Added successfully";
                echo "<script>window.open('panelInvigilator', '_self')</script>";

               //header("location: index.php");
                exit();
            } else{
                $_SESSION['status'] = "error";
                $_SESSION['message'] = "Ooops! an error occured";
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