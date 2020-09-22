<?php
                    // Include config file
                    include_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM course WHERE level = $level && semester = $semester && dept = '$dept'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo "<div class = 'table-responsive py-4'>";
                                echo "<table class = 'table firsttable data-table'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>School</th>";
                                        echo "<th>Level</th>";
                                        echo "<th>Dept.</th>";
                                        echo "<th>Course Code</th>";
                                        echo "<th>Course Title</th>";
                                        echo "<th>Unit</th>";
                                        echo "<th>No of students</th>";
                                        echo "<th>Action</th>";

                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                      
                                    $index++;
                                    $id = $row['id'];
                                    $school = $row['school'];
                                    $level = $row['level'];
                                    $dept = $row['dept'];
                                    $ccode = $row['ccode'];
                                    $ctitle = $row['ctitle'];
                                    $cunit = $row['cunit'];
                                    $no_of_student = $row['no_of_student'];
                                   
                                    echo "<tr>";
                                        echo "<td>" . $index ."</td>";
                                        echo "<td>" . $school."</td>";
                                        echo "<td>" . $level."</td>";
                                        echo "<td>" . $dept."</td>";
                                        echo "<td>" . $ccode."</td>";
                                        echo "<td>" . $ctitle."</td>";
                                        echo "<td>" . $cunit."</td>";
                                        echo "<td>" . $no_of_student."</td>";

                                        echo "<td>

                                        <a href='#'' data-toggle='modal' data-target='#editCourse$index'>
                                        <span class = 'glyphicon glyphicon-pencil'></span>
                                        <a href='delete_course.php?id=$id'><span class = 'glyphicon glyphicon-trash'></span></a>;
                                        
                                        </td>";
                                                                              
                                                                             
                                       
                                    echo "</tr>";

                                    echo'
                                         <!-- modal content for user info -->

                                            <div id="editCourse'.$index.'" class="modal fade" tabindex="-1" role="dialog"
                                              aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-body">

                                                  <div class ="modal-head">
                                                  <h4> Edit Course</h4>
                                                  <hr>
                                                  </div>
                                                                                                    
                                                    <form action = "" method = "POST">
                                                        <input type="hidden" name = "id" value="'.$id.'" required>
                                                        <label class="form-label">Course Code:</label>
                                                        <div class="form-group">
                                                          <select name="ccode" class="form-control" required>
                                                              <option value="'.$ccode.'">'.$ccode.'</option>
                                                              <option value="BIO101">BIO 101</option>
                                                              <option value="CHM101">CHM 101</option>
                                                              <option value="CHM102">CHM 102</option>
                                                              <option value="ENG101">ENG 101</option>
                                                              <option value="ENG103">ENG 103</option>
                                                              <option value="FRN101">FRN 101</option>
                                                              <option value="GST101">GST 101</option>
                                                              <option value="GST103">GST 103</option>
                                                              <option value="GST108">GST 108</option>
                                                              <option value="IGB101">IGB 101</option>
                                                              <option value="MTH101">MTH 101</option>
                                                              <option value="PHY101">PHY 101</option>
                                                         </select>
                                                        </div>

                                                        <label class="form-label">Course Title</label>
                                                       <div class="form-group"> 
                                                        <input type="text" name="ctitle" class="form-control" value="'.$ctitle.'" required>
                                                      </div>

                                                      <label class="form-label">Course Unit:</label>
                                                        <div class="form-group">
                                                          <select name="cunit" class="form-control">
                                                              <option value="'.$cunit.'">'.$cunit.'</option>
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="6">6</option>
                                                         </select>
                                                        </div>

                                                        <label class="form-label">Student Capacity</label>
                                                       <div class="form-group"> 
                                                        <input type="text" name="no_of_student" class="form-control" value="'.$no_of_student.'" required>
                                                      </div>



                                                       <div class="modal-footer"> 
                                                      <div class="text-right">
                                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button name="updateCourse" type="submit" class="btn btn-primary text-white">Update<i class="icon-paperplane ml-2"></i></button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                  
                                                    

                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- /.modal -->
                                         
                                    ';    

                                }
                                echo "</tbody>";
                                                         
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='text-center text-danger'><em>No registered course for $dept $level level yet</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    //mysqli_close($dbconnected);
                    ?>


        <?php

        $ccode=$ctitle=$cunit=$no_of_student="";
        $ccode_err=$ctitle_err=$cunit_err=$no_of_student_err="";

        if (isset($_POST['updateCourse'])) {
        $id = trim($_POST['id']);
        $ccode = trim($_POST['ccode']);
        $ctitle = trim($_POST['ctitle']);
        $cunit = trim($_POST['cunit']);
        $no_of_student = trim($_POST['no_of_student']);
   
        if (empty($ccode)) {
        $ccode_err = "Update this field";
        }
         if (empty($ctitle)) {
        $ctitle_err = "Update this field";
        }
        if (empty($cunit)) {
        $cunit_err = "Update this field";
        }
        if (empty($no_of_student)) {
        $no_of_student_err = "Update this field";
        }
        
        if (empty($ccode_err) && empty($ctitle_err) && empty($cunit_err) && empty($no_of_student_err)) {
                 // Prepare an update statement
        $sql = "UPDATE course SET ccode = ?, ctitle =?, cunit =?, no_of_student =? WHERE id = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssiii", $ccode, $ctitle, $cunit, $no_of_student, $id);
            
            // Set parameters
           $id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Course updated successfully";
                //redirect to login page
                echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";
               
               // header("location: login.php");
                exit();
            } else{
                $_SESSION['status'] = "error";
                $_SESSION['message'] = "Oops! something went wrong";
                //redirect to login page
                echo "<script>window.open('javascript:history.go(-1)', '_self')</script>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        }
    
    }
    ?>