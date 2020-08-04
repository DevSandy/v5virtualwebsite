
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                  
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Add Bill Now</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Bill No</th>
                                                <th>Date</th>
                                                <th>Bill </th>
                                               
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         
                                                
                                         <?php
							   $sqlpen000="SELECT * FROM `bill` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
                                            <tr>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                <td><?php echo $sqlpen2['b_no']; ?></td>
                                                <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php if($sqlpen2['location']=="")
												{
											 ?>
                                            <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
                                             <input name="billid" type="hidden" value="<?php echo $sqlpen2['billid']; ?>" />
                                             <input name="project_id" type="hidden" value="<?php echo $sqlpen2['project_id']; ?>" />
                                              <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>" />
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
    <label for="upload1" class="file-upload__label" align="center" ><strong >Attach BIll</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image"  onchange='this.form.submit()' >
    </div>  
    </form> 
                                             
                                             <?php }
											else
											 {
												 ?>
                                                 <a href="<?php echo $sqlpen2['location']; ?>">View Bill</a>  <form action="" method="POST"  enctype="multipart/form-data" onSubmit="return validate()" >
                                             <input name="billid" type="hidden" value="<?php echo $sqlpen2['billid']; ?>" />
                                             <input name="project_id" type="hidden" value="<?php echo $sqlpen2['project_id']; ?>" />
                                              <input name="admin_id" type="hidden" value="<?php echo $_GET['admin_id']; ?>" />
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
    <label for="upload1" class="file-upload__label" align="center" ><strong >Attach BIll</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image"  onchange='this.form.submit()' >
    </div>  
    </form> 
                                                 <?php } }?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="">Please Enter Correct Details</a></div>
                                    </div></div>