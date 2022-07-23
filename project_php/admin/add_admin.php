<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              add admin        
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add employee</a></li>
            <li class="active">add employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">add employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="add_admin" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="Username" class="form-control" placeholder="Enter User"/>
                    </div>
                   
					
                    
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter Password"/>
                    </div>
					
					
					 <div class="form-group">
                      <label>First_name</label>
                      <input type="text" name="First_name" class="form-control" placeholder="Enter First_name"/>
                    </div>
					
			
				    <div class="form-group">
                      <label>Last_name</label>
                      <input type="text" name="Last_name" class="form-control" placeholder="Enter Last_name"/>
                    </div>
					
					
					<div class="form-group">
                      <label>Birth_of_date</label>
                      <input type="text" name="Birth_of_date" class="form-control" placeholder="Enter Birth_of_date"/>
                    </div>
					
				
				  <div class="form-group">
				          <label>Gender</label>
						   <input type="radio" name="gender"/> >Male
		                   <input type="radio" name="gender"/>>Female
				  </div>		   

                   <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Enter Email"/>
                    </div>
					
					
					 <div class="form-group">
                      <label>Mobile_no</label>
                      <input type="text" name="Mobile_no" class="form-control" placeholder="Enter Mobile_no"/>
                    </div>
					
					 <div class="form-group">
                      <label>job_title</label>
                      <input type="text" name="job_title" class="form-control" placeholder="Enter job_title"/>
                    </div>
                   
				    <div class="form-group">
                      <label>salary</label>
                      <input type="text" name="salary" class="form-control" placeholder="Enter salary"/>
                    </div>
					
					 <div class="form-group">
                      <label>Address</label>
                      <textarea name="Address" rows="5" cols="50"></textarea>
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
ss