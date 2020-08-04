<?php
  if(isset($_POST['edit_supervisior']))
  {
	  $sql="select * from super_visior where ps_id='$_POST[ps_id]'";
$result="update super_visior SET sv_name='$_POST[sv_name]',sv_number='$_POST[sv_number]',sv_email='$_POST[sv_email]',sv_address='$_POST[sv_address]' where ps_id='$_POST[ps_id]'";
$row=mysql_query($result);
	  
  }
?>
  <?php
$sqlpen000="SELECT * FROM `super_visior` where ps_id='$_GET[ps_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
?>


<div class="card mb-4">
                            <div class="card-body">
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                    
                                    
                                        <form method="POST" action="">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Supervisior Id</label><input class="form-control py-4" id="inputFirstName" type="text" name="ps_id" readonly style="background-color:#09F; color:#FFF" value="<?php echo $sqlpen2['ps_id']; ?>" />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Supervisior Name</label><input class="form-control py-4" name="sv_name" id="inputLastName" type="text" autocomplete="off"  required value="<?php echo $sqlpen2['sv_name']; ?>" /></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Supervisior Contact NO </label><input class="form-control py-4" id="inputFirstName" type="text" name="sv_number" autocomplete="off"  required  value="<?php echo $sqlpen2['sv_number']; ?>"  />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Supervisior Email Id</label><input class="form-control py-4" name="sv_email" id="inputLastName" type="text" autocomplete="off"  required  value="<?php echo $sqlpen2['sv_email']; ?>"  />
                                                    
                                          </div>
                                                </div>
                                            </div>
                                             
                                             
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Supervisior Area</label> <textarea class="form-control py-4"  name="sv_address" id="inputFirstName" autocomplete="off"    required ><?php echo $sqlpen2['sv_address']; ?></textarea></div>
                                            
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="edit_supervisior" >EDIT</button></div>
                                        </form>
                                        
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="">Please Enter Correct Details</a></div>
                                    </div>
                                </div>
                               
                               
                               
                            </div>
                        </div>