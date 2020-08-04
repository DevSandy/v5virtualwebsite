<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('../../config/database.php');
include('../../config/database.php');
?>
<?php
if(isset($_POST['add_project']))
{ 
   
$sqlpen00012="SELECT * FROM `super_visior` where svid='$_POST[svid]'"; 
$sqlpen1000012=mysql_query($sqlpen00012);
$sqlpen212=mysql_fetch_array($sqlpen1000012);

$save=mysql_query("INSERT INTO project_site(project_id,project_name,project_address,project_duration,project_estimate,project_status,project_descp,sv_name,svid) VALUES ('$_POST[project_id]','$_POST[project_name]','$_POST[project_address]','$_POST[project_duration]','$_POST[project_estimate]','processing','$_POST[project_descp]','$sqlpen212[sv_name]','$sqlpen212[svid]')");
mkdir("project/$_POST[project_id]");
header("location:welcome_admin-sucess-$_GET[admin_id]");
}
?>
<?php
if(isset($_POST['add_supervisior']))
{    
 
$save=mysql_query("INSERT INTO super_visior(ps_id,sv_name,sv_address,sv_email,sv_number) VALUES ('$_POST[ps_id]','$_POST[sv_name]','$_POST[sv_address]','$_POST[sv_email]','$_POST[sv_number]')");
header("location:welcome_admin-sucess-$_GET[admin_id]");
}
?>
<?php
if(isset($_POST['add_workers']))
{    
 
$save=mysql_query("INSERT INTO workers(wk_id,w_name,w_address,w_number,w_job) VALUES ('$_POST[wk_id]','$_POST[w_name]','$_POST[w_address]','$_POST[w_number]','$_POST[w_job]')");
header("location:welcome_admin-sucess-$_GET[admin_id]");
}
?>
<?php
if(isset($_POST['add_supplier']))
{    
 
$save=mysql_query("INSERT INTO supplier(sp_id,sp_name,sp_address,sp_number,sp_comname,sp_comnumber,sp_email) VALUES ('$_POST[sp_id]','$_POST[sp_name]','$_POST[sp_address]','$_POST[sp_number]','$_POST[sp_comname]','$_POST[sp_comnumber]','$_POST[sp_email]')");
header("location:welcome_admin-sucess-$_GET[admin_id]");
}
?>
<!DOCTYPE html>
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
                      
                      <?php
					  if($_GET['page']=="cproject")
					  {
						  ?>  <h1 class="mt-4">Project</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Project</li>
                        </ol>
                        <?php } ?>
                        
                        
                               <?php
					  if($_GET['page']=="sup")
					  {
						  ?>  <h1 class="mt-4">Supervisior</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Supervisior</li>
                        </ol>
                        <?php } ?>
                        
                        <?php
					  if($_GET['page']=="workers")
					  {
						  ?>  <h1 class="mt-4">Workers</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Workers</li>
                        </ol>
                        <?php } ?>
                        
                        <?php
					  if($_GET['page']=="supplier")
					  {
						  ?>  <h1 class="mt-4">Supplier</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Supplier</li>
                        </ol>
                        
                        <?php 
						if($_GET['action']=="edit")
						{
							?>
                            
                            <?php }
							 else
							 {
								 ?>
                        <?php include("create_supplier.php"); ?>
                        <?php } ?>
                        <?php } ?>
                        
                        <?php
					  if($_GET['page']=="cproject")
					  {
						  ?>
                           <?php 
						  if(isset($_GET['action']))
						  {
						  if($_GET['action']=="edit")
						  {
							  ?>
                              <?php include("edit_project.php"); ?>
                              <?php 
						  }
						  }
						  else
						  {
							  ?>
                          <?php include("create_project.php"); ?>
                        
                        <?php } }?>


                        <?php
					  if($_GET['page']=="sup")
					  {
						  ?>
                          <?php 
						  if(isset($_GET['action']))
						  {
						  if($_GET['action']=="edit")
						  {
							  ?>
                              <?php include("edit_supervisior.php"); ?>
                              <?php 
						  }
						  }
						  else
						  {
							  ?>
                          <?php include("create_supervisior.php"); ?>
                          <?php } ?>
                        
                        <?php } ?>
                        
                        
                        <?php
					  if($_GET['page']=="workers")
					  {
						  ?>
                          <?php include("create_workers.php"); ?>
                        
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
