<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage contact
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage contact</a></li>
            <li class="active">Manage contact</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">contact</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					    <th>Contact_id</th>
                        <th>Cust_id</th>
                        <th>Email</th>
                        <th>Phone_no</th>
						<th>delete</th>
					  
						
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($contact_arr as $d)
					{
					?>
                      <tr>
						 <td><?php echo $d->Contact_id?></td>
						 <td><?php echo $d->Cust_id?></td>
						 <td><?php echo $d->Email?></td>
						 <td><?php echo $d->Phone_no?></td>
						 <td><a href="delete?btn_Contact_id=<?php echo $d->Contact_id?>">Delete</a></td>
					
					  </tr>
                    <?php
					}
					?> 
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <?php
	include_once('footer.php');
	?>