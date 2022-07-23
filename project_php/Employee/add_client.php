<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          add_client
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">add_client</a></li>
            <li class="active">add_client</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">add_client</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
					
					 <div class="form-group">
                      <label>User_name</label>
                      <input type="text" name="User_name" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					<div class="form-group">
                      <label>Password</label>
                      <input type="Password" name="Password" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					 <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					 <div class="form-group">
                      <label>Mobile_no</label>
                      <input type="text" name="Mobile_no" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					 <div class="form-group">
                      <label>Adharcard_no</label>
                      <input type="text" name="Adharcard_no" class="form-control" placeholder="Enter User"/>
                    </div>
					
                    <div class="form-group">
                      <label>Liacence_no</label>
                      <input type="text" name="Liacence_no" class="form-control" placeholder="Enter User"/>
                    </div>
							
                    <div class="form-group">
                      <label>RC_no</label>
                      <input type="text" name="RC_no" class="form-control" placeholder="Enter User"/>
                    </div>
                   
				     <div class="form-group">
                      <label>Car_no</label>
                      <input type="text" name="Car_no" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					
                    
                    <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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
