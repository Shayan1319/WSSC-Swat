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
  <form id="myForm" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
          <div class="row my-4">
            <div class="col-md-12 ">
              <div id="section1">
                <div class="card card-success border border-2 border-dark bg-light">
                  <div style="background-color: darkblue;" class="card-header text-white fw-bold">
                    <div class="card-title text-white">Employee Personal Information</div>
                  </div>
                    <br>
                <!-- /.card-header -->
                  <div class="row mt-5 p-3">
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
                          <input id="fName" type="text" name="" placeholder="First Name" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input id="mName" type="text" name="" placeholder="Middle Name" class="form-control" autocomplete="off">
                      </div>
                    </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input id="lName" type="text" name="" placeholder="Last Name" class="form-control" autocomplete="off" >
                        </div>
                      </div> 
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Father Name</label>
                          <input id="FatherName" type="text" name="" placeholder="Father Name" class="form-control" autocomplete="off" >
                        </div>
                      </div> 
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>CNIC</label>
                          <input id="cNo" type="text" name="" placeholder="CNIC" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Email address</label>
                          <input id="email" type="Email" name="" placeholder="Email" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Permenent Address</label>
                          <input id="PAddress" type="text" name="" placeholder="Permenent Address" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Current Address</label>
                          <input id="CAddress" type="text" name="" placeholder="Current Address" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>City</label>
                          <input id="city" type="text" name="" placeholder="City" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Postal Address</label>
                          <input id="PAddress" type="text" name="" placeholder="Postal Address" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Mobile Number</label>
                          <input id="moNum" type="text" name="" placeholder="Mobile Number" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Office Phone Number</label>
                          <input id="OfPNum" type="text" name="" placeholder="Office Number" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Alternate Number</label>
                          <input id="ANum" type="text" name="" placeholder="Alternate Number" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Date of Birth</label>
                          <input id="DofB" type="Date" name="" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Religion</label>
                          <input id="Religion" type="text" name="" placeholder="Religion" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Gender</label>
                          <select id="Gender" name="" id="" class="form-control select2">
                              <option value="">Choose</option>
                              <option value="">Male</option>
                              <option value="">Female</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Blood Group</label>
                          <input id="BlGroup" type="text" name="" placeholder="Blood Group" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Domicile</label>
                          <input id="Domicile" type="text" name="" placeholder="Domicile" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Marital Status </label>
                          <select name="" id="MaritalStatus" class="form-control select2">
                              <option value="">Choose</option>
                              <option value=""> Married</option>
                              <option value=""> Unmarried</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Next of Kin</label>
                          <input id="NextofKin" type="text" name="" placeholder="Next of Kin" class="form-control" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Next of Kin Cell Number</label>
                          <input id="NextofKinCellNumber" type="text" name="" placeholder="Next of Kin Cell Number " class="form-control" autocomplete="off" >
                        </div>
                      </div>                   
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Contact Person</label>
                          <input id="ContactPerson" type="text" name="" placeholder="Contact Person " class="form-control" autocomplete="off" >
                        </div>
                      </div>                    
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Contact Person Cell Number</label>
                          <input id="CPCN" type="text" name="" placeholder="Contact Person Cell Number " class="form-control" autocomplete="off" >
                        </div>
                      </div>
                  </div>     
                    <div class=" text-end">
                      <button style="background-color: darkblue;" class="btn text-white shadow float-right" type="button" onclick="validateSection1()">Next</button>
                    </div>
                </div>
              </div>
              <div id="section2" style="display: none;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-primary text-white" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">WSSC</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link bg-success text-white" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">TMA</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row my-4">
                      <div class="col-md-12 ">
                        <div class="card card-success border border-2 border-dark bg-light">
                          <div style="background-color: darkblue;" class="card-header text-white fw-bold">
                            <div class="row">
                              <div class="col-sm-12 col-lg-5">
                                <div class="card-title text-white" style="width: fit-content;">Employement Information
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-7">
                                <h3 class="bg-primary p-2 rounded" style="width: fit-content;">WSSC</h3>
                              </div>
                            </div>  
                          </div>
                          <br><!-- /.card-header -->
                          <div class="card-body ">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employement Group</label>
                                  <select id="EmpGroup" name="Employement_Group" class="form-control">
                                    <option>Choose CONTRACTUAL/CONTINGENT</option>
                                    <option>WSSC CONTRACTUAL</option>
                                    <option>WSSC CONTINGENT</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Class</label>
                                  <select id="Employee_Class" name="Employee_Class" class="form-control">
                                    <option>Select</option>
                                    <option>Wssc Pay</option>
                                    <option>TMA Pay</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Group</label>
                                  <select Employee_Group class="form-control">
                                    <option>Select</option>
                                    <option>WSSCS-ADMIN PAY</option>
                                    <option>WSSCS-COMMERCIAL</option>
                                    <option>WSSCS-MANAGEMENT</option>
                                    <option>WSSCS-MSW PAY</option>
                                    <option>WSSCS-WATER PAY</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Sub Group</label>
                                  <select name="Employee_Sub_Group" class="form-control">
                                    <option>Select</option>
                                    <option>WSSCS-ADMIN-CONTINGENT PAY</option>
                                    <option>WSSCS-ADMIN-CONTRACTUAL PAY</option>
                                    <option>WSSCS-COMMERCIAL-CONTINGENT</option>
                                    <option>WSSCS-COMMERCIAL-CONTRACT</option>
                                    <option>WSSCS-MANAGEMENT</option>
                                    <option>WSSCS-MSW-CONTINGENT PAY</option>
                                    <option>WSSCS-MSW-CONTINGENT PAY (EXT.)</option>
                                    <option>WSSCS-MSW-CONTRACTUAL PAY</option>
                                    <option>WSSCS-WATER-CONTINGENT PAY</option>
                                    <option>WSSCS-WATER-CONTRACTUAL PAY</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Quota</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>DECEASED SON</option>
                                    <option>DISABLED</option>
                                    <option>LETTER OF INTEREST</option>
                                    <option>MINORITIES</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Grade</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>CONTINGENT</option>
                                    <option>COVID-19</option>
                                    <option>DAILY WAGE</option>
                                    <option>INTERNSHIP</option>
                                    <option>M–1</option>
                                    <option>M–3</option>
                                    <option>M–4</option>
                                    <option>M–5</option>
                                    <option>M–6</option>
                                    <option>M–7</option>
                                    <option>S–1</option>
                                    <option>S–2</option>
                                    <option>S–3</option>
                                    <option>S–4</option>
                                    <option>STREAM</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Department</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>ADMINISTRATION</option>
                                    <option>COMMERCIAL</option>
                                    <option>SANITATION</option>
                                    <option>WATER SUPPLY</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Job Tiltle</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>CHIEF EXECUTIVE OFFICER</option>
                                    <option>GM (HR, ADMIN &amp; PROCUREMENT)</option>
                                    <option>MANAGER SOLID WASTE</option>
                                    <option>SENIOR MANAGER COMMERCIAL</option>
                                    <option>DY.MANAGER-ADMIN &amp; PROCUREMENT</option>
                                    <option>AM-WATER SUPPLY</option>
                                    <option>DY.MANAGER-SOLID WASTE</option>
                                    <option>MANAGER WATER SUPPLY OPERATIONS</option>
                                    <option>COMPLAINT MANAGEMENT OFFICER</option>
                                    <option>MECHANICAL OFFICER</option>
                                    <option>ASST.MANAGER HUMAN RESOURCE</option>
                                    <option>CHIEF FINANCIAL OFFICER</option>
                                    <option>DY.MANAGER ACCOUNTS</option>
                                    <option>ADMIN AND PROCUREMENT OFFICER</option>
                                    <option>AM-WATER SUPPLY</option>
                                    <option>ACCOUNTS JUNIOR</option>
                                    <option>BILLING OFFICER</option>
                                    <option>COMPUTER OPERATOR</option>
                                    <option>ACCOUNTS OFFICER</option>
                                    <option>ASSOCIATE ENGINEER</option>
                                    <option>FLEET CUM MECHANICAL OFFICER</option>
                                    <option>IT ASSISTANT</option>
                                    <option>AM-SOLID WASTE</option>
                                    <option>BILLING OFFICER</option>
                                    <option>ADMIN AND PROCUREMENT OFFICER</option>
                                    <option>TECHNICAL EXPERT NETWORK &amp; SYSTEMS</option>
                                    <option>RECEPTIONIST</option>
                                    <option>CAMERA MAN</option>
                                    <option>LEGAL ADVISOR</option>
                                    <option>ADMIN ASSISTANT</option>
                                    <option>DATA ENTRY ASSISTANT</option>
                                    <option>AM–FINANCE</option>
                                    <option>MEDIA OFFICER</option>
                                    <option>OFFICE BOY</option>
                                    <option>PAYROLL OFFICER</option>
                                    <option>DRIVER</option>
                                    <option>GM OPERATIONS &amp; ENGINEERING SERVICES</option>
                                    <option>TW OPERATOR</option>
                                    <option>LINE MAN</option>
                                    <option>ASSIST TO MANAGER OPS</option>
                                    <option>VALVE MAN</option>
                                    <option>WELDER</option>
                                    <option>BILLING SUPERVISOR</option>
                                    <option>LINE INSPECTOR</option>
                                    <option>HELPER</option>
                                    <option>WATER SUPPLY INSPECTOR</option>
                                    <option>BILLING BOY</option>
                                    <option>VALVE WOMAN</option>
                                    <option>SANITARY WORKER</option>
                                    <option>WATCHMAN</option>
                                    <option>SANITARY SUPERVISOR</option>
                                    <option>SANITARY CONDUCTOR</option>
                                    <option>INTERN-CIVIL ENGINEER</option>
                                    <option>SANITARY DRIVER</option>
                                    <option>STREAM INSPECTOR</option>
                                    <option>STREAM WORKER</option>
                                    <option>DRIVER TO CEO</option>
                                    <option>EXCAVATOR OPERATOR</option>
                                    <option>INTERN-ASSOCIATE ENGINEER</option>
                                    <option>LEGAL ADVISOR</option>
                                    <option>LETIGATION CLERK</option>
                                    <option>MSW SORTING SPECIALIST</option>
                                    <option>MANAGMENT TRAINEE OFFICER</option>
                                    <option>COVID19 WORKER</option>
                                    <option>WELDER</option>
                                    <option>HELPER TO PIPE FITTER</option>
                                    <option>SANITARY DRIVER</option>
                                    <option>HELPER</option>
                                    <option>BCC SUPERVISOR</option>
                                    <option>BCC COORDINATOR</option>
                                    <option>INTERN-ELECTRICAL ENGINEER</option>
                                    <option>INTERN-MEDIA COMMUNICATION</option>
                                    <option>WATER SUPPLY SPECIALIST</option>
                                    <option>ASSOCIATE ENGINEER</option>
                                    <option>VALVE MAN</option>
                                    <option>COOK</option>
                                    <option>OFFICE ASSISTANT</option>
                                    <option>INTERNEE</option>      
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Salary Mode</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>BANK TRANSFER</option>
                                    <option>CHEQUE</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Status</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>CONTRACT EXP</option>
                                    <option>ON-DUTY</option>
                                    <option>OTHER</option>
                                    <option>PROBATION</option>
                                    <option>REPATRIATED</option>
                                    <option>RESIGNED</option>
                                    <option>RETIRED</option>
                                    <option>SALARY HOLD</option>
                                    <option>TERMINATED</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee NO</label>
                                  <input type="text" id="EmployeeNowssp" name="" placeholder="Employee NO" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Manager</label>
                                  <input type="text" name="" placeholder="Employee Manager" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Joining Date</label>
                                  <input type="date" name="" placeholder="Joining Date" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Contract Expiry Date</label>
                                  <input type="date" name="" placeholder="" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Last Working Date</label>
                                  <input type="date" name="" placeholder="" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Attendance Supervisor</label>
                                  <input type="text" class="form-control" placeholder="Attendance Supervisor" name="" id="">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Duty Location</label>
                                  <input type="text" name="" placeholder="Duty Location" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Duty Point</label>
                                  <input type="text" name="" placeholder="Duty Point" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row my-4">
                      <div class="col-md-12 ">
                        <div class="card card-success border border-2 border-dark bg-light">
                          <div style="background-color: darkblue;" class="card-header text-white fw-bold">
                            <div class="row">
                              <div class="col-sm-12 col-lg-5">
                                <div class="card-title text-white" style="width: fit-content;">Employement Information</div>
                              </div>
                              <div class="col-sm-12 col-lg-7">
                                <h3 class="bg-success p-2 rounded" style="width: fit-content;">TMA</h3>
                              </div>
                            </div>
                          </div>
                          <br>
                          <!-- /.card-header -->
                          <div class="card-body ">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employement Group</label>
                                  <select name="EmpGrupTma" class="form-control">
                                    <option>Choose Permanent/Daily Wages</option>
                                    <option>TMA PERMANENT</option>
                                    <option>TMA DAILY WAGES</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Class</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>Wssc Pay</option>
                                    <option>TMA Pay</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Group</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>TMA-ADMIN PAY</option>
                                    <option>TMA-COMMERCIAL</option>
                                    <option>TMA-MSW PAY</option>
                                    <option>TMA-WATER PAY</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Sub Group</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>TMA-ADMIN-PERMANENT PAY</option>
                                    <option>TMA-COMMERCIAL-PERMANENT PAY</option>
                                    <option>TMA-MSW-DAILY WAGES PAY</option>
                                    <option>TMA-MSW-PARMANENT PAY</option>
                                    <option>TMA-WATER-DAILY WAGES PAY</option>
                                    <option>TMA-WATER-PERMANENT PAY</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Quota</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>DECEASED SON</option>
                                    <option>DISABLED</option>
                                    <option>LETTER OF INTEREST</option>
                                    <option>MINORITIES</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Grade</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>BPS-2</option>
                                    <option>BPS-3</option>
                                    <option>BPS-4</option>
                                    <option>BPS-5</option>
                                    <option>BPS-6</option>
                                    <option>BPS-7</option>
                                    <option>BPS-9</option>
                                    <option>BPS-11</option>
                                    <option>BPS-14</option>
                                    <option>BPS-16</option>
                                    <option>BPS-17</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Department</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>ADMINISTRATION</option>
                                    <option>COMMERCIAL</option>
                                    <option>SANITATION</option>
                                    <option>WATER SUPPLY</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Job Tiltle</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>OFFICE ASSISTANT</option>
                                    <option>CLERK</option>
                                    <option>JUNIOR CLERK</option>
                                    <option>DRAFTSMAN</option>
                                    <option>DRIVER</option>
                                    <option>NAIB QASID</option>
                                    <option>SANITARY SUPERVISOR</option>
                                    <option>PIPE FITTER</option>
                                    <option>LINE MAN</option>
                                    <option>TW OPERATOR</option>
                                    <option>VALVE MAN</option>
                                    <option>HELPER TO PIPE FITTER</option>
                                    <option>WELDER</option>
                                    <option>CHIEF SANITARY INSPECTOR</option>
                                    <option>ASSTT:SANITARY INSPECTOR</option>
                                    <option>BLACKSMITH</option>
                                    <option>SANITARY WORKER</option>
                                    <option>MALARIA INSPECTOR</option>
                                    <option>MALARIA SUPERVISOR</option>
                                    <option>MOTOR TRANSPORT OFFICER</option>
                                    <option>WATER RATE COLLECTOR</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Salary Mode</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>BANK TRANSFER</option>
                                    <option>CHEQUE</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Status</label>
                                  <select class="form-control">
                                    <option>Select</option>
                                    <option>CONTRACT EXP</option>
                                    <option>ON-DUTY</option>
                                    <option>OTHER</option>
                                    <option>PROBATION</option>
                                    <option>REPATRIATED</option>
                                    <option>RESIGNED</option>
                                    <option>RETIRED</option>
                                    <option>SALARY HOLD</option>
                                    <option>TERMINATED</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee NO</label>
                                  <input id="EmployeeNo" type="text" name="" placeholder="Employee NO" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Employee Manager</label>
                                  <input type="text" name="" placeholder="Employee Manager" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Joining Date</label>
                                  <input type="date" name="" placeholder="Joining Date" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Contract Expiry Date</label>
                                  <input type="date" name="" placeholder="" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Last Working Day</label>
                                  <input type="date" name="" placeholder="" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label> Attendance Supervisor</label>
                                  <input class="form-control" type="text" placeholder="Attendance Supervisor" name="" id="">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Duty Location</label>
                                  <input type="text" name="" placeholder="Duty Location" class="form-control" autocomplete="off" >
                                </div>
                              </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                <label>Duty Point</label>
                                <input type="text" name="" placeholder="Duty Point" class="form-control" autocomplete="off" >
                              </div>
                            </div>
                          </div>
                          </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-end mt-2">
                    <input style="background-color: darkblue;" onclick="validateSection2()" type="button" class="btn text-white  float-right shadow" value="Next">
                  </div>
                </div>
              </div>
              <div id="section3" style="display: none;"></div>
            </div>
          <!-- /.card-body -->
          </div>
        <!-- /.card -->
         </div>
      <!-- Col-12 -->
  </form> 
