<?php
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage booking
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage booking</a></li>
            <li class="active">Manage booking</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					    <th>Booking_id</th>
                        <th>Cust_id</th>
                        <th>Loca_id</th>
						<th>Cartype_id</th>
						<th>Description</th>
                        <th>Price</th>
                        <th>delete</th>
						
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($booking_arr as $d)
					{
					?>
                      <tr>
						<td><?php echo $d->Booking_id?></td>
						<td><?php echo $d->Cust_id?></td>
						<td><?php echo $d->Loca_id?></td>
						<td><?php echo $d->Cartype_id?></td>
						<td><?php echo $d->Description?></td>
						<td><?php echo $d->Price?></td>
						 <td><a href="delete?btn_Booking_id=<?php echo $d->Booking_id?>">Delete</a></td>
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