<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Welcome</div>
                            <a class="nav-link" href="welcome_admin-<?php echo $_GET['admin_id']; ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">My Profile</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav"> <?php
							   $sqlpen000="SELECT * FROM `project_site` where project_status='processing'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                               <a class="nav-link" href="project/project-admin-1000-<?php echo $sqlpen2['project_id']; ?>"><?php echo $sqlpen2['project_name']; ?></a>
                                <?php } ?>
                            </div>
                            <a class="nav-link" href="supervisior_admin-1000"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Supervisior</a
                            >
                             <a class="nav-link" href="supplier_admin-1000"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Supplier</a
                            >
                            <a class="nav-link" href="workers_admin-1000"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Workers</a
                            >
                            <a class="nav-link" href="add_unit_admin-1000"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Add Unit</a
                            >
                            <a class="nav-link" href="add_item_admin-1000"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Add Item</a
                            >
                            
                            <a class="nav-link" href="add_expense_admin-1000"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Add Expense</a
                            >
                            
                            <br />
<br />
<br />


                            
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