<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Add Courses Here</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
    <style>
        .inputclass{
          width:100%; padding-left:20%; border:0px;
        }
      .inputclass:focus, .inputclass:focus{
        outline: none;
      } 
        </style>
</head>
        <body>
            <?php include_once 'sideBar.php'; ?>
            

              <!--fourth page-->
              <div id="fourth_page" style="margin-left: 20%;">
                <ul class="top_nav3">
                  <li class="note1">Students > year 5</li>
                  <li class="note2"><a href="#"><span class="glyphicon glyphicon-bell">
                    <span style="color:#ff0505; font-size: 21px; margin-left: -28px;"><sup><sup>1</sup></sup></span>
                    </span></a>
                  </li>
                </ul>
                <h2 class="header2">Course Details</h2>
                <button class=" btn btn-lg addCourse" data-toggle="modal" data-target="#popup1">Add Course</button>


<!--modal-->
<div id="popup1" class="modal fade">
  <div class="modal-dialogue">
      <div class="modal-content">
        <!--modal header-->
          <div class="modal-header">
              <button class="close" data-dismiss="modal" style=" color: white; background-color: black;
              margin-top: -5.1%; margin-right: -5.3%;
               font-size: 50px; padding-left: 1.3%;
                padding-right: 1.3%; border: 3px solid white;
                 border-radius: 50%;">&times;</button>
              <h2 class="modal-title lead">Add Course</h2>
          </div>
          <!--modal body-->
          <div class="modal-body">
<!--form in modal-->
            <form action="#" method="POST" name="populate">
             <div class="row" style="margin-top: 3%;">
               <div class="col-md-6">
   <span class="labels">School</span>  <select id="school" name="school">
      <option value="saat">SAAT</option>
      <option value="sbms">SBMS</option>
      <option value="sobs">SOBS</option>
      <option value="sict">SICT</option>
      <option value="seet">SEET</option>
      <option value="soet">SOET</option>
      <option value="soht">SOHT</option>
      <option value="smat">SMAT</option>
      <option value="sops">SOPS</option>
             </select>
           </div>
           <div class="col-md-6">
         <span style="margin-left: 4%;" class="labels">Dept.</span> <select id="dept" name="school">
           <!--saat-->
           <option value="aec">AEC</option>
         <option value="aex">AEX</option>
         <option value="ast">AST</option>
         <option value="cst">CST</option>
         <option value="fat">FAT</option> 
          <option value="fwt">FWT</option>
         <option value="sst">SST</option>
         <!--sbms-->
          <option value="ant">Anatomy</option>
         <option value="psy">Physiology</option>
         <!--sobs-->
         <option value="bch" id="sobs">BCH</option>
         <option value="bio" id="sobs">BIO</option>
         <option value="btc" id="sobs">BTC</option>
         <option value="mcb" id="sobs">MCB</option>
         <option value="forensic" id="sobs">Forensic Science</option>
         <!--sict-->
         <option value="csc" id="sict">CSC</option>
         <option value="ift" id="sict">IFT</option>
         <option value="cys" id="sict">CYS</option>
         <option value="software eng" id="sict">Softwr Eng</option>
         <!--seet-->
         <option value="abe">ABE</option>
         <option value="che">CHE</option>
         <option value="cie">CIE</option>
         <option value="eee">EEE</option>
         <option value="fst">FST</option> 
          <option value="mme">MME</option>
         <option value="mee">MEE</option>
         <option value="mechatronics">Mechatronics</option> 
          <option value="pet">PET</option>
         <option value="pte">PTE</option>
         <!--soet-->
         <option value="arc" id="soes">ARC</option>
         <option value="bld" id="soes">BLD</option>
         <option value="evt" id="soes">EVT</option>
         <option value="qst" id="soes">QST</option>
         <option value="svg" id="soes">SVG</option>
         <option value="urp" id="soes">URP</option>
         <!--smat-->
         <option value="fmt">FMT</option>
         <option value="mmt">MMT</option>
         <option value="pmt">PMT</option>
         <option value="tmt">TMT</option>
         <option value="mgt">MGT</option> 
          <!--soht-->
          <option value="bmt">BMT</option>
          <option value="dnt">DNT</option>
          <option value="opt">OPT</option>
          <option value="pot">POT</option>
          <option value="PHT">PHT</option> 
         <!--sops-->
         <option value="geo" id="sops">GEO</option>
         <option value="mth" id="sops">MTH</option>
         <option value="sta" id="sops">STA</option>
         <option value="chm" id="sops">CHM</option>
         
                </select>
              </div>
         </div>

         <div class="row" style="margin-top: 5%;">
            <div class="col-md-6">