</div>
  
</div>
    <script>
            function validateSection1() {
                // var log1 = document.getElementById("file1").value;
                // var fName = document.getElementById("fName").value;
                // var mName = document.getElementById("mName").value;
                // var lName = document.getElementById("lName").value;
                // var FatherName = document.getElementById("FatherName").value;
                var cNo = document.getElementById("cNo").value;
                // var email = document.getElementById("email").value;
                // var CAddress = document.getElementById("CAddress").value;
                // var city = document.getElementById("city").value;
                // var PAddress = document.getElementById("PAddress").value;
                // var moNum = document.getElementById("moNum").value;
                // var OfPNum = document.getElementById("OfPNum").value;
                // var ANum = document.getElementById("ANum").value;
                // var DofB = document.getElementById("DofB").value;
                // var Religion = document.getElementById("Religion").value;
                // var Gender = document.getElementById("Gender").value;
                // var BlGroup = document.getElementById("BlGroup").value;
                // var Domicile = document.getElementById("Domicile").value;
                // var MaritalStatus = document.getElementById("MaritalStatus").value;
                // var NextofKin = document.getElementById("NextofKin").value;
                // var NextofKinCellNumber = document.getElementById("NextofKinCellNumber").value;
                // var ContactPerson = document.getElementById("ContactPerson").value;
                // var cPCN = document.getElementById("CPCN").value;
                // // // var vareable1 ="";
              

                if (cNo) {
                    document.getElementById("section1").style.display = "none";
                    document.getElementById("section2").style.display="block";
                } else {
                    alert("Please fill in the required fields");
                }
            }

            function validateSection2() {
                

                    document.getElementById("section2").style.display = "none";
                    document.getElementById("section3").style.display = "block";
                
            }

            function backToSection1() {
                document.getElementById("section2").style.display = "none";
                document.getElementById("section1").style.display = "block";
            }

            function backToSection2() {
                document.getElementById("section3").style.display = "none";
                document.getElementById("section2").style.display = "block";
            }
        </script>

    <?php include('link/desigene/script.php')?>
</body>
</html>