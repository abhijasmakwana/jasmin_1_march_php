<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            contact
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"></a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
					
				
                <div class="login-grids">
				   <div class="col-md-6 log">
				     <h3></h3>
					 <form method="post" action="">
					 <div class="form-group">
					      <label>Name</label>
                          <input type="text" name="Name" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Enter password"/>
                    </div>
					
					 <div class="form-group">
                      <label>Phone_no</label>
                      <input type="text" name="Phone_no" class="form-control" placeholder="Enter password"/>
                    </div>
				
				    <div class="form-group">
                      <input type="submit" name="submit" value="submit" class="btn btn-primary">
					  
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
