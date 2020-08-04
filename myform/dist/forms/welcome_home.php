<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('../../config/database.php');
include('../../config/database.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include("header.php"); ?>
        <div id="layoutSidenav">
            <?php include("menu.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        
                          
                        
                        
                        
                        <?php
						if($_GET['page']=="welcome")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Projects</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Budget</th>
                                                <th>Duration</th>
                                                <th>Supervisior</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Budget</th>
                                                <th>Duration</th>
                                                <th>Supervisior</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `project_site`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                <td><?php echo $sqlpen2['project_name']; ?></td>
                                                <td><?php echo $sqlpen2['project_estimate']; ?></td>
                                                <td><?php echo $sqlpen2['project_duration']; ?></td>
                                                <td><?php echo $sqlpen2['sv_name']; ?></td>
                                                <td>Edit | View</td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        
                        <?php
						if($_GET['page']=="supervisior")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Supervisior</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `super_visior`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['ps_id']; ?></td>
                                                <td><?php echo $sqlpen2['sv_name']; ?></td>
                                                <td><?php echo $sqlpen2['sv_number']; ?></td>
                                                <td><?php echo $sqlpen2['sv_email']; ?></td>
                                                <td><?php echo $sqlpen2['sv_address']; ?></td>
                                                <td>Edit | View</td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                         <?php
						if($_GET['page']=="workers")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Workers</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr>
                                               <th>Id</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `workers`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['wk_id']; ?></td>
                                                <td><?php echo $sqlpen2['w_name']; ?></td>
                                                <td><?php echo $sqlpen2['w_number']; ?></td>
                                                <td><?php echo $sqlpen2['w_address']; ?></td>
                                                <td>Edit | View</td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        <?php
						if($_GET['page']=="supplier")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Supplier</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr>
                                               <th>Id</th>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Number</th>
                                                <th>Land Line</th>
                                                 <th>Address</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Id</th>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Number</th>
                                                <th>Land Line</th>
                                                 <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `supplier`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['sp_id']; ?></td>
                                                <td><?php echo $sqlpen2['sp_name']; ?></td>
                                                <td><?php echo $sqlpen2['sp_comname']; ?></td>
                                                <td><?php echo $sqlpen2['sp_number']; ?></td>
                                                 <td><?php echo $sqlpen2['sp_comnumber']; ?></td>
                                                  <td><?php echo $sqlpen2['sp_address']; ?></td>
                                                <td>Edit | View</td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </main>
                <?php include("footer.php"); ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
