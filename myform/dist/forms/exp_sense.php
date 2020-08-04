
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                    <?php
									if(isset($_GET['n_datee']))
									{
										?>
                                        
                                        
                                    
                                    
                                        <form method="POST" action="" onSubmit="return validate()" enctype="multipart/form-data"  >
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Project Id</label><input class="form-control py-4" id="inputFirstName" type="text" name="project_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['project_id']; ?>" />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Expense</strong>
</label><br />


                                                   <select  name="expense_name"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px"  >
                         <option value="" style="float:right; color:#000; " >--Select Expense--</option>
                        
                    <?php 
			
			 $q_gsup="SELECT * FROM `expense` ORDER BY `expense_id` ASC"; 
			 $res_gsup=mysql_query($q_gsup);
				while($row1=mysql_fetch_array($res_gsup))
				{
			
			 ?>
                    <option style="font-size:15px"  value="<?php echo $row1['expense_name'];  ?>"><?php echo $row1['expense_name'];  ?> 

                    </option>
                 
                    <?php } ?>
                  </select></div>
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>">
    <input name="project_id" type="hidden" value="<?php echo $_GET['project_id']; ?>">
    <input name="n_datee" type="hidden" value="<?php echo $_GET['n_datee']; ?>">
     <input name="page" type="hidden" value="<?php echo $_GET['page']; ?>">
    
                                                    
                                                    
                                                    <label class="small mb-1" for="inputFirstName">Amount </label> 
                                     
												<input class="form-control py-4"  name="expense_amount" id="inputLastName" type="text" autocomplete="off"  required  placeholder="Enter Amount" />
												
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                               <style>
file-upload {
	position: relative;
	display: inline-block;
}

.file-upload__label1 {
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
    .file-upload__input1:hover
	{
		background-color:#06F;
	}
.file-upload__input1 {
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
<label class="small mb-1" for="inputFirstName">Proof</label>
    <label for="upload1" class="file-upload__label1"><strong>Add Voucher</strong></label>
    
    <input id="upload1" class="file-upload__input1" type="file" name="image"  >
    </div>     
                                          </div>
                                                </div>
                                            </div>
                                             
                                             
                                            
                                           
                                             
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="add_expense" >SAVE</button></div>
                                        </form>
                                        
                                       
                                        
                                        
                                        <?php }
										else
										{
											?>
                                            
                                            
                                            <?php } ?>
                                        <br />
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Expense</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Project</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `exp_ense` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                
                                                <td><?php echo $sqlpen2['expense_name']; ?></td>
                                                <td><?php echo $sqlpen2['expense_amount']; ?></td>
                                                
                                                <td><?php if($sqlpen2['location']=="")
												{
											 ?>
                                             <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
                                             <input name="exp_id" type="hidden" value="<?php echo $sqlpen2['exp_id']; ?>" />
                                             <input name="project_id" type="hidden" value="<?php echo $sqlpen2['project_id']; ?>" />
                                              <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>" />
                                               <input name="page" type="hidden" value="<?php echo $_GET['page']; ?>" />
                                            <style>
file-upload2 {
	position: relative;
	display: inline-block;
}

.file-upload__label2 {
  display: block;
  padding:3px;
  width:150px;
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
    .file-upload__input2:hover
	{
		background-color:#06F;
	}
.file-upload__input2 {
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
    <label for="upload1" class="file-upload__label2" align="center" ><strong >+ Voucher</strong></label>
    
    <input id="upload1" class="file-upload__input2" type="file" name="image"  onchange='this.form.submit()' >
    </div>  
    </form>   
                                             
                                             <?php }
											 else
											 {
												 ?>
                                                 <a href="<?php echo $sqlpen2['location']; ?>">View Voucher</a> <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
                                             <input name="exp_id" type="hidden" value="<?php echo $sqlpen2['exp_id']; ?>" />
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
                               
                               
                           