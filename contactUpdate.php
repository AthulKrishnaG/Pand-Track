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
          <h3 class="content-header-title">Contact Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Contact Info</a>
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
					  $c_id = $_POST['c_id'];
					  $select="SELECT * FROM `pantra`.`contact` WHERE c_id='$c_id'";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$c_id  = $row['c_id'];
							$c_patient = $row['c_patient'];
							$c_district = $row['c_district'];
							$c_visited_places = $row['c_visited_places'];
							$c_explain_the_activities= $row['c_explain_the_activities'];
							$c_explanation_activities_date = $row['c_explanation_activities_date'];
							$c_explanation_activities_time = $row['c_explanation_activities_time'];
							$c_in_date = $row['c_in_date'];
							$c_up_date = $row['c_up_date'];
							
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$c_patient'";
							$resultst = mysqli_query($dbconnection,$queryst);	
							while($rowst=mysqli_fetch_row($resultst))
							{
								$p_name = $rowst[0];
								$p_mobilenum = $rowst[1];
							}
						     $i = $i+1;
							echo "
							<input type = 'hidden' name='c_id' id = 'c_id' value = '$c_id'>
							<h4 class='form-section'><i class='ft-user'></i> Contact info </h4>
                         <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Name & Mobile </label>
                          <div class='col-md-9'>
                            $p_name ($p_mobilenum)
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>District</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_district' class='form-control' value='$c_district'
                            name='c_district'>
                          </div>
                        </div>
						
                        
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Places</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_visited_places' class='form-control' value='$c_visited_places' name='c_visited_places'>
                          </div>
                        </div>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Explanation</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_explain_the_activities' class='form-control' value='$c_explain_the_activities' name='c_explain_the_activities'>
                          </div>
                        </div>
					    <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Date</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_explanation_activities_date' class='form-control' value='$c_explanation_activities_date' name='c_explanation_activities_date'>
                          </div>
                        </div>
						 <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Time</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_explanation_activities_time' class='form-control' value='$c_explanation_activities_time' name='c_explanation_activities_time'>
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
                        <button type="submit" id="btncontactUp" name="btncontactUp" class="btn btn-info">
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
