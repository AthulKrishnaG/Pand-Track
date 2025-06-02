	<!--side Database start-->
	<?php
        include("dbconnection.php");
		include("session.php");
    ?>
	<!--side Database end-->
	<!--side Header start-->
	<?php
        include("header.php");
    ?>
	<!--side Header end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Discharge Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Discharge Info</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-content collpase show">
                  <div class="card-body">
                   
                    <form class="form form-horizontal" action="phpcodes-Insert.php" method="post">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i>Discharge Info</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">patient name</label>
                          <div class="col-md-9">
                            <input type="text" id="discharge_p_name" class="form-control" placeholder="patient name"
                            name="discharge_p_name">
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput7">Gender</label>
                          <div class="col-md-9">
                            <select id="discharge_p_gender" name="discharge_p_gender" class="form-control">
                              <option value="" selected="" disabled="">--Select Gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
							  <option value="others">others</option> 
                            </select>
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">Mobile Number </label>
                          <div class="col-md-9">
                            <input type="text" id="discharge_p_mobilenum" class="form-control" placeholder="patient mobile number " name="discharge_p_mobilenum">
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">Address </label>
                          <div class="col-md-9">
                            <input type="text" id="discharge_p_address" class="form-control" placeholder="patient address " name="discharge_p_address">
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">Email </label>
                          <div class="col-md-9">
                            <input type="text" id="discharge_p_email" class="form-control" placeholder="patient email " name="discharge_p_email">
                          </div>
                        </div>

   
   
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">Disease Type</label>
                          <div class="col-md-9">
                            <input type="text" id="discharge_p_type	" class="form-control" placeholder="disease type" name="discharge_p_type">
                          </div>
                        </div>
                        
                        
                       
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btndischargeadd" name="btndischargeadd" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
          </div>
          
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  	<!--side menu start-->
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->
