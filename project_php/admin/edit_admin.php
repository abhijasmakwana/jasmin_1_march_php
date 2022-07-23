<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Edit admin
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit admin</a></li>
            <li class="active">Edit Admin</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Edit Admin</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
					
					 <div class="form-group">
                      <label>Admin Id</label>
                      <input type="text" name="Admin_id" value="<?php echo $fetch->Admin_id;?>" class="form-control" placeholder="Enter User"/>
                    </div>
					
					
					
					<div class="form-group">
                      <label>First_name</label>
                      <input type="text" name="First_name" value="<?php echo $fetch->First_name;?>" class="form-control" placeholder="Enter User"/>
                    </div>
					
					<div class="form-group">
                      <label>Last_name</label>
                      <input type="text" name="Last_name" value="<?php echo $fetch->Last_name;?>" class="form-control" placeholder="Enter User"/>
                    </div>


                   	
				   <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="Email" value="<?php echo $fetch->Email;?>" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					<div class="form-group">
                      <label>Mobile_no</label>
                      <input type="text" name="Mobile_no" value="<?php echo $fetch->Mobile_no;?>" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					
                    <div class="form-group">
                      <input type="submit" name="update" value="save" class="btn btn-primary">
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
