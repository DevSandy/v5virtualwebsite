
                               
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
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Name <?php
													if(isset($_POST['wk_id']))
													{
														?>
                                                        <strong>( <?php
$sqlpen000="SELECT * FROM `workers` where wk_id='$_POST[wk_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['w_name']; 
?> )</strong>
<?php
													}?></label><br />


                                                   <select  name="wk_id"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px" onchange='this.form.submit()'   >
  
  <?php
											if(isset($_POST['wk_id']))
											{
												?>
                                                
                    <option value="<?php echo $_POST['wk_id']; ?>" style="float:right; color:#000;"><?php echo $_POST['wk_id']; ?></option>
                    
                    <?php } 
					else
					{
						?>
                         <option value="" style="float:right; color:#000; " >--Select Workers--</option>
                        <?php } ?>
                    <?php 
			
			 $q_gsup="SELECT * FROM `workers` ORDER BY `ww_id` ASC"; 
			 $res_gsup=mysql_query($q_gsup);
				while($row1=mysql_fetch_array($res_gsup))
				{
			
			 ?>
                    <option style="font-size:15px"  value="<?php echo $row1['wk_id'];  ?>"><?php echo $row1['w_name'];  ?> 

                    </option>
                 
                    <?php } ?>
                  </select></div>
                                                </div>
                                            </div>
                                            </form>
                                            <?php
											if(isset($_POST['wk_id']))
											{
												?>
                                            <form method="POST" action="" onSubmit="return validate()"  enctype="multipart/form-data" >
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
    <input name="wk_id" type="hidden" value="<?php echo $_POST['wk_id']; ?>">
     <input name="page" type="hidden" value="work_salary">
    <input name="n_datee" type="hidden" value="<?php echo $_GET['n_datee']; ?>">
                                                    
                                                    
                                                    <label class="small mb-1" for="inputFirstName">Job </label> 
                                     <?php
											if(isset($_POST['wk_id']))
											{
												?>
												<input class="form-control py-4" readonly="readonly"  name="w_job" id="inputLastName" type="text" autocomplete="off"  required  value="<?php
$sqlpen000="SELECT * FROM `workers` where wk_id='$_POST[wk_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['w_job']; ?>" />
												 <?php } ?> 
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">
                                                     Salary</label><input class="form-control py-4" name="w_salary" id="inputLastName" type="text" autocomplete="off"  required  placeholder="Today Salary" />
                                                    
                                          </div>
                                                </div>
                                            </div>
                                             
                                             <div class="col-md-6">
                                                    <div class="form-group">
                                               <style>
file-upload {
	position: relative;
	display: inline-block;
}

.file-upload__label {
  display: block;
  padding: 1em 2em;
  color: #fff;
  background: #39F;
  border-radius: .4em;
  transition: background .3s;
  
  
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
    height: 90%;
    opacity: 0;
}

</style> <div class="file-upload">
<label class="small mb-1" for="inputFirstName">Voucher</label>
    <label for="upload1" class="file-upload__label"><strong>Attach Voucher</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image">
    </div>     
                                          </div>
                                                </div>
                                            
                                           
                                             
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="add_salary" >SAVE</button></div>
                                        </form>
                                        
                                        <?php } ?>
                                        
                                        
                                        <?php }
										else
										{
											?>
                                            
                                            
                                            <?php } ?>
                                        <br />
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Salary Expense</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Project</th>
                                                <th>Name</th>
                                                <th>Salary</th>
                                                <th>Voucher</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `work_salary` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                
                                                <td><?php echo $sqlpen2['w_name']; ?></td>
                                                <td><?php echo $sqlpen2['w_salary']; ?></td>
                                                
                                                <td><?php if($sqlpen2['location']=="")
												{
											 ?>
                                             <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
                                             <input name="ww_salary" type="hidden" value="<?php echo $sqlpen2['ww_salary']; ?>" />
                                             <input name="project_id" type="hidden" value="<?php echo $sqlpen2['project_id']; ?>" />
                                              <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>" />
                                               <input name="page" type="hidden" value="<?php echo $_GET['page']; ?>" />
                                            <style>
file-upload {
	position: relative;
	display: inline-block;
}

.file-upload__label {
  display: block;
  padding:3px;
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
    <label for="upload1" class="file-upload__label" align="center" ><strong >+ Voucher</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image"  onchange='this.form.submit()' >
    </div>  
    </form>   
                                             
                                             <?php }
											 else
											 {
												 ?>
                                                 <a href="<?php echo $sqlpen2['location']; ?>">View Voucher</a> <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
                                             <input name="ww_salary" type="hidden" value="<?php echo $sqlpen2['ww_salary']; ?>" />
                                             <input name="project_id" type="hidden" value="<?php echo $sqlpen2['project_id']; ?>" />
                                              <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>" />
                                               <input name="page" type="hidden" value="<?php echo $_GET['page']; ?>" />
                                            <style>
file-upload {
	position: relative;
	display: inline-block;
}

.file-upload__label {
  display: block;
  padding:2px;
  width:65px;
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
    <label for="upload1" class="file-upload__label" align="center" ><strong >Change</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image"  onchange='this.form.submit()' >
    </div>  
    </form>   
                                                 <?php }  ?></td>
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
                               
                               
                           