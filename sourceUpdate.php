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
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Source Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Source Info</a>
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
                   
                    <form class="form form-horizontal" action="phpcodes-Update.php" method="post">
                      <div class="form-body">
                        <?php 
					  $d_source_id = $_POST['d_source_id'];
					  $select="SELECT * FROM `pantra`.`source` WHERE d_source_id='$d_source_id'";
			
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$d_source_id  = $row['d_source_id'];
							$d_source_patient  = $row['d_source_patient'];
							$d_source_confirmed_location = $row['d_source_confirmed_location'];
							$d_source_state = $row['d_source_state'];
							$d_source_district= $row['d_source_district'];
							$d_source_panchayath = $row['d_source_panchayath'];
							$d_source_ward_no = $row['d_source_ward_no'];
							$d_source_in_date = $row['d_source_in_date'];
							$d_source_up_date = $row['d_source_up_date'];
							
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$d_source_patient'";
							$resultst = mysqli_query($dbconnection,$queryst);	
							while($rowst=mysqli_fetch_row($resultst))
							{
								$p_name = $rowst[0];
								$p_mobilenum = $rowst[1];
							}
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='d_source_id' id = 'd_source_id' value = '$d_source_id'>
							<h4 class='form-section'><i class='ft-user'></i> Source Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Name & Mobile </label>
                          <div class='col-md-9'>
                            $p_name ($p_mobilenum)
                          </div>
                        </div>
						 <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Location </label>
                          <div class='col-md-9'>
                            <input type='text' id='d_source_confirmed_location' class='form-control' value='$d_source_confirmed_location'
                            name='d_source_confirmed_location'>
                          </div>
                        </div>
						
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>State</label>
                          <div class='col-md-9'>
                            <input type='text' id='d_source_state' class='form-control' value='$d_source_state' name='d_source_state'>
                          </div>
                        </div>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>District </label>
                          <div class='col-md-9'>
                            <input type='text' id='d_source_district' class='form-control' value='$d_source_district' name='d_source_district'>
                          </div>
                        </div>
                        
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Panchayath</label>
                          <div class='col-md-9'>
                            <textarea id='d_source_panchayath' rows='5' class='form-control' name='d_source_panchayath' placeholder='About Project'>$d_source_panchayath</textarea>
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Ward No</label>
                          <div class='col-md-9'>
                            <textarea id='d_source_ward_no' rows='5' class='form-control' name='d_source_ward_no' placeholder='About Project'>$d_source_ward_no</textarea>
                          </div>
                        </div>
                      </div>";
							}
						}
					  
					  ?>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnsourceup" name="btnsourceup" class="btn btn-info">
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
