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
          <h3 class="content-header-title">Primary Contact Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Primary Contact Info</a>
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
					  $c_p_id = $_POST['c_p_id'];
					  $select="SELECT * FROM `pantra`.`primary_contact` WHERE c_p_id='$c_p_id'";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$c_p_id  = $row['c_p_id'];
							$c_p_patient = $row['c_p_patient'];
							$c_p_person = $row['c_p_person'];
							$c_p_district = $row['c_p_district'];
							
							$c_p_town = $row['c_p_town'];
							$c_p_place	 = $row['c_p_place'];
							$c_p_in_date = $row['c_p_in_date'];
							$c_p_up_date = $row['c_p_up_date'];
							
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$c_p_patient'";
							$resultst = mysqli_query($dbconnection,$queryst);	
							while($rowst=mysqli_fetch_row($resultst))
							{
								$p_name = $rowst[0];
								$p_mobilenum = $rowst[1];
							}
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='c_p_id' id = 'c_p_id' value = '$c_p_id'>
							<h4 class='form-section'><i class='ft-user'></i> Primarycontact Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Name & Mobile </label>
                          <div class='col-md-9'>
                            $p_name ($p_mobilenum)
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Primarycontact Tittle</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_p_person' class='form-control' value='$c_p_person'
                            name='c_p_person'>
                         </div>
						</div>
                      
                     
                       
					    <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>District</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_p_district' class='form-control' value='$c_p_district' name='c_p_district'>
                          </div>
                        </div>
                         
						 <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Town</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_p_town' class='form-control' value='$c_p_town' name='c_p_town'>
                          </div>
                        </div>
                       <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Place</label>
                          <div class='col-md-9'>
                            <input type='text' id='c_p_place' class='form-control' value='$c_p_place' name='c_p_place'>
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
                        <button type="submit" id="btnprimarycontactUp" name="btnprimarycontactUp" class="btn btn-info">
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
