<div class="card mb-4">
                            <div class="card-body">
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                    
                                    
                                        <form method="POST" action="" onSubmit="return validate()"  enctype="multipart/form-data">
                                            
                                            
                                            
                                             
                                             
                                            
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Report Title</label> <input class="form-control py-4" id="inputFirstName" type="hidden" name="project_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['project_id']; ?>" /><input class="form-control py-4" id="inputFirstName" type="hidden" name="page" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['page']; ?>" /><input class="form-control py-4" id="inputFirstName" type="hidden" name="admin_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $_GET['admin_id']; ?>" />
                                            
                                            
                                            <input class="form-control py-4" id="inputFirstName" type="hidden" name="report" readonly style="background-color:#09F; color:#FFF" value="report" />
                                            
                                            
                                            <input class="form-control py-4" id="inputFirstName" type="text" name="report_title"  style="background-color:#09F; color:#FFF"  placeholder="Enter Report Title" /></div>
                                             <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Report Descp </label> <textarea class="form-control py-4"  name="report_descp" id="inputFirstName" autocomplete="off"  required ></textarea></div>
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
<label class="small mb-1" for="inputFirstName">Add Image</label>
    <label for="upload1" class="file-upload__label"><strong>Add Image</strong></label>
    
    <input id="upload1" class="file-upload__input" type="file" name="image" onchange='this.form.submit()'>
    </div> 
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="add_report" >SAVE</button></div>
                                        </form>
                                        
                                    </div>
                                   
                            
                                  <div style="padding:10px;">
                                         <?php
							   $sqlpen000="SELECT * FROM `report`"; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	
	?>
    <div style="background-color:#CCC; border-radius:5px;">         
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr><td><strong><?php echo $sqlpen2['n_datee']; ?>-<?php echo $sqlpen2['project_id'];?></strong> </td>
  <tr>
    <td><strong><?php echo $sqlpen2['report_title']; ?></strong></td>
  </tr>
  <tr>
    <td><p align="justify"><?php echo $sqlpen2['report_descp']; ?></p></td>
  </tr>
  <tr>
    <td><a href=""><img src="<?php echo $sqlpen2['location'];?>" style="width:100%" /></a></td>
  </tr>
</table>
</div><br />

                                        
                                       
                                   
                                    
                               <?php } ?>
                          </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="">Please Enter Correct Details</a></div>
                                    </div>
                                </div>
                               
                               
                               
                            </div>
                        </div>