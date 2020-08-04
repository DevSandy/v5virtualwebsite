<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('../../../config/database.php');
include('../../../config/database.php');
?>
<?php
if(isset($_GET['action']))
{ 
if($_GET['action']=="delete_stock")
{
$sql1="DELETE FROM  expense_full WHERE b_no='$_GET[b_no]' and parti_text='$_GET[who]' and n_time='$_GET[n_time]' ";
$resulty=mysql_query($sql1);	

$sql1="DELETE FROM  purchase WHERE b_no='$_GET[b_no]' and n_datee='$_GET[n_datee]' and n_time='$_GET[n_time]'";
$resulty=mysql_query($sql1);


$sql="select * from  stock stock_name='$_GET[stock_name]' and stock_qnty='$_GET[stock_qnty]' and n_datee='$_GET[n_datee]' and n_time='$_GET[n_time]'";
$result="update stock SET stock_qnty=stock_qnty-$_GET[stock_qnty]  WHERE stock_name='$_GET[stock_name]' and stock_qnty='$_GET[stock_qnty]' and n_datee='$_GET[n_datee]' and n_time='$_GET[n_time]'";
$row=mysql_query($result);		
header("location:purchase_stock-admin-$_GET[admin_id]-$_GET[project_id]");
	
}
}
?>
<?php
if(isset($_POST['billid']))
{ 
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_GET[project_id]/". $_FILES["image"]["name"]);
    $location="$_GET[project_id]/".$_FILES["image"]["name"];
	$sql="select * from  bill where billid='$_POST[billid]'";
$result="update bill SET location='$location' where billid='$_POST[billid]'";
$row=mysql_query($result);
header("location:add_bill-admin-$_POST[admin_id]-$_POST[project_id]");
}
?>

<?php
if(isset($_POST['report']))
{ 
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_POST[project_id]/". $_FILES["image"]["name"]);
    $location="$_POST[project_id]/".$_FILES["image"]["name"];
	date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
	$save=mysql_query("INSERT INTO report(project_id,n_datee,report_title,report_descp,admin_id,location) VALUES ('$_POST[project_id]','$n_datee','$_POST[report_title]','$_POST[report_descp]','$_POST[admin_id]','$location')");
	header("location:action_page.php?page=report&admin_id=$_POST[admin_id]&project_id=$_POST[project_id]&next=sucess");
	
	
}?>
<?php
if(isset($_POST['ww_salary']))
{ 
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_GET[project_id]/". $_FILES["image"]["name"]);
    $location="$_GET[project_id]/".$_FILES["image"]["name"];
	$sql="select * from  work_salary where ww_salary='$_POST[ww_salary]'";
$result="update work_salary SET location='$location' where ww_salary='$_POST[ww_salary]'";
$row=mysql_query($result);
header("location:action_page.php?page=$_POST[page]&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]");

}
?>

