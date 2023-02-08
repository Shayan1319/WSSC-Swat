<?php include("link/desigene/db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include ('link/links.php')?>
</head>
<body>
    <?php include ('link/desigene/sidebar.php')?>
<div id="main">
<?php include('link/desigene/navbar.php')?>
<!-- form start -->
<form method="post" enctype="multipart/form-data">
 <div class="container-fluid">
        <div class="row my-4">
         <div class="col-md-12 ">
            <div class="card card-success border border-2 border-dark bg-light">
              <div style="background-color: darkblue;" class="card-header text-white fw-bold">
                <div class="card-title text-white">Employee Personal Information</div>
              </div>
              <br>
          <!-- /.card-header -->
              <div class="card-body ">
                <div class="row mt-5">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Upload Image</label>
                        <input id="file1" name="image" onchange="document.getElementById('log1').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/*" class="form-control" style="overflow: hidden;" placeholder="Insert Your Image">
                      </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 ">
                      <div class="form-group mr-3 mt-0">
                        <img id="log1" class="shadow" style="border: 1px blue solid; border-radius: 10%; margin-top: -4%" src="images/file_icon.png" width="120px;" height="130px">
                      </div>
                    </div>
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>First Name</label>
                        <input id="fName" type="text" name="" placeholder="First Name" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input id="mName" type="text" name="" placeholder="Middle Name" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input id="lName" type="text" name="" placeholder="Last Name" class="form-control" autocomplete="off" required="">
                      </div>
                    </div> 
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Father Name</label>
                        <input id="lName" type="text" name="" placeholder="Last Name" class="form-control" autocomplete="off" required="">
                      </div>
                    </div> 
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>CNIC</label>
                        <input id="cNo" type="text" name="" placeholder="CNIC" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Email address</label>
                        <input id="email" type="Email" name="" placeholder="Email" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Permenent Address</label>
                        <input type="text" name="" placeholder="Permenent Address" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Current Address</label>
                        <input type="text" name="" placeholder="Current Address" class="form-control" autocomplete="off" required="">
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
                        <label>Postal Address</label>
                        <input type="text" name="" placeholder="Postal Address" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="" placeholder="Mobile Number" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Office Phone Number</label>
                        <input type="text" name="" placeholder="Office Number" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Alternate Number</label>
                        <input type="text" name="" placeholder="Alternate Number" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="Date" name="" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Religion</label>
                        <input type="text" name="" placeholder="Religion" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                  
                        <div class="col-md-4">
                      <div class="form-group">
                        <label>Gender</label>
                        <select name="" id="" class="form-control select2">
                            <option value="">Choose</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Blood Group</label>
                        <input type="text" name="" placeholder="Blood Group" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Domicile</label>
                        <input type="text" name="" placeholder="Domicile" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Marital Status </label>
                        <select name="" id="" class="form-control select2">
                            <option value="">Choose</option>
                            <option value=""> Married</option>
                            <option value=""> Unmarried</option>
                          
                          
                        </select>
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Next of Kin</label>
                        <input type="text" name="" placeholder="Next of Kin" class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Next of Kin Cell Number</label>
                        <input type="text" name="" placeholder="Next of Kin Cell Number " class="form-control" autocomplete="off" required="">
                      </div>
                    </div>                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Contact Person</label>
                        <input type="text" name="" placeholder="Contact Person " class="form-control" autocomplete="off" required="">
                      </div>
                    </div>                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Contact Person Cell Number</label>
                        <input type="text" name="" placeholder="Contact Person Cell Number " class="form-control" autocomplete="off" required="">
                      </div>
                    </div>
                    
                    </div>                      <div class=" text-end">
                      <input style="background-color: darkblue;" type="submit" class="btn text-white shadow float-right" value="Submit" name="saveUser1">
                    </div>                    </div>                
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- Col-12 -->
      </div>
    </form> 
</div>
<?php include('link/desigene/script.php')?>
</body>
</html>