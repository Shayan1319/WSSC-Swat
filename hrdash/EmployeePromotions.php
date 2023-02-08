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
      <div class="col-12">
        
        <div class="card card-success">
          <div style="background-color: darkblue;" class="card-header  text-white fw-bold">
            <div class="card-title">Employee Promotions</div>
           
          </div>
          
      
          <!-- /.card-header -->
          <div class="card-body bg-light">
            <!-- form start -->
    <form method="post" enctype="multipart/form-data">
     <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>From Designation </label>
                    <input type="text" name="" placeholder="From Designation" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To Designation</label>
                    <input type="text" name="" placeholder="To Designation" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>From BPS</label>
                    <input type="text" name="" placeholder="From BPS" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To BPS</label>
                    <input type="text" name="" placeholder="To BPS" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label> Promotion Date</label>
                    <input type="Date" name="" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Promotion Number</label>
                    <input type="text" name="" placeholder="Promotion Number" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Department</label>
                    <input type="text" name="" placeholder="Department" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Acting</label>
                    <select class="form-control">
                      <option>Choose</option>
                      <option>Regular</option>
                      <option>OPS</option>
                    </select>
                    
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" name="" placeholder="Remarks" class="form-control" autocomplete="off" required="">
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