<?php
if(isset($_POST['exp_id']))
{ 
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_GET[project_id]/". $_FILES["image"]["name"]);
    $location="$_GET[project_id]/".$_FILES["image"]["name"];
	$sql="select * from  exp_ense where exp_id='$_POST[exp_id]'";
$result="update exp_ense SET location='$location' where exp_id='$_POST[exp_id]'";
$row=mysql_query($result);
header("location:action_page.php?page=$_POST[page]&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]");

}
?>
<?php
if(isset($_POST['add_expense']))
{  
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_GET[project_id]/". $_FILES["image"]["name"]);
    $location="$_GET[project_id]/".$_FILES["image"]["name"];
	
	if($location=="$_GET[project_id]/")
	{
	
$save=mysql_query("INSERT INTO exp_ense(project_id,n_datee,expense_name,expense_amount,admin_id,location) VALUES ('$_POST[project_id]','$_POST[n_datee]','$_POST[expense_name]','$_POST[expense_amount]','$_POST[admin_id]','')");
	}
	else
	{
		$save=mysql_query("INSERT INTO exp_ense(project_id,n_datee,expense_name,expense_amount,admin_id,location) VALUES ('$_POST[project_id]','$_POST[n_datee]','$_POST[expense_name]','$_POST[expense_amount]','$_POST[admin_id]','$location')");

	}

$save=mysql_query("INSERT INTO expense_full(project_id,parti_text,parti_reason,parti_amount,n_datee,admin_id) VALUES ('$_POST[project_id]','$_POST[expense_name] Amount RS : $_POST[expense_amount]','Extra Expense','$_POST[expense_amount] ','$_POST[n_datee]','$_GET[admin_id]')");


header("location:action_page.php?page=$_POST[page]&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]&n_datee=$_POST[n_datee]");

}
?>
<?php
if(isset($_POST['sp_id']))
{    

$sql2=mysql_query("select * from stock where project_id='$_POST[project_id]' and stock_name='$_POST[stock_name]'");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count==0)
				{
					
date_default_timezone_set("Asia/Calcutta");
$n_datee=$_POST['n_datee'];
$n_time=date("H:i");
$save=mysql_query("INSERT INTO stock(project_id,stock_name,stock_unit,stock_amount,stock_qnty,n_datee,n_time,admin_id,sp_id,b_no) VALUES ('$_POST[project_id]','$_POST[stock_name]','$_POST[stock_unit]','$_POST[stock_amount]','$_POST[stock_qnty]','$n_datee','$n_time','$_GET[admin_id]','$_POST[sp_id]','$_POST[b_no]')");


$save=mysql_query("INSERT INTO purchase(project_id,stock_name,stock_unit,stock_amount,stock_qnty,n_datee,n_time,admin_id,sp_id,b_no) VALUES ('$_POST[project_id]','$_POST[stock_name]','$_POST[stock_unit]','$_POST[stock_amount]','$_POST[stock_qnty]','$n_datee','$n_time','$_GET[admin_id]','$_POST[sp_id]','$_POST[b_no]')");

date_default_timezone_set("Asia/Calcutta");
$n_datee=$_POST['n_datee'];
$n_time=date("H:i");
$save=mysql_query("INSERT INTO expense_full(project_id,parti_text,parti_reason,parti_amount,n_datee,admin_id,b_no,n_time) VALUES ('$_POST[project_id]','$_POST[stock_name] $_POST[stock_qnty] $_POST[stock_unit] ','Purchase Expense','$_POST[stock_amount] ','$n_datee','$_GET[admin_id]','$_POST[b_no]','$n_time')");

$sql2=mysql_query("select * from bill where project_id='$_POST[project_id]' and b_no='$_POST[b_no]'");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count==0)
				{
					$save=mysql_query("INSERT INTO bill(project_id,n_datee,admin_id,sp_id,b_no,location) VALUES ('$_POST[project_id]','$n_datee','$_GET[admin_id]','$_POST[sp_id]','$_POST[b_no]','')");
				}
header("location:action_page.php?page=add_stock&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]&n_datee=$n_datee&b_no=$_POST[b_no]");}
else
{
	$sqlpen000="SELECT * FROM `stock` where stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
$now_q=$sqlpen2['stock_qnty']+$_POST['stock_qnty'];

	$sql="select * from  stock where stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$result="update stock SET stock_qnty='$now_q' where stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$row=mysql_query($result);
	
	
date_default_timezone_set("Asia/Calcutta");
$n_datee=$_POST['n_datee'];
$n_time=date("H:i");

$save=mysql_query("INSERT INTO purchase(project_id,stock_name,stock_unit,stock_amount,stock_qnty,n_datee,n_time,admin_id,sp_id,b_no) VALUES ('$_POST[project_id]','$_POST[stock_name]','$_POST[stock_unit]','$_POST[stock_amount]','$_POST[stock_qnty]','$n_datee','$n_time','$_GET[admin_id]','$_POST[sp_id]','$_POST[b_no]')");

date_default_timezone_set("Asia/Calcutta");
$n_datee=$_POST['n_datee'];
$n_time=date("H:i");

$save=mysql_query("INSERT INTO expense_full(project_id,parti_text,parti_reason,parti_amount,n_datee,admin_id,b_no,n_time) VALUES ('$_POST[project_id]','$_POST[stock_name] $_POST[stock_qnty] $_POST[stock_unit] ','Purchase Expense','$_POST[stock_amount] ','$n_datee','$_GET[admin_id]','$_POST[b_no]','$n_time')");

$sql2=mysql_query("select * from bill where project_id='$_POST[project_id]' and b_no='$_POST[b_no]'");
				$comment_count=mysql_num_rows($sql2);
		        if($comment_count==0)
				{
					$save=mysql_query("INSERT INTO bill(project_id,n_datee,admin_id,sp_id,b_no,location) VALUES ('$_POST[project_id]','$n_datee','$_GET[admin_id]','$_POST[sp_id]','$_POST[b_no]','')");
				}

header("location:action_page.php?page=add_stock&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]&n_datee=$n_datee&b_no=$_POST[b_no]");
	
}
}
?>
<?php
if(isset($_POST['add_stock_out']))
{    
 date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
$n_time=date("H:i");
$save=mysql_query("INSERT INTO stock_out(project_id,stock_name,stock_unit,stock_qnty,n_datee,admin_id) VALUES ('$_POST[project_id]','$_POST[stock_name]','$_POST[stock_unit]','$_POST[stock_qnty]','$_POST[n_datee]','$_GET[admin_id]')");

$sqlpen000="SELECT * FROM `stock` where stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
$now_q=$sqlpen2['stock_qnty']-$_POST['stock_qnty'];
$sql="select * from  stock where stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$result="update stock SET stock_qnty='$now_q' where stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$row=mysql_query($result);
if($sqlpen2['stock_qnty']=="0")
{
	$sql1="DELETE FROM stock WHERE stock_name='$_POST[stock_name]' and project_id='$_POST[project_id]'";
$resulty=mysql_query($sql1);
	
}


//$save=mysql_query("INSERT INTO purchase(project_id,stock_name,stock_unit,stock_amount,stock_qnty,n_datee,n_time,admin_id,sp_id) VALUES ('$_POST[project_id]','$_POST[stock_name]','$_POST[stock_unit]','$_POST[stock_amount]','$_POST[stock_qnty]','$n_datee','$n_time','$_GET[admin_id]','$_POST[sp_id]')");
header("location:action_page.php?page=stock_out&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]&n_datee=$_POST[n_datee]");
}
?>
<?php
if(isset($_POST['add_customer']))
{    
 
$save=mysql_query("INSERT INTO project_customer(project_id,pc_name,pc_address,pc_email,pc_number) VALUES ('$_POST[project_id]','$_POST[pc_name]','$_POST[pc_address]','$_POST[pc_email]','$_POST[pc_name]')");
header("location:project-admin-$_GET[admin_id]-$_POST[project_id]");
}
?>

