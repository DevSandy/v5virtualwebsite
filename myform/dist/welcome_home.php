<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('../../config/database.php');
include('../../config/database.php');
?>
<?php
if(isset($_GET['page']))
{
	if($_GET['page']=="supervisior")
	{
	if($_GET['action']=="delete")
	{
		$sql1="DELETE FROM super_visior WHERE ps_id='$_GET[ps_id]'";
$resulty=mysql_query($sql1);
header("location:supervisior_admin-$_GET[admin_id]");
	}}
}
?>

<?php
if(isset($_GET['page']))
{
	if($_GET['page']=="add_expense")
	{
	if($_GET['action']=="delete")
	{
		$sql1="DELETE FROM expense WHERE expense_id='$_GET[expense_id]'";
$resulty=mysql_query($sql1);
header("location:add_expense_admin-$_GET[admin_id]");
	}}
}
?>

<?php
if(isset($_GET['page']))
{
	if($_GET['page']=="add_unit")
	{
	if($_GET['action']=="delete")
	{
		$sql1="DELETE FROM unit WHERE unit_id='$_GET[unit_id]'";
$resulty=mysql_query($sql1);
header("location:add_unit_admin-$_GET[admin_id]");
	}}
}
?>


<?php
if(isset($_GET['page']))
{
	if($_GET['page']=="add_item")
	{
	if($_GET['action']=="delete")
	{
		$sql1="DELETE FROM item WHERE item_id='$_GET[item_id]'";
$resulty=mysql_query($sql1);
header("location:add_item_admin-$_GET[admin_id]");
	}}
}
?>
<?php
if(isset($_POST['add_expense']))
{    
 
$save=mysql_query("INSERT INTO expense(expense_name) VALUES ('$_POST[expense_name]')");
//header("location:add_unit_admin-sucess-$_GET[admin_id]");
}
?>
<?php
if(isset($_POST['add_unit']))
{    
 
$save=mysql_query("INSERT INTO unit(unit_name) VALUES ('$_POST[unit_name]')");
//header("location:add_unit_admin-sucess-$_GET[admin_id]");
}
?>
<?php
if(isset($_POST['add_item']))
{    
 
$save=mysql_query("INSERT INTO item(item_name) VALUES ('$_POST[item_name]')");
//header("location:add_unit_admin-sucess-$_GET[admin_id]");
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
                        <h1 class="mt-4"></h1>
                        
                          
                        <?php
						if($_GET['page']=="add_expense")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><form action="" method="POST"><table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="220px;"><i class="fas fa-plus mr-1"></i> <input name="expense_name" type="text" placeholder="Enter Expense Name"></td>
    <td align="left"><input name="add_expense" type="submit" value="Add Expense"></td>
  </tr>
</table>
</form></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr>
                                               <th>S.No</th>
                                                <th>Name</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `expense`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $sqlpen2['expense_name']; ?></td>
                                                
                                                <td><a href="welcome_home.php?page=add_expense&action=delete&admin_id=<?php echo $_GET['admin_id']; ?>&expense_id=<?php echo $sqlpen2['expense_id']; ?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
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
							   $sqlpen000="SELECT * FROM `project_site` ORDER BY `project_site`.`pid` DESC"; 
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
                                                 <td><a href="action-edit-cproject-<?php echo $_GET['admin_id']; ?>-<?php echo $sqlpen2['project_id']; ?>"><i class="fa fa-edit"></i></a> | <a href="welcome_home.php?page=supervisior&action=delete&admin_id=<?php echo $_GET['admin_id']; ?>&ps_id=<?php echo $sqlpen2['ps_id']; ?>"><i class="fa fa-trash"></i></a></td>
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
                                                <td><a href="action-edit-sup-<?php echo $_GET['admin_id']; ?>-<?php echo $sqlpen2['ps_id']; ?>"><i class="fa fa-edit"></i></a> | <a href="welcome_home.php?page=supervisior&action=delete&admin_id=<?php echo $_GET['admin_id']; ?>&ps_id=<?php echo $sqlpen2['ps_id']; ?>"><i class="fa fa-trash"></i></a> | <a href="https://api.whatsapp.com/send?phone=91<?php echo $sqlpen2['sv_number']; ?>&text= HI <?php echo $sqlpen2['sv_name']; ?>, Your Username : <?php echo $sqlpen2['sv_email']; ?> Psssword : <?php echo $sqlpen2['ps_id'];?> and Login URL : http://www.varshanconstruction.in"><i class="fa fa-share"></i></a></td>
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
                                             <th>S.No</th>
                                               <th>Id</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Job</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `workers`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                            <td><?php echo $x; ?></td>
                                                <td><?php echo $sqlpen2['wk_id']; ?></td>
                                                <td><?php echo $sqlpen2['w_name']; ?></td>
                                                <td><?php echo $sqlpen2['w_number']; ?></td>
                                                 <td><?php echo $sqlpen2['w_job']; ?></td>
                                                <td><?php echo $sqlpen2['w_address']; ?></td>
                                                <td>Delete</td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        <?php
						if($_GET['page']=="add_unit")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><form action="" method="POST"><table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="220px;"><i class="fas fa-plus mr-1"></i> <input name="unit_name" type="text" placeholder="Enter Unit Name"></td>
    <td align="left"><input name="add_unit" type="submit" value="Add Unit"></td>
  </tr>
</table>
</form></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr>
                                               <th>S.No</th>
                                                <th>Name</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `unit`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $sqlpen2['unit_name']; ?></td>
                                                
                                                <td><a href="welcome_home.php?page=add_unit&action=delete&admin_id=<?php echo $_GET['admin_id']; ?>&unit_id=<?php echo $sqlpen2['unit_id']; ?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        <?php
						if($_GET['page']=="add_item")
						{
							?>
                        <div class="card mb-4">
                            <div class="card-header"><form action="" method="POST"><table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="220px;"><i class="fas fa-plus mr-1"></i> <input name="item_name" type="text" placeholder="Enter Item Name"></td>
    <td align="left"><input name="add_item" type="submit" value="Add Item"></td>
  </tr>
</table>
</form></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr>
                                               <th>S.No</th>
                                                <th>Name</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `item`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $sqlpen2['item_name']; ?></td>
                                                
                                                <td><a href="welcome_home.php?page=add_item&action=delete&admin_id=<?php echo $_GET['admin_id']; ?>&item_id=<?php echo $sqlpen2['item_id']; ?>"><i class="fa fa-trash"></i></a></td>
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
                                             <td>S.No</td>
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
										 $x=0;
							   $sqlpen000="SELECT * FROM `supplier`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                            <td><?php echo $x; ?></td>
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
