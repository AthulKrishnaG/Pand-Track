	<!--side menu start-->
	<?php
        include("dbconnection.php");
		include("session.php");
    ?>

	<?php
        include("header.php");
    ?>
	<!--side menu end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Symptoms Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Symptoms Info</a>
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
					  $d_s_id = $_POST['d_s_id'];
					  $select="SELECT * FROM `pantra`.`symptoms` WHERE d_s_id='$d_s_id'";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$d_s_id  = $row['d_s_id'];
							$d_s_name = $row['d_s_name'];
							$d_s_date_of_onset = $row['d_s_date_of_onset'];
							$in_date = $row['in_date'];
							$up_date = $row['up_date'];
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='d_s_id' id = 'd_s_id' value = '$d_s_id'>
							<h4 class='form-section'><i class='ft-user'></i> Symptoms Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Symptoms Name</label>
                          <div class='col-md-9'>
                            <input type='text' id='d_s_name' class='form-control' value='$d_s_name'
                            name='d_s_name'>
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Date Of Onset Of The Symptoms</label>
                          <div class='col-md-9'>
                            <input type='text' id='d_s_date_of_onset' class='form-control' value='$d_s_date_of_onset' name='d_s_date_of_onset'>
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
                        <button type="submit" id="btnsymptomsUp" name="btnsymptomsUp" class="btn btn-info">
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