<?php
if(isset($_POST['add_salary']))
{    
 $sqlpen000="SELECT * FROM `workers` where wk_id='$_POST[wk_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
$w_name=$sqlpen2['w_name'];

$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['imagelic']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"$_GET[project_id]/". $_FILES["image"]["name"]);
    $location="$_GET[project_id]/".$_FILES["image"]["name"];
    if($location=="$_GET[project_id]/")
	{

$save=mysql_query("INSERT INTO work_salary(project_id,n_datee,wk_id,w_name,w_salary,admin_id,w_job,location) VALUES ('$_POST[project_id]','$_POST[n_datee]','$_POST[wk_id]','$w_name','$_POST[w_salary]','$_POST[admin_id]','$_POST[w_job]','')");

	}
	else
	{
	$save=mysql_query("INSERT INTO work_salary(project_id,n_datee,wk_id,w_name,w_salary,admin_id,w_job,location) VALUES ('$_POST[project_id]','$_POST[n_datee]','$_POST[wk_id]','$w_name','$_POST[w_salary]','$_POST[admin_id]','$_POST[w_job]','$location')");

	}
$save=mysql_query("INSERT INTO expense_full(project_id,parti_text,parti_reason,parti_amount,n_datee,admin_id) VALUES ('$_POST[project_id]','$w_name Salary RS : $_POST[w_salary]','Salary Expense','$_POST[w_salary] ','$_POST[n_datee]','$_GET[admin_id]')");


header("location:action_page.php?page=work_salary&admin_id=$_GET[admin_id]&project_id=$_POST[project_id]&n_datee=$_POST[n_datee]");
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
 
