
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                  
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Purchase Stock</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Bill No</th>
                                                <th>Purchase Date</th>
                                                <th>Stock Name</th>
                                                <th>Unit</th>
                                                <th>Qnty</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `purchase` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                <td><?php echo $sqlpen2['b_no']; ?></td>
                                                <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php echo $sqlpen2['stock_name']; ?></td>
                                                <td><?php echo $sqlpen2['stock_unit']; ?></td>
                                                <td><?php echo $sqlpen2['stock_qnty']; ?></td>
                                                <td><?php echo $sqlpen2['stock_amount']; ?></td>
                                                 <td><a href="action_page.php?page=delete_stock&action=delete_stock&admin_id=<?php echo $_GET['admin_id']; ?>&project_id=<?php echo $sqlpen2['project_id']; ?>&who=<?php echo $sqlpen2['stock_name']; ?> <?php echo $sqlpen2['stock_qnty']; ?> <?php echo $sqlpen2['stock_unit']; ?>&b_no=<?php echo $sqlpen2['b_no']; ?>&n_time=<?php echo $sqlpen2['n_time']; ?>&stock_name=<?php echo $sqlpen2['stock_name']; ?>&stock_unit=<?php echo $sqlpen2['stock_unit']; ?>&stock_qnty=<?php echo $sqlpen2['stock_qnty']; ?>&n_datee=<?php echo $sqlpen2['n_datee']; ?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="">Please Enter Correct Details</a></div>
                                    </div>
                                </div>
                               
                               
                               
                          