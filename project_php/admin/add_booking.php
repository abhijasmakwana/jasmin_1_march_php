<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           add_booking
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">add_booking</a></li>
            <li class="active">add_booking</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">add_booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    
					<div class="form-group">
                      <label>Booking_id</label>
                      <input type="text" name="Booking_id" class="form-control" placeholder="Enter Title"/>
                    </div>
					
					
					<div class="form-group">
                      <label>Title</label>
                      <input type="text" name="Title" class="form-control" placeholder="Enter Title"/>
                    </div>
                    
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="Price" class="form-control" placeholder="Enter Title"/>
                    </div>
                  

                  <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
					
					
                 

                     
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
