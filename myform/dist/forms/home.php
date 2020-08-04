<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('../../../config/database.php');
include('../../../config/database.php');
?>
<?php
if(isset($_POST['add_document']))
{ 
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_POST[project_id]/". $_FILES["image"]["name"]);
    $location="$_POST[project_id]/".$_FILES["image"]["name"];
	date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
	$save=mysql_query("INSERT INTO project_doucment(project_id,n_datee,location) VALUES ('$_POST[project_id]','$n_datee','$location')");
	header("location:project-admin-$_POST[admin_id]-$_POST[project_id]");
	
	
}?><!DOCTYPE html>
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
                        <h1 class="mt-4">Project</h1>
                        
                          
                                                             <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active"><strong><?php
                                     $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_name'];
?></strong></li></ol>
                                    
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Customer 
                    
                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php
                                    $sql2=mysql_query("select * from project_customer where project_id='$_GET[project_id]'");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count!=0)
				{
					?>
                                        
                     <?php  $sqlpen000="SELECT * FROM `project_customer` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['pc_name'];?>

                  
                                        
<?php }
else
{
	?>
    <a class="small text-white stretched-link" href="customer-admin-1000-<?php 

echo $_GET['project_id']; ?>">Add Customer</a>
    
    <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><a style="color:#FFF;" href="action_page.php?page=project_document&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $_GET['project_id']; ?>">Project Doucment   <?php
                                    $sql2=mysql_query("select * from project_doucment where project_id='$_GET[project_id]'");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count!=0)
				{
					?>
                                        
                     <strong>(<?php echo $comment_count; ?>)</strong>

                  
                                        
<?php }
	?></a>
                    
                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       
    <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
    <input name="add_document" type="hidden" value="add_document" />
                                             <input name="project_id" type="hidden" value="<?php echo $sqlpen2['project_id']; ?>" />
                                              <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>" />
                                            <style>
file-upload {
	position: relative;
	display: inline-block;
}

.file-upload__label {
  display: block;
 
  width:124px;
  color: #fff;
  background: #39F;
  border-radius: .4em;
  transition: background .3s;
  alignment-adjust:central;
  
  
  &:hover {
     cursor: pointer;
     background: #000;
  }
}
    .file-upload__input:hover
	{
		background-color:#06F;
	}
.file-upload__input {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    font-size: 1;
    width:0;
    height: 50%;
    opacity: 0;
}

</style> <div class="file-upload">
    <label for="upload1" class="file-upload__label" align="center" ><strong >Add Document</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image"  onchange='this.form.submit()' >
    </div>  
    </form> 
    
   
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Supervisior </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href=""> <?php  $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['sv_name'];?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Duration</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link"><?php  $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_duration'];?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
							if($_GET['admin_id']=="1000")
							{
								?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Estimate Amount</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href=""><?php  $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_estimate'];?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } else
							{
							} ?>
                        </div>
                        <?php include("expense.php"); ?>
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
