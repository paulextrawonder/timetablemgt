 <?php 
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: adminlog");
  exit;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>edit profile page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
</head>
        <body>
    <?php include_once 'sideBar.php'; ?>




                <!--seventh page-->
                <div id="seventh_page" style="margin-left: 20%;">
                    <ul class="top_nav3">
                        <li class="note1">profile</li>
                        <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                          <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                          </span></a>
                        </li>
                      </ul>
              
                      <!--profile board-->
                      <div class="profileBoard">
                          <input type="file" id="myInput"/> <br>
                          <img src = "Images/p2.jpg" id="myImg" width = "170" height= "170">
                          <i class="glyphicon glyphicon-camera" onclick="changeImage()"></i>
                        <h4 class="lead"><?php echo "$name"; ?></h4>
                        <p class="resetMail" style="margin-left: 4%;"><?php echo "$email"; ?></p>
                        <span class="colon">Department:</span><span class="value"><?php echo "$dept"; ?></span><br><br>
                        <span class="colon">Designation:</span><span class="value"><?php echo "$designation"; ?></span><br>
                        <p class="changePassword"><a href= "panelChangepassword">
                          Change Password</a></p>
                      </div>
                </div>

                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                   <script src="adminPanelExtension.js"></script>

                   <script>


window.addEventListener("load", function(e){
document.querySelector('input[type = "file"]').addEventListener('change', function(){

if(this.files && this.files[0]){
  var img = document.querySelector('img'); // $('img')[0]
  img.src = URL.createObjectURL(this.files[0]); //set src to full url
  var displayPicture = img.src
  img.onload = imageIsLoaded; //optional onload eventListener
  
  var x = document.getElementById("myImg");
  x.src= displayPicture;
 

}

});

});
function imageIsLoaded(){
 alert('you are about to change your profile picture')
}




                </script>
        </body>
       
</html>
