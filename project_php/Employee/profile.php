<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           profile
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">profile</a></li>
            <li class="active">profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">profile</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
					
					 <table >
								<tr>
									<td width="30%"><h2>ID  : </h2></td>
									<td width="30%"><h2><?php echo $fetch->Employee_id;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>first_name : </h2></td>
									<td><h2><?php echo $fetch->First_name;?></h2></td>
								</tr>
								<tr>
									<td><h2>Last_name : </h2></td>
									<td><h2><?php echo $fetch->Last_name;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>Gender : </h2></td>
									<td><h2><?php echo $fetch->Gender;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>Email : </h2></td>
									<td><h2><?php echo $fetch->Email;?></h2></td>
								</tr>
								<tr>
									<td><h2>Mobile_no  : </h2></td>
									<td><h2><?php echo $fetch->Mobile_no;?></h2></td>
								</tr>
								<tr>
									<td><a href="edit_employee?btn_Employee_id=<?php echo $fetch->Employee_id;?>" class="btn btn-primary">Edit</a></td>
								</tr>
							</table>
						</div>
			
					 
					   </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include_once('footer.php');
?>
