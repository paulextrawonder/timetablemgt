<?php

        //session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        //header("location: login.php");
       // exit;

        //include '../config.php';
        include_once 'config.php';                 


        $level=$semester=$school=$dept=$ccode=$ctitle=$cunit=$no_of_student="";
        $level_err=$semester_err=$school_err=$dept_err=$ccode_err=$ctitle_err=$cunit_err=$no_of_student_err="";

        if(isset($_POST['addCourse'])){      
  
         $level = trim($_POST['level']);
         $semester = trim($_POST['semester']);
         $school = trim($_POST['school']);
         $dept = trim($_POST['dept']);
         $ccode = trim($_POST['ccode']);
         $ctitle = trim($_POST['ctitle']);
         $cunit = trim($_POST['cunit']);
         $no_of_student = trim($_POST['no_of_student']);
         

        if (empty($level)) {
            $level_err = "Select Level";
        }
        if (empty($semester)) {
            $semester_err = "Select semester";
        }
        if (empty($school)) {
            $school_err = "Select school";
        }
        if (empty($dept)) {
            $dept_err = "Select Department";
        }
        if (empty($ccode)) {
            $ccode_err = "Select Course Code";
        }
        if (empty($ctitle)) {
            $ctitle_err = "Select Course Title";
        }
        if (empty($cunit)) {
            $cunit_err = "Select Course Title";
        }
        if (empty($cunit)) {
            $cunit_err = "Select Course Unit";
        }
        if (empty($no_of_student)) {
            $no_of_student_err = "Select Number of Student";
        }
    // Check input errors before inserting in database
    if(empty($level_err) && empty($semester_err) && empty($school_err) && empty($dept_err) && empty($ccode_err) && empty($ctitle_err) && empty($cunit_err) && empty($no_of_student_err)){
       
        // Prepare an insert statement
        $sql = "INSERT INTO course (level, semester, school, dept, ccode, ctitle, cunit, no_of_student) VALUES (?,?,?,?,?,?,?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $level, $semester, $school, $dept, $ccode, $ctitle, $cunit, $no_of_student);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // successfull. Redirect to landing page
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Course Added successfully";
                echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";

                // echo "<script>alert('Course added successfully.')</script>";
                 //echo "<script>window.open('panelAddCourse1?level='.$level.'&&semester='.$semester.'', '_self')</script>";

               //header("location: index.php");
                exit();
            } else{
                $_SESSION['status'] = "error";
                $_SESSION['message'] = "Oops! an error occured";
                echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";
                
            }
        }
         
        //Close statement
       mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($dbconnected);

    }
}

else{
        header('location:adminlog');
    }
   

     
    ?>