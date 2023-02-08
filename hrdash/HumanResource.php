<!DOCTYPE html>
<html lang="en">
<head>
   <?php include ('link/links.php')?>
</head>
<body>
    <?php include ('link/desigene/sidebar.php')?>
<div id="main">
<?php include('link/desigene/navbar.php')?>
<div class="container-fluid py-5">
        <div class="row">
        <div class="col-lg-12">
        <div class="card card2 text-center bg-light">
            <div style="background-color: darkblue;" class="card-header ">
              <div class="card-title text-white">Employee Family Information</div>
                
               </ul>
           </div>
           <div class="card-body">
              <h4 class="card-title"><b>Spouces</b></h4>
              <p class="card-text"></p>
              <form action="" id="needs-validation" novalidate>
                  <div class="form-row">
                      <div class="form-group col-md-8">
                        <input id="in" type="number" name="" class=" form-control" placeholder="Enter number of Spouces & click Next" required>
                     </div>
                    <div class="form-group col-md-4">
                        <div class="text-center">
                           <button class="btn btn-sm btn-primary generate" type="submit">Next</button>
                       </div>
                    </div>
                    <div class="col-12">

          <div class="card  text-center bg-light">
               <div class="card-body">
                   <div class="forms">
                   </div>
                </div>
            </div>
        </div>
              </form>
           </div>
        </div>
</div>
     

<div class="card col-12 card2">
  <div style="background-color: darkblue;" class="card-header ">
    <div class="card-title text-white">Children Details</div>
                
           </div>
<div class="card-body bg-light">
<div id="selected_form_code">
  <form>
  <label>No of Children</label>
<select id="select_btn" class="" >
<option value="0">Select No of childrens</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

</form>
<div   id="form1" data-bs-toggle="collapse" class="mt-2 me-1">
<form    action="#" id="form_submit" method="post" name="form_submit">
<!-- Dynamic Registration Form Fields Creates Here -->

</form>

</div>
<div class="mt-2 float-right ">
    <button style="background-color: darkblue;" class="text-white" >Submitt</button>
 </div>


</div>
</div>
</div>

 </div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.card').css('margin-top', 30);
$('.btn').click(function(e){
e.preventDefault();
let input = $('#in').val();
let temp_html = '';
for(i = 0; i < input; i++){
temp_html += '<div class="row"><div class="col-md-4"><div class="form-group"><label>Name of Spouse</label><input   type="text" name="fullname[]" class="form-control" placeholder="Fullname" required=""></div></div><div class="col-md-4"><div class="form-group"><label>Date of Birth</label><input type="text" name="date[]" class="form-control" placeholder="Enter date of birth" required=""></div></div><div class="col-md-4"><div class="form-group"><label>CNIC</label><input type="text" name="phone[]" class="form-control" placeholder="Enter CNIC" required=""></div></div></div>' ;
}
$('.forms').append(temp_html);
});
});



$(document).ready(function() {
$('select#select_btn').change(function() {
var sel_value = $('option:selected').val();
if (sel_value == 0) {
$("#form_submit").empty(); // Resetting Form
$("#form1").css({
'display': 'none'
});
} else {
$("#form_submit").empty(); //Resetting Form
// Below Function Creates Input Fields Dynamically
create(sel_value);
// Appending Submit Button To Form
// $("#form_submit").append($("<input/>", {
// type: 'submit',
// value: 'Register'
// }))
}
});
function create(sel_value) {
for (var i = 1; i <= sel_value; i++) {
$("div#form1").slideDown('slow');
$("div#form1").append($("#form_submit").append($("<div/>", {
id: 'head'
}).append($("<h3/>").text("Child" + i)), 
$("<lable><b>Name of Child</b></lable>"), $("<input/>", {
  
type: 'text',
placeholder: 'Name' + i,
name: 'name_' + i
}), $("<lable><b>Date of Birth</b></lable>"), $("<input/>", {
type: 'text',
placeholder: 'DOB' + i,
name: 'email_' + i
}), $("<lable><b>Gender</b></lable>"), $("<select><option>Select Gender</option><option>Male</option><option>Female</option><select/>", {
placeholder: 'Select gender' + i,
type: 'text',
name: 'msg_' + i
}), $(""), $("<hr/>"), $("")))
}
}
});



</script>

<?php include('link/desigene/script.php')?>
</body>
</html>