<span class="labels">Level</span>  <select id="level" name="school">
        <option value="100">100</option>
       <option value="200">200</option>
       <option value="300">300</option>
       <option value="400">400</option>
       <option value="500">500</option>
              </select>
                </div>
                <div class="col-md-6">
              <span style="margin-left: 4%;" class="labels">Course Code</span> <select id="coursecode" name="school">
               <option value="509">IMT 509</option>
              <option value="507">IMT 507</option>
              <option value="503">IMT 503</option>
              <option value="505">IMT 505</option>
              <option value="501">IMT 501</option>
              <option value="MGT">MGT 501</option>
                     </select>
                   </div>
              </div>
 <span class="labels">Course Title</span>
 <input type="text" id="course" name="course" style=" margin-top: 4%; margin-left: 5%; width: 80%;" class="textInput"><br>
 <span class="labels">Number Of Students</span>
 <input type="text" id="NOS" name="number" style="margin-left: 5%; width: 71%; margin-top: 5%;" class="textInput"> <br> 

 <span class="labels">Unit</span>
   <select id="unit" name="school">
    <option value="1">1 UNIT</option>
   <option value="2">2 UNITS</option>
   <option value="3">3 UNITS</option>
   <option value="4">4 UNITS</option>
   <option value="6">6 UNITS</option>
          </select>   <br>
          
          <button class="btn btn-lg save" type="submit">Save</button>
 

            </form>
          </div>
          <!--end of modal body-->
      </div>
  </div>
</div>
<!--end of modal-->


                <table class="table firsttable data-table">
                  <thead>
                      <th>School</th>
                      <th>Level</th>
                      <th>Dept.</th>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th style="width: 15%;"></th><th>Unit</th>
                      <th>No of Students</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
             


              <!--caution modal-->
              <div id="popup2" class="modal fade">
                <div class="modal-dialogue" style="width: 60%; margin-top: 15%; margin-left: 25%;">
                    <div class="modal-content content2">
                      <!--modal header-->
                        <div class="modal-header" style="border: 0px;">
                            <button class="close" data-dismiss="modal" style=" color: white; background-color: black;
                            margin-top: -6.8%; margin-right: -7%;
                             font-size: 35px; padding-left: 1.3%;
                              padding-right: 1.3%; border: 3px solid white;
                               border-radius: 50%;">&times;</button>
                        </div>
                        <!--modal body-->
                        <div class="modal-body">
             
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <br>
                            <p class="modal_para">Are you sure you want to delete course?</p>
                            <br><br>
                            <button type="button" class="btn btn-lg confirmdel" data-dismiss="modal">Yes</button>
                              <button type="button" class="btn btn-lg declinedel" data-dismiss="modal">No</button>
                              <br><br><br><br><br><br>
                          </div>
                        </div>
                      </div>
                      <!--end of container-->
                        </div>
                        <!--end of modal body-->
                    </div>
                </div>
              </div>
              <!--end of caution modal-->

                <script src= "jquery-3.4.1.min.js"></script>
                <script src= "jqueryui/jquery-ui.js"></script>
                <script src="adminpanel.js"></script>
                <script>

