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
      <!-- left column -->
      <div class="col-md-12">
        <div class="card card-success">
          <div style="background-color: darkblue;" class="card-header  text-white fw-bold">
            <div class="card-title text-white">Employee Training Information</div>
          </div>
          
      
          <!-- /.card-header -->
          <div class="card-body bg-light">
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
      <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Training Serial Number</label>
                    <input type="text" name="" placeholder="Training Serial Number" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label>Training Name</label>
                    <input type="text" name="" placeholder="Training Name" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Institute</label>
                    <input type="text" name="" placeholder="Institute" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="" placeholder="City" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Institute Address</label>
                    <input type="text" name="" placeholder="Institute Address" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Oblige Sponsor</label>
                    <input type="text" name="" placeholder="Oblige Sponsor" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>From</label>
                    <input type="Date" name="" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To</label>
                    <input type="Date" name="" class="form-control" autocomplete="off" required="">
                  </div>
                </div> 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Duration </label>
                    <input type="text" name="" placeholder="Duration" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                    <div class="col-md-12 text-end mt-2">
                  <input style="background-color: darkblue;" type="submit" class="btn text-white float-right shadow" value="Submit" name="saveUser1">
                </div>
                 </div>
            </form>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- Col-12 -->
  </div>
  <!-- row -->
</div>

<?php include('link/desigene/script.php')?>
</body>
</html>