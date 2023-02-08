<!DOCTYPE html>
<html lang="en">
<head>
   <?php include ('link/links.php')?>
</head>
<style>
    
#fullDiv ul {
    margin: 0;
    padding: 0;
}

#fullDiv li {
    float: left;
    display: block;
    width: 14.2857%;
    text-align: center;
    list-style-type: none;
}

#fullDiv li:nth-child(n+1):nth-child(-n+7) {
    font-weight: 900;
    color: #e67e22;
}

#fullDiv li:nth-child(n+39),
#fullDiv li:nth-child(n+8):nth-child(-n+16) {
    font-weight: 900;
    color: rgba(0, 0, 0, .3);
}

#fullDiv li:hover:nth-child(n+8):nth-child(-n+38),
#fullDiv li:nth-child(17) {
    border-radius: 5px;
    background-color: #1abc9c;
    color: #ecf0f1;
}

.form-group label {
    font-weight: bold;
}
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
</style>
<body>
<div id="main">
<?php include('link/desigene/navbar.php')?>
<div class="container-fluid m-auto py-5">
<div class="row">
      <!-- left column -->
      <div class="col-md-12">
        
        <div class="card card-success">
          <div style="background-color: darkblue;" class="card-header  text-white fw-bold">
            <div class="card-title">Leave Request</div>
           
          </div>
          
      
          <!-- /.card-header -->
          <div class="card-body bg-light">
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
     <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label>Employee No </label>
                    <input type="text" name="" placeholder="Employee No" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label>Name </label>
                    <input type="text" name="" placeholder="Name" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
             
             <div class="col-4">
                  <div class="form-group">
                    <label>Request No</label>
                    <input type="text" name="" placeholder="Request No" class="form-control" autocomplete="off" required="">
                  </div>
                </div>
               
                 
                 <div class="col-4">
                  <div class="form-group">
                    <label>Request Date</label>
                    <input type="date" name="" placeholder="Request Date" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                

               

                <div class="col-4">
                  <div class="form-group">
                    <label>From City</label>
                    <input type="text" name="" placeholder="From City" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label>To City</label>
                    <input type="text" name="" placeholder="To City" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                

                <div class="col-4">
                  <div class="form-group">
                    <label>Departure ON</label>
                    <input type="date" name="" placeholder="Departure ON" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label>Return Date</label>
                    <input type="date" name="" placeholder="" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label>Travel Mode</label>
                    <input type="text" name="" placeholder="Travel Mode" class="form-control" autocomplete="off" required="">
                  </div>
                </div>

                

                <div class="col-4">
                  <div class="form-group">
                    <label>Justification</label>
                    <textarea class="form-control"></textarea>
                    
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
  </div></div>


<?php include('link/desigene/script.php')?>
</body>
</html>