(function(){
 $('#school').change(function(){
   var school =  $("#school option:selected").text();
  });
  $('#level').change(function(){
   var level =  $("#level option:selected").text();
  });
  $('#dept').change(function(){
   var dept =  $("#dept option:selected").text();
  });
  $('#coursecode').change(function(){
   var coursecode =  $("#coursecode option:selected").text();
  });
  $('#unit').change(function(){
   var unit =  $("#unit option:selected").text();
  });

  $('form').on('submit', function(e){
    e.preventDefault();
    var course = $("input[name='course']").val();
    var number = $("input[name='number']").val();
    var school =  $("#school option:selected").text();
    var level =  $("#level option:selected").text();
    var dept =  $("#dept option:selected").text();
    var coursecode =  $("#coursecode option:selected").text();
    var unit =  $("#unit option:selected").text();
    $(".data-table tbody").append("<tr data-name1='"+course+"' data-name2='"+number+"' data-name3='"+school+"' data-name4='"+level+"' data-name5='"+dept+"' data-name6='"+coursecode+"' data-name7='"+unit+"'><td>"+school+"</td><td>"+level+"</td><td>"+dept+"</td><td>"+coursecode+"</td><td>"+course+"</td><td></td><td>"+unit+"</td><td>"+number+"</td><td><span class='glyphicon glyphicon-pencil mr-6'></span><span class='glyphicon glyphicon-trash'></span></td></tr>");
});


$('body').on('click', '.glyphicon-trash', function(){
  $(this).attr('data-toggle','modal').attr('data-target','#popup2');
  var removal = $(this).parents('tr');
  $('body').on('click', '.confirmdel', function(){
 removal.remove();
});
});




$('body').on('click', '.glyphicon-pencil', function(){

  var course = $(this).parents('tr').attr('data-name1');
  var number = $(this).parents('tr').attr('data-name2');
  var school = $(this).parents('tr').attr('data-name3');
  var level = $(this).parents('tr').attr('data-name4');
  var dept = $(this).parents('tr').attr('data-name5');
  var coursecode = $(this).parents('tr').attr('data-name6');
  var unit = $(this).parents('tr').attr('data-name7');

  $(this).parents('tr').find('td:eq(0)')("<input name= 'edit_text1' value='"+school+"'>");
  $(this).parents('tr').find('td:eq(1)')("<input name= 'edit_text2' value='"+level+"'>");
  $(this).parents('tr').find('td:eq(2)')("<input name= 'edit_text3' value='"+dept+"'>");
  $(this).parents('tr').find('td:eq(3)')("<input name= 'edit_text4' value='"+coursecode+"'>");
  $(this).parents('tr').find('td:eq(4)')("<input name= 'edit_text5' value='"+course+"'>");
  $(this).parents('tr').find('td:eq(6)')("<input name= 'edit_text7' value='"+unit+"'>");
  $(this).parents('tr').find('td:eq(7)')("<input name= 'edit_text8' value='"+number+"'>");
 
 $(this).parents('tr').find('td:eq(8)').prepend("<span class='glyphicon glyphicon-upload mr-3'></span>");
 $(this).hide(); 
 $('input').addClass('inputclass');
});

('body').on('click', '.glyphicon-upload', function(){
  var edit1 = $(this).parents('tr').find("input[name='edit_text1']").val();
  var edit2 = $(this).parents('tr').find("input[name='edit_text2']").val();
  var edit3 = $(this).parents('tr').find("input[name='edit_text3']").val();
  var edit4 = $(this).parents('tr').find("input[name='edit_text4']").val();
  var edit5 = $(this).parents('tr').find("input[name='edit_text5']").val();
  var edit7 = $(this).parents('tr').find("input[name='edit_text7']").val();
  var edit8 = $(this).parents('tr').find("input[name='edit_text8']").val();

  $(this).parents('tr').find('td:eq(0)').text(edit1);
  $(this).parents('tr').find('td:eq(1)').text(edit2);
  $(this).parents('tr').find('td:eq(2)').text(edit3);
  $(this).parents('tr').find('td:eq(3)').text(edit4);
  $(this).parents('tr').find('td:eq(4)').text(edit5);
  $(this).parents('tr').find('td:eq(6)').text(edit7);
  $(this).parents('tr').find('td:eq(7)').text(edit8);

  $(this).parents('tr').attr('data-name3', edit1);
  $(this).parents('tr').attr('data-name4', edit2);
  $(this).parents('tr').attr('data-name5', edit3);
  $(this).parents('tr').attr('data-name6', edit4);
  $(this).parents('tr').attr('data-name1', edit5);
  $(this).parents('tr').attr('data-name7', edit7);
  $(this).parents('tr').attr('data-name2', edit8);

  $(this).parents('tr').find('.glyphicon-pencil').show();
  $(this).parents('tr').find('.glyphicon-upload').remove();
 
});

  })();

                </script>
        </body>
       
</html>
