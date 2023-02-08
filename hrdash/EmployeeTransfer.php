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
            <div class="card-title">Employee Transfer</div>
           
          </div>
          
      
          <!-- /.card-header -->
          <div class="card-body bg-light">
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
     <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Transfer Order Number </label>
                    <input type="text" name="" placeholder="Transfer Order Number" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="" placeholder="Designation" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>BPS</label>
                    <input type="text" name="" placeholder="From BPS" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>From  Department</label>
                    <input type="text" name="" placeholder="From Deparment" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label> To  Project</label>
                    <input type="text" name="" placeholder="To Project" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>From  Station</label>
                    <input type="text" name="" placeholder="From  Station" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To Station</label>
                    <input type="text" name="" placeholder="To Station" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Worked From</label>
                    <input type="text" name="" placeholder="Worked From" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Transfer Date</label>
                    <input type="Date" name="" class="form-control" autocomplete="off" required="">
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