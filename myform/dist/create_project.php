<div class="card mb-4">
                            <div class="card-body">
                               
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  
                                    <div class="card-body">
                                    
                                    
                                        <form method="POST" action="">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Project Id</label><input class="form-control py-4" id="inputFirstName" type="text" name="project_id" readonly style="background-color:#09F; color:#FFF" value="PC<?php echo $_GET['project_id']; ?>" />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Project Name</label><input class="form-control py-4" name="project_name" id="inputLastName" type="text" autocomplete="off"  required  placeholder="Enter Your Project Name" /></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Estimate Amount (RS)</label><input class="form-control py-4" id="inputFirstName" type="text" name="project_estimate" autocomplete="off"  required  placeholder="Enter Project Estimate Amount" />
                                                    
                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Project Duration</label><input class="form-control py-4" name="project_duration" id="inputLastName" type="text" autocomplete="off"  required  placeholder="Enter Your Project Name" list="browsers" />
                                                    
                                          <datalist id="browsers">          
  <option value="1 Month">
  <option value="2 Month">
  <option value="3 Month">
  <option value="4 Month">
  <option value="5 Month">
  <option value="6 Month">
  <option value="7 Month">
  <option value="8 Month">
  <option value="9 Month">
  <option value="10 Month">
    <option value="11 Month">
  <option value="1 Year">
  <option value="1 + 5 Year">
  <option value="2 Year">
  <option value="More 3 Years">
    </datalist></div>
                                                </div>
                                            </div>
                                             <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Supervisior</label>
                                             
                                             <select  name="svid"    style="box-sizing: border-box;
  padding: 0; width:100%; border-radius:5px; height:48px"  >
                         <option value="" style="float:right; color:#000; " >--Select Supervisior--</option>
                        
                    <?php 
			
			 $q_gsup="SELECT * FROM `super_visior`"; 
			 $res_gsup=mysql_query($q_gsup);
				while($row1=mysql_fetch_array($res_gsup))
				{
			
			 ?>
                    <option style="font-size:15px"  value="<?php echo $row1['svid'];  ?>"><?php echo $row1['sv_name'];  ?> 

                    </option>
                 
                    <?php } ?>
                  </select>
                  
                  </div>
                                             
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Project Area</label> <textarea class="form-control py-4"  name="project_address" id="inputFirstName" autocomplete="off"  required ></textarea></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Project Describition</label> <textarea class="form-control py-4"  name="project_descp" id="inputFirstName" autocomplete="off"  required ></textarea></div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="add_project" >SAVE</button></div>
                                        </form>
                                        
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="">Please Enter Correct Details</a></div>
                                    </div>
                                </div>
                               
                               
                               
                            </div>
                        </div>