<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            manage_car_adv
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">manage_car_adv</a></li>
            <li class="active">manage_car_adv</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">manage_car_adv</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Caradv_id</th>  
                        <th>Cust_id</th>
                        <th>Cartype_id</th>
                        <th>Car_no</th>
					    <th>RC_no</th>
						<th>Car_status</th> 
						<th>price</th>
						<th>Delete</th>
					
						
						
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($car_adv_arr as $d)
					{
					?>
                      <tr>
                        <td><?php echo $d->Caradv_id?></td>
						<td><?php echo $d->Cust_id?></td>
						<td><?php echo $d->Cartype_id?></td>
						<td><?php echo $d->Car_no?></td>
						<td><?php echo $d->RC_no?></td>
						<td><?php echo $d->Car_status?></td>
						<td><?php echo $d->price?></td>				
					    <td><a href="delete?btn_Caradv_id=<?php echo $d->Caradv_id?>">Delete</a></td>
					    

				
						
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