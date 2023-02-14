<!DOCTYPE html>
<html lang="en">
<head>
   <?php include ('link/links.php')?>
</head>
<body>
    <?php include ('link/desigene/sidebar.php')?>
<div id="main">
<?php include('link/desigene/navbar.php')?>
<div class="container-fluid">
    <div class="row my-4">

      <div class="col-md-12">
        
        <div class="card card-success bg-light">
          <div style="background-color: darkblue;" class="card-header text-white fw-bold">
            <div class="card-title">Employee Qualification</div>
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">    
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" name="" placeholder="Qualification" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
             
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Grade/Division</label>
                    <input type="text" name="" placeholder="Grade/Division" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Passing Year of Degree</label>
                    <input type="text" name="" placeholder="Passing Year of Degree " class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Institute</label>
                    <input type="text" name="" placeholder="Last Institute" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>PEC Registration</label>
                    <input type="text" name="" placeholder="Last Institute" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <div class="custom-file">
                      <input type="file" class="custom-file-input" id="s1">
                        <label class="custom-file-label" for="customFile">CV Attachment(Optional) </label>
                         <span id="n1" class="text-danger"></span>
                        </div>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Institute Address</label>
                    <input type="text" name="" placeholder="Institute Address " class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Major Subject</label>
                    <input type="text" name="" placeholder="Major Subject" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Remarks</label>
                    <textarea class="form-control"></textarea>

                  </div>
                </div>
             
                 </div>
                 <div class=" text-end">
                  <input style="background-color: darkblue;" type="submit" class="btn text-white shadow float-right" value="Submit" name="saveUser1">
                </div>

               
</form></div>
                 
            
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- Col-12 -->
  </div></div>


<?php include('link/desigene/script.php')?>
</body>
</html>