$save=mysql_query("INSERT INTO workers(wk_id,w_name,w_address,w_number) VALUES ('$_POST[wk_id]','$_POST[w_name]','$_POST[w_address]','$_POST[w_number]')");
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
					  if($_GET['page']=="add_bill")
					  {
						  ?>  <h1 class="mt-4">Bill</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Attach Bill</li>
                        </ol>
                        <?php include("add_bill.php"); ?>
                        <?php } ?>
                        
                        
                        
                      <?php
					  if($_GET['page']=="customer")
					  {
						  ?>  <h1 class="mt-4">Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Customer</li>
                        </ol>
                        <?php include("create_customer.php"); ?>
                        <?php } ?>
                        
                          <?php
					  if($_GET['page']=="project_document")
					  {
						  ?>  <h1 class="mt-4">Project Document</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                        <?php include("project_document.php"); ?>
                        <?php } ?>
                        
                        
                         <?php
					  if($_GET['page']=="report")
					  {
						  ?>  <h1 class="mt-4"> Report</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Report</li>
                        </ol>
                        <?php include("report.php"); ?>
                        <?php } ?>
                          <?php
					  if($_GET['page']=="work_salary")
					  {
						  ?>  <h1 class="mt-4">Salary Expense </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            <?php if(isset($_GET['n_datee']))
							{
								?>
                            <form action="" method="GET">
                            
                            
                            
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
    <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
     <input name="page" type="hidden" value="work_salary">
    <input name="n_datee" type="text" required value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=$_GET['n_datee'];
echo $n_datee; ?>"></td>
    <td><input name="set_date" type="submit" value="NEXT"></td>
  </tr>
</table>
</form>
<?php } 
else
{
	?>
    <form action="action_page.php" method="GET">
                            
                            
                            
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
    <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
     <input name="page" type="hidden" value="work_salary">
    <input name="n_datee" type="text" required value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
echo $n_datee; ?>"></td>
    <td><input name="set_date" type="submit" value="NEXT"></td>
  </tr>
</table>
</form>
    
    <?php } ?>
</li>
                        </ol>
                        <?php include("work_salary.php"); ?>
                        <?php } ?>
                        
                  
                  
                  <?php
					  if($_GET['page']=="exp_sense")
					  {
						  ?>  <h1 class="mt-4">Extra Expense </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            <?php if(isset($_GET['n_datee']))
							{
								?>
                            <form action="" method="GET">
                            
                            
                            
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
    <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
     <input name="page" type="hidden" value="exp_sense">
    <input name="n_datee" type="text" required value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=$_GET['n_datee'];
echo $n_datee; ?>"></td>
    <td><input name="set_date" type="submit" value="NEXT"></td>
  </tr>
</table>
</form>
<?php } 
else
{
	?>
    <form action="action_page.php" method="GET">
                            
                            
                            
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
    <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
     <input name="page" type="hidden" value="exp_sense">
    <input name="n_datee" type="text" required value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
echo $n_datee; ?>"></td>
    <td><input name="set_date" type="submit" value="NEXT"></td>
  </tr>
</table>
</form>
    
    <?php } ?>
</li>
                        </ol>
                     
                        <?php include("exp_sense.php"); ?>
                        <?php } ?>      
                        
                        <?php
					  if($_GET['page']=="stock_out")
					  {
						  ?>  <h1 class="mt-4">Stock Out </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            <?php if(isset($_GET['n_datee']))
							{
								?>
                            <form action="" method="GET">
                            
                            
                            
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
    <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
     <input name="page" type="hidden" value="stock_out">
    <input name="n_datee" type="text" required value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=$_GET['n_datee'];
echo $n_datee; ?>"></td>
    <td><input name="set_date" type="submit" value="NEXT"></td>
  </tr>
</table>
</form>
<?php } 
else
{
	?>
    <form action="action_page.php" method="GET">
                            
                            
                            
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
    <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
     <input name="page" type="hidden" value="stock_out">
    <input name="n_datee" type="text" required value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
echo $n_datee; ?>"></td>
    <td><input name="set_date" type="submit" value="NEXT"></td>
  </tr>
</table>
</form>
    
    <?php } ?>
</li>
                        </ol>
                        <?php include("stock_out.php"); ?>
                        <?php } ?>
                        
                        
                        
                        <?php
					  if($_GET['page']=="available_stock")
					  {
						  ?>  <h1 class="mt-4">Stock </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Available Stock To <strong><strong><?php
                                     $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_name'];
?></strong></strong></li>
                        </ol>
                        <?php include("available_stock.php"); ?>
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
					  if($_GET['page']=="add_stock")
					  {
						  ?>  <h1 class="mt-4">Stock Add</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Stock To <strong><?php
                                     $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_name'];
?></strong></li>
                        </ol>
                        <?php include("add_stock.php"); ?>
                        <?php } ?>
                        
                        
                        <?php
					  if($_GET['page']=="purchase_stock")
					  {
						  ?>  <h1 class="mt-4">Stock</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Purchase Stock To <strong><?php
                                     $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_name'];
?></strong></li>
                        </ol>
                        <?php include("purchase_stock.php"); ?>
                        <?php } ?>
                        
                        <?php
					  if($_GET['page']=="supplier")
					  {
						  ?>  <h1 class="mt-4">Supplier</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Supplier</li>
                        </ol>
                        <?php include("create_supplier.php"); ?>
                        <?php } ?>
                        
                       


                        <?php
					  if($_GET['page']=="sup")
					  {
						  ?>
                          <?php include("create_supervisior.php"); ?>
                        
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
