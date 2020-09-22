<?php
                    // Include config file
                    include_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT id, hallName, hallCapacity FROM hall WHERE hallFaculty = '$faculty' && hallDept = '$dept'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo "<div class = 'table-responsive py-4'>";
                                echo "<table class='table table-striped'>";
                                echo "<thead class ='thead-dark' style='border-top: 1px solid #d9d9d9;'>";
                                    echo "<tr>";
                                        echo "<th style='padding-left: 3%'>Hall Name</th>";
                                        echo "<th style='padding-left: 3%;'>Hall Capacity</th>";
                                        echo "<th style='padding-left:'>Action</th>";
                                        
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                      
                                    $index++;
                                    $id = $row['id'];
                                    $hallName = $row['hallName'];
                                    $hallCapacity = $row['hallCapacity'];
                                                                       
                                    echo "<tr>";
                                        echo "<td>" . $hallName."</td>";
                                        echo "<td>" . $hallCapacity."</td>";
                                       
                                        echo "<td>

                                        <a href='#'' data-toggle='modal' data-target='#editHall$index'>
                                        <span class = 'glyphicon glyphicon-pencil'></span>
                                        <a href='delete_hall.php?id=$id'><span class = 'glyphicon glyphicon-trash'></span></a>;
                                        
                                        </td>";
                                                                              
                                                                             
                                       
                                    echo "</tr>";


                                     echo'
                                         <!-- modal content for user info -->

                                            <div id="editHall'.$index.'" class="modal fade" tabindex="-1" role="dialog"
                                              aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-body">

                                                  <div class ="modal-head">
                                                  <h4> Edit Hall</h4>
                                                  <hr>
                                                  </div>
                                                    <form action="" method="POST">
                                                       <input type="hidden" name="id" value="'.$id.'" readonly >                                               
                                                     
                                                     <div class="form-group"> 
                                                       <label class="form-label">Hall Name</label>
                                                        <input type="text" name="hallName" class="form-control" value="'.$hallName.'" required>
                                                      </div>

                                                      <label class="form-label">Hall Capacity</label>
                                                       <div class="form-group"> 
                                                        <input type="number" name="hallCapacity" class="form-control" value="'.$hallCapacity.'" required>
                                                      </div>

                                                       
                                                       <div class="modal-footer"> 
                                                      <div class="text-right">
                                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                      <button name="updateHall" type="submit" class="btn btn-primary text-white">Update<i class="icon-paperplane ml-2"></i></button>
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
                            echo "<p class='text-center text-danger'><em>No exam hall allocated for your department yet...</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    //mysqli_close($dbconnected);
            ?>


    <?php  

    $hallName=$hallCapacity=$id="";
    $hallName_err=$hallCapacity_err="";

    if (isset($_POST['updateHall'])) {
    $id = trim($_POST['id']);
    $hallName = trim($_POST['hallName']);
    $hallCapacity = trim($_POST['hallCapacity']);
   
        if (empty($hallName)) {
        $hallName_err = "Update this field";
        }
         if (empty($hallCapacity)) {
        $hallCapacity_err = "Update this field";
        }
        
        if (empty($hallName_err) && empty($hallCapacity_err)) {
                 // Prepare an update statement
        $sql = "UPDATE hall SET hallName = ?, hallCapacity =? WHERE id = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssi", $hallName, $hallCapacity, $id);
            
            // Set parameters
           $id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Hall updated successfully";
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