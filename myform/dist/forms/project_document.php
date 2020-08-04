
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">

<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Document Image</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Project</th>
                                                <th>Document</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `project_doucment` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                
                                            
                                                
                                                <td>
                                                
                                             
                                             
                                                 <a href="<?php echo $sqlpen2['location']; ?>">View Document</a> 
                                                 
                                                    
                                                </td>
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
                               
                               
                           