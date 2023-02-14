<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('link/links.php') ?>
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
    <?php include('link/desigene/navbar.php') ?>
    <div class="clearfix">&nbsp;</div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-success border border-2 border-dark bg-light">
            <div style="background-color: darkblue;" class="card-header text-white fw-bold">
              <div class="card-title text-white">Employee Pay</div>

            </div>
            <br>
            <!-- /.card-header -->
            <div class="card-body ">
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mt-2">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Employee No</label>
                      <input type="text" class="form-control" id="employee_no" name="employee_no">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>type</label>
                      <input type="text" class="form-control" id="type" name="type">
                    </div>
                  </div>
                 
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Father Name</label>
                      <input type="text" class="form-control" id="father_name" name="father_name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Job Title</label>
                      <input type="text" class="form-control" id="job_title" name="job_title">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Fund(Employer+Employe Contrib)</label>
                      <input type="text" class="form-control" id="type" name="type">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Gross Pay</label>
                      <input type="text" class="form-control" id="gross_pay" name="gross_pay">
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Deduction</label>
                      <input type="text" class="form-control" id="deduction" name="deduction">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Net Pay</label>
                      <input type="text" class="form-control" id="net_pay" name="net_pay">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="clearfix">&nbsp;</div>
                      <button type="button" class="btn btn-primary">search</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
              <div class="clearfix">&nbsp;</div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                <table id="employee_details" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Name</th>
                      <th>Father Name</th>
                      <th>Cnic</th>
                      <th>Date Of Birth</th>
                      <th>Gender</th>
                      <th>Marital Status</th>
                      <th>Domecile</th>
                      <th>Blood Group</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- Col-12 -->
    </div>
  </div>
  <div class="clearfix">&nbsp;</div>
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">

        <div class="card card-success">
          <div class="card card-success border border-2 border-dark bg-light">
            <div style="background-color: darkblue;" class="card-header  text-white fw-bold">
              <div class="card-title">Salary Imbursement</div>

            </div>


            <!-- /.card-header -->
            <div class="card-body bg-light">
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="clearfix">&nbsp;</div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Payment Mode</label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio1" name="radio1" value="option1">
                      <label class="form-check-label" for="radio1">Bank Transfer</label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="radio2" value="option2">
                      <label class="form-check-label" for="radio1">Cross Cheque</label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio3" name="radio3" value="option3">
                      <label class="form-check-label" for="radio1">Cash Payment</label>
                    </div>
                  </div>
                  <div class="clearfix">&nbsp;</div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Employee Pay Group </label>
                      <input type="text" name="" placeholder="Employee Pay Group" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                      <label>Employee Pay Sub Group </label>
                      <input type="text" name="" placeholder="Employee Pay Sub Group" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                      <label>Employee Pay Classification</label>
                      <input type="text" name="employee_pay_classification" id="employee_pay_classification" placeholder="Employee Pay Classification" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>


                  <div class="col-4">
                    <div class="form-group">
                      <label>Salary Bank</label>
                      <select name="salary_bank" id="salary_bank" class="form-control">
                        <option value="">Select Salary Bank</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Salary Branch</label>
                      <input type="text" name="salary_branch" id="salary_branch" placeholder="Salary Branch" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Account No</label>
                      <input type="text" name="account_no" id="account_no" placeholder="Account No" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Pay Type</label>
                      <input type="text" name="pay_type" id="pay_type" placeholder="Pay Type" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>EOBI No</label>
                      <input type="text" name="eobi_no" id="eobi_no" placeholder="EOBI No" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Bill Walved Off</label>
                      <input type="text" name="bill_walved_off" id="bill_walved_off" placeholder="Bill Walved Off" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Weekly Working Days</label>
                      <select name="salary_bank" id="salary_bank" class="form-control">
                        <option value="">Select Working Days</option>
                        <option value="">6-Days Week</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Bill Walved Off</label>
                      <input type="text" name="bill_walved_off" id="bill_walved_off" placeholder="Bill Walved Off" class="form-control" autocomplete="off" required="">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Remarks</label>
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Col-12 -->
      </div>
      <!-- row -->
    </div>
  </div>
  <div class="clearfix">&nbsp;</div>
  <div class="clearfix">&nbsp;</div>
  <?php include('link/desigene/script.php') ?>
  
</body>

</html>