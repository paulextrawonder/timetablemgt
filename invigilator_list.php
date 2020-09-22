<?php
                    // Include config file
                    include_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT id, invTitle, invName, invDesignation, invPhone FROM invigilator WHERE invFaculty = '$faculty' && invDept = '$dept'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo "<div class = 'table-responsive py-4'>";
                                echo "<table class='table table-striped'>";
                                echo "<thead class ='thead-dark' style='border-top: 1px solid #d9d9d9;'>";
                                    echo "<tr>";
                                       echo "<th>Title</th>";
                                        echo "<th>Full Name</th>";
                                         echo "<th>Designation</th>";
                                         echo "<th style='padding-left:'>Action</th>";
                                          
                                        
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                      
                                    $index++;
                                    $id = $row['id'];
                                    $invTitle = $row['invTitle'];
                                    $invName = $row['invName'];
                                    $invDesignation = $row['invDesignation'];
                                                                                                           
                                    echo "<tr>";
                                        echo "<td>" . $invTitle."</td>";
                                        echo "<td>" . $invName."</td>";
                                        echo "<td>" . $invDesignation."</td>";
                                        
                                        echo "<td>

                                        <a href='#'' data-toggle='modal' data-target='#editInv$index'>
                                        <span class = 'glyphicon glyphicon-pencil'></span>
                                        <a href='delete_invigilator.php?id=$id'><span class = 'glyphicon glyphicon-trash'></span></a>;
                                        
                                        </td>";
                                                                              
                                     echo "</tr>";

                                      echo'
                                         <!-- modal content for user info -->

                                            <div id="editInv'.$index.'" class="modal fade" tabindex="-1" role="dialog"
                                              aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-body">

                                                  <div class ="modal-head">
                                                  <h4> Edit Hall</h4>
                                                  <hr>
                                                  </div>
                                                    <form action="" method="POST">
                                                       <input type="text" name="id" value="'.$id.'" readonly >                                               
                                                     
                                                     <div class="form-group"> 
                                                       <label class="form-label">Title</label>
                                                        <input type="text" name="invTitle" class="form-control" value="'.$invTitle.'" required>
                                                      </div>

                                                      <label class="form-label">Full Name</label>
                                                       <div class="form-group"> 
                                                        <input type="text" name="invName" class="form-control" value="'.$invName.'" required>
                                                      </div>

                                                      <label class="form-label">Designation</label>
                                                       <div class="form-group"> 
                                                        <input type="text" name="invDesignation" class="form-control" value="'.$invDesignation.'" required>
                                                      </div>

                                                                                                             
                                                       <div class="modal-footer"> 
                                                      <div class="text-right">
                                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                      <button name="updateInv" type="submit" class="btn btn-primary text-white">Update<i class="icon-paperplane ml-2"></i></button>
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
                            echo "<p class='text-center text-danger'><em>You have not registered your invigilators...</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    //mysqli_close($dbconnected);
                    ?>

    <?php  

    $invTitle=$invName=$invDesignation="";
    $invTitle_err=$invName_err=$invDesignation_err="";
   

    if (isset($_POST['updateInv'])) {
    $id = trim($_POST['id']);
    $invTitle = trim($_POST['invTitle']);
    $invName = trim($_POST['invName']);
    $invDesignation = trim($_POST['invDesignation']);
   
        if (empty($invTitle)) {
        $hallName_err = "Update this field";
        }
        if (empty($invName)) {
        $hallCapacity_err = "Update this field";
        }
        if (empty($invDesignation)) {
        $invDesignation_err = "Update this field";
        }
        
        if (empty($invTitle_err) && empty($invName_err) && empty($invDesignation_err)) {
                 // Prepare an update statement
        $sql = "UPDATE invigilator SET invTitle=?, invName=?, invDesignation=? WHERE id = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $invTitle, $invName, $invDesignation, $id);
            
            // Set parameters
           $id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Invigilator updated successfully";
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