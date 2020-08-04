
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                    <?php
									if(isset($_GET['n_datee']))
									{
										?>
                                        
                                        
                                    
                                    
                                        <form method="POST" action="" onSubmit="return validate()">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Project Id</label><input class="form-control py-4" id="inputFirstName" type="text" name="project_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['project_id']; ?>" />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Stock Name</label><br />


                                                   <select  name="stock_name"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px" onchange='this.form.submit()'   >
  
  <?php
											if(isset($_POST['stock_name']))
											{
												?>
                    <option value="<?php echo $_POST['stock_name']; ?>" style="float:right; color:#000;"><?php echo $_POST['stock_name']; ?></option>
                    
                    <?php } 
					else
					{
						?>
                         <option value="" style="float:right; color:#000; " >--Select Stock--</option>
                        <?php } ?>
                    <?php 
			
			 $q_gsup="SELECT * FROM `item` ORDER BY `item_id` ASC"; 
			 $res_gsup=mysql_query($q_gsup);
				while($row1=mysql_fetch_array($res_gsup))
				{
			
			 ?>
                    <option style="font-size:15px"  value="<?php echo $row1['item_name'];  ?>"><?php echo $row1['item_name'];  ?> 

                    </option>
                 
                    <?php } ?>
                  </select></div>
                                                </div>
                                            </div>
                                            </form>
                                            <?php
											if(isset($_POST['stock_name']))
											{
												?>
                                            <form method="POST" action="" onSubmit="return validate()">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
    <input name="stock_name" type="hidden" value="<?php echo $_POST['stock_name']; ?>">
     <input name="page" type="hidden" value="stock_out">
    <input name="n_datee" type="hidden" value="<?php echo $_GET['n_datee']; ?>">
                                                    
                                                    
                                                    <label class="small mb-1" for="inputFirstName">Unit </label> 
                                     <?php
											if(isset($_POST['stock_name']))
											{
												?>
												<input class="form-control py-4" readonly="readonly"  name="stock_unit" id="inputLastName" type="text" autocomplete="off"  required  value="<?php
$sqlpen000="SELECT * FROM `stock` where project_id='$_GET[project_id]' and stock_name='$_POST[stock_name]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['stock_unit']; ?>" />
												 <?php } ?> 
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">
                                                     <?php
											if(isset($_POST['stock_name']))
											{
												?>Qnty <strong>(<?php
$sqlpen000="SELECT * FROM `stock` where project_id='$_GET[project_id]' and stock_name='$_POST[stock_name]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['stock_qnty']; ?> - <?php echo $sqlpen2['stock_unit']; ?>)</strong> <?php } ?></label><input class="form-control py-4" name="stock_qnty" id="inputLastName" type="text" autocomplete="off"  required  placeholder="Product Count" />
                                                    
                                          </div>
                                                </div>
                                            </div>
                                             
                                             
                                            
                                           
                                             
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="add_stock_out" >SAVE</button></div>
                                        </form>
                                        
                                        <?php } ?>
                                        
                                        
                                        <?php }
										else
										{
											?>
                                            
                                            
                                            <?php } ?>
                                        <br />
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Stock Used</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Date</th>
                                                <th>Stock Name</th>
                                                <th>Unit</th>
                                                <th>Qnty</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
							   $sqlpen000="SELECT * FROM `stock_out` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php echo $sqlpen2['stock_name']; ?></td>
                                                <td><?php echo $sqlpen2['stock_unit']; ?></td>
                                                <td><?php echo $sqlpen2['stock_qnty']; ?></td>
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
                               
                               
                           