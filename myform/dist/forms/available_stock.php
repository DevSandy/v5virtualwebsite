
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                  
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Available Stock</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Stock Name</th>
                                                <th>Unit</th>
                                                <th>Qnty</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `stock` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                <td><?php echo $sqlpen2['stock_name']; ?></td>
                                                <td><?php echo $sqlpen2['stock_unit']; ?></td>
                                                <td><?php echo $sqlpen2['stock_qnty']; ?></td>
                                                <td><?php echo $sqlpen2['stock_amount']; ?></td>
                                                <td>Edit | View</td>
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
                               
                               
                               
                         