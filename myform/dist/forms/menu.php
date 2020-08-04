<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Welcome</div>
                            <?php
							if($_GET['admin_id']=="1000")
							{
								?><a class="nav-link" href="../welcome_admin-<?php echo $_GET['admin_id']; ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <?php }
							else
							{
								?>
                                <a class="nav-link" href="project-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $_GET['project_id']; ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                                
                                <?php } ?>
                            <div class="sb-sidenav-menu-heading">My Profile</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts23" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                             <div class="collapse" id="collapseLayouts23" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav"> <?php
							 

$sqlpen000="SELECT * FROM `project_site` where project_status='processing' and svid='$_GET[admin_id]'" ; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                               <a class="nav-link" href="project-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $sqlpen2['project_id']; ?>"><?php echo $sqlpen2['project_name']; ?> </a>
                                <?php } ?>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Stock
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav"> 
                             
                             <?php
							if($_GET['admin_id']=="1000")
							{
								?>

                               <a class="nav-link" href="add_stock-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $_GET['project_id']; ?>">Stock In</a>
                               <a class="nav-link" href="action_page.php?page=stock_out&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $_GET['project_id']; ?>">Stock Out</a>
                               <a class="nav-link" href="purchase_stock-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $_GET['project_id']; ?>">Purchase Stock</a>
                               <a class="nav-link" href="available_stock-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $_GET['project_id']; ?>">Available Stock</a>
                               
                                <a class="nav-link" href="add_bill-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $_GET['project_id']; ?>">Add Bill</a>
                               
                               <?php }
							   else
							   {
								   ?>
                                    <a class="nav-link" href="action_page.php?page=stock_out&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $_GET['project_id']; ?>">Stock Out</a>
                                    
                                    <a class="nav-link" href="available_stock-admin-<?php echo $_GET['admin_id']; ?>-<?php echo $_GET['project_id']; ?>">Available Stock</a>
                                   
                                   <?php } ?>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Expense
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav"> 
                               <a class="nav-link" href="action_page.php?page=work_salary&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $_GET['project_id']; ?>">Salary</a>
                              
                               <a class="nav-link" href="action_page.php?page=exp_sense&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $_GET['project_id']; ?>">Expense</a>
                               
                            </div>
                           
                           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts12" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts12" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav"> 
                               <a class="nav-link" href="action_page.php?page=report&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $_GET['project_id']; ?>">Add Report</a>
                              
                               
                               
                            </div>
                            
                            
                            
                            
                    </div>
                    <div class="sb-sidenav-footer" style="position:absolute; bottom:0px; width:100%">
                        <div class="small">Logged in as:</div>
                        <strong><?php
						 $sqlpen000="SELECT * FROM `users` where emp_id='$_GET[admin_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['fullname'];
						?></strong>
                    </div>
                </nav>
            </div>