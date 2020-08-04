
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                    
                                    
                                        <form method="POST" action="" onSubmit="return validate()">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    
                                          <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td><label class="small mb-1" for="inputFirstName">Purchase Date</label><input class="form-control py-4" id="inputFirstName" type="hidden" name="project_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['project_id']; ?>" />
                                                 <?php 
												 if(isset($_GET['n_datee']))
												 {
													 ?>  
                                                      <input class="form-control py-4" id="inputFirstName" type="text" name="n_datee"  style="background-color:#09F; color:#FFF" value="<?php echo $_GET['n_datee'];?>" /> 
                                                    
<?php }
else
{
	?>
    <input class="form-control py-4" id="inputFirstName" type="text" name="n_datee"  style="background-color:#09F; color:#FFF" value="<?php date_default_timezone_set("Asia/Calcutta");
$n_datee=date("d-m-Y");
echo $n_datee; ?>" />
    
    <?php } ?></td>
    <td><label class="small mb-1" for="inputFirstName">Purchase Bill No</label><input class="form-control py-4" id="inputFirstName" type="hidden" name="project_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['project_id']; ?>" />
                                                
                                                      <input class="form-control py-4" id="inputFirstName" type="text" name="b_no"  style="background-color:#09F; color:#FFF" 
                                                      
                                                      <?php
                                                      if(isset($_GET['b_no']))
													  {
														  ?>
                                                         value="<?php echo $_GET['b_no']; ?>" 
                                                    <?php }
													else
													{
														?>
                                                         placeholder="Ener Bill NO" 
                                                        <?php } ?> required  /> 

    
    </td>
  </tr>
</table>

                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Stock Name</label><br />


                                                   <select  name="stock_name"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px"   >
                    <option value="" style="float:right; color:#000; " >--Select Stock--</option>
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
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Unit </label> <select  name="stock_unit"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px"   >
                    <option value="" style="float:right; color:#000; " >--Select Unit--</option>
                    <?php 
			
			 $q_gsup="SELECT * FROM `unit` ORDER BY `unit_id` ASC"; 
			 $res_gsup=mysql_query($q_gsup);
				while($row1=mysql_fetch_array($res_gsup))
				{
			
			 ?>
                    <option style="font-size:15px"  value="<?php echo $row1['unit_name'];  ?>"><?php echo $row1['unit_name'];  ?> 

                    </option>
                 
                    <?php } ?>
                  </select>
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Qnty</label><input class="form-control py-4" name="stock_qnty" id="inputLastName" type="text" autocomplete="off"  required  placeholder="Product Count" />
                                                    
                                          </div>
                                                </div>
                                            </div>
                                             
                                             
                                            
                                           <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Price </label><input class="form-control py-4" id="inputFirstName" type="text" name="stock_amount" autocomplete="off"  required  placeholder="Enter The Stock Amount" />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                   
                                                   
                                                   <label class="small mb-1" for="inputFirstName">Supplier </label><br />

                                                   <select  name="sp_id"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px" onchange='this.form.submit()'  >
                    <option value="" style="float:right; color:#000; " >--Select Supplier--</option>
                    <?php 
			
			 $q_gsup="SELECT * FROM `supplier` ORDER BY `sp_id` ASC"; 
			 $res_gsup=mysql_query($q_gsup);
				while($row1=mysql_fetch_array($res_gsup))
				{
			
			 ?>
                    <option style="font-size:15px"  value="<?php echo $row1['sp_id'];  ?>"><?php echo $row1['sp_name'];  ?> 

                    </option>
                 
                    <?php } ?>
                  </select>
                                          </div>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                             
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="add_stock" >SAVE</button></div>
                                        </form>
                                        <br />
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Projects</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Stock Name</th>
                                                <th>Unit</th>
                                                <th>Qnty</th>
                                                
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
                               
                               
                               
                           