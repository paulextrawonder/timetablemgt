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
    <title>Message box page</title>
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

              
<!--this is the seventh page-->
              <div id="second_page" style="margin-left: 20%;">
                <ul class="top_nav3">
                  <li class="note1">Message</li>
                  <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                    <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                    </span></a>
                  </li>
                </ul>

                <div class="messagebox">
                    <br><br>
                 <h3>From Super Admin</h3>
                 <br><br>
                 <p>I was told IFT now offer new courses, some of which<br>
                     were not listed on your student page. Could you send the<br>
                    new courses here so it can be added to our database.<br>
                    thanks
                 </p>
                 <i>April 8, 2020</i><br><br>
                 <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#popup3">Reply</button>
                 <br><br><br>
                </div>

                <!--message modal-->
                <div id="popup3" class="modal fade">
                        <div class="modal-dialogue" style="margin-left: 30%; margin-top: 10%;">
                            <div class="modal-content">
                              <!--modal header-->
                                <div class="modal-header">  
                                    <br>  
<span class="glyphicon glyphicon-arrow-left arrow-dismiss" data-dismiss="modal"></span>
<span class="modal-title lead" style="font-size: 30px;">Super Admin</span> <br>
                                </div>
                                <!--modal body-->
                                <div class="modal-body">
                                   <p class="inbox"> I was told IFT now offer new courses, some of which
                                    were not listed on your student page. Could you send the
                                   new courses here so it can be added to our database.
                                   thanks </p> 
                                   <br><br>
                                   <p class="sent">Okay</p>
                                </div>
                                <!--end of modal body-->
                                <div class="modal-footer">
                                   <form name="chatform" method="GET" action="">
                                        <input type="text" name="chatinput" id="chatinput" placeholder="Aa" row="5" col="5" maxlength="2000">
                                       <span class="glyphicon glyphicon-chevron-right"></span>
                                       
                                   </form>
                                </div>
                            </div>
                        </div>
                      </div>
                  <!--end of message modal-->
              </div>


                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                   <script src="adminPanelExtension.js"></script>

                   <script>
(function(){
    $('input').on('click', function(){
$(this).attr('placeholder', 'Type message here...');
});

$('.glyphicon-chevron-right').on('click', function(){
var sent = $('input').val();
var sentt = $('<p></P>').appendTo('.modal-body');
    sentt(sent).addClass('sent');

if(sent == ''){
    sentt('').removeClass('sent');
}else if(sent.length>=1 && sent.length<=6){
    sentt.addClass('sent2');
}else if(sent.length>=7 && sent.length<12){
    sentt.addClass('sentClass');
}else if(sent.length>=12 && sent.length<=17){
    sentt.addClass('sentClass2');   
}else if(sent.length>17 && sent.length<=23){
        sentt.addClass('sentClass3');
    }else if(sent.length>23 && sent.length<=28){
        sentt.addClass('sentClass4');
    }else if(sent.length>28 && sent.length<=34){
        sentt.addClass('sentClass6');
    }else{
        sentt.addClass('sentClass7');
    }
    $('input').val('');
    $('input').attr('placeholder','Aa');
});

$('.modal-body').on('click', function(){
    $('input').attr('placeholder','Aa');
});

})();


                </script>
        </body>
       
</html>
