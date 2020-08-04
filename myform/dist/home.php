<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('../../config/database.php');
include('../../config/database.php');
?>
<?php
if(isset($_GET['page']))
{
	if($_GET['page']=="cproject")
	{
	if($_GET['action']=="delete")
	{
		$sql1="DELETE FROM project_site WHERE project_id='$_GET[project_id]'";
$resulty=mysql_query($sql1);



$sql12="DELETE FROM stock WHERE project_id='$_GET[project_id]'";
$resulty=mysql_query($sql12);

$sql12="DELETE FROM stock WHERE project_id='$_GET[project_id]'";
$resulty=mysql_query($sql12);

$sql123="DELETE FROM purchase WHERE project_id='$_GET[project_id]'";
$resulty=mysql_query($sql123);

$sql123="DELETE FROM purchase WHERE project_id='$_GET[project_id]'";
$resulty=mysql_query($sql123);

header("location:welcome_admin-$_GET[admin_id]");
	}}
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
                        <h1 class="mt-4">Dashboard</h1>
                        
                          
                          <?php
						  if(isset($_GET['action']))
						  {
							  ?>
                              <ol class="breadcrumb mb-4" style="background-color:#F00; color:#FFF">
                                <li class="breadcrumb-item active" style="color:#FFF" >Create Success</li></ol>
                                <?php } else
								{
									?>
                                    <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Dashboard</li></ol>
                                    <?php } ?>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Project <?php
                                    $sql2=mysql_query("select * from project_site");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count!=0)
				{
					?>
                    <strong>(<?php echo $comment_count; ?>)</strong>
                    
                    <?php } ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="action-cproject-1000-<?php 
date_default_timezone_set("Asia/Calcutta");
$n_time=date("h:i A");
$stamp = date("his");
$random_id_length = 6;
$rndid = "crypt(uniqid(rand(),1))"; 
$rndid = strip_tags(stripslashes($rndid)); 
$rndid = str_replace(".","",$rndid); 
$rndid = strrev(str_replace("/","",$rndid));
$rndid1 = substr($rndid,0,$random_id_length); 
$vf_d2eid = "$stamp";
echo $vf_d2eid?>">Create Project</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Supervisior <?php
                                    $sql2=mysql_query("select * from super_visior");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count!=0)
				{
					?>
                    <strong>(<?php echo $comment_count; ?>)</strong>
                    
                    <?php } ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="action-sup-1000-<?php 
date_default_timezone_set("Asia/Calcutta");
$n_time=date("h:i A");
$stamp = date("his");
$random_id_length = 6;
$rndid = "crypt(uniqid(rand(),1))"; 
$rndid = strip_tags(stripslashes($rndid)); 
$rndid = str_replace(".","",$rndid); 
$rndid = strrev(str_replace("/","",$rndid));
$rndid1 = substr($rndid,0,$random_id_length); 
$vf_d2eid = "$stamp";
echo $vf_d2eid?>">Create Supervisior</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Workers <?php
                                    $sql2=mysql_query("select * from workers");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count!=0)
				{
					?>
                    <strong>(<?php echo $comment_count; ?>)</strong>
                    
                    <?php } ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="action-workers-1000-<?php 
date_default_timezone_set("Asia/Calcutta");
$n_time=date("h:i A");
$stamp = date("his");
$random_id_length = 6;
$rndid = "crypt(uniqid(rand(),1))"; 
$rndid = strip_tags(stripslashes($rndid)); 
$rndid = str_replace(".","",$rndid); 
$rndid = strrev(str_replace("/","",$rndid));
$rndid1 = substr($rndid,0,$random_id_length); 
$vf_d2eid = "$stamp";
echo $vf_d2eid?>">Create Workers</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Supplier <?php
                                    $sql2=mysql_query("select * from supplier");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count!=0)
				{
					?>
                    <strong>(<?php echo $comment_count; ?>)</strong>
                    
                    <?php } ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="action-supplier-1000-<?php 
date_default_timezone_set("Asia/Calcutta");
$n_time=date("h:i A");
$stamp = date("his");
$random_id_length = 6;
$rndid = "crypt(uniqid(rand(),1))"; 
$rndid = strip_tags(stripslashes($rndid)); 
$rndid = str_replace(".","",$rndid); 
$rndid = strrev(str_replace("/","",$rndid));
$rndid1 = substr($rndid,0,$random_id_length); 
$vf_d2eid = "$stamp";
echo $vf_d2eid?>">Create Supplier</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <td>S.No</td>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Budget</th>
                                                <th>Duration</th>
                                                <th>Supervisior</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `project_site`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                            <td><?php echo $x; ?></td>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                <td><?php echo $sqlpen2['project_name']; ?></td>
                                                <td><?php echo $sqlpen2['project_estimate']; ?></td>
                                                <td><?php echo $sqlpen2['project_duration']; ?></td>
                                                <td><?php echo $sqlpen2['sv_name']; ?></td>
                                                 <td><a href="action-edit-cproject-<?php echo $_GET['admin_id']; ?>-<?php echo $sqlpen2['project_id']; ?>"><i class="fa fa-edit"></i></a> | <a href="home.php?page=cproject&action=delete&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $sqlpen2['project_id']; ?>"><i class="fa fa-trash"></i></a></td>
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
