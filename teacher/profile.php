<?php
include "../db.php";
?>
<div class="col-md-12">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                
		                <div class="col-md-12">
		                     <?php
                                        $uid = "";
                                         $check1 = "select * from User_table where Email = 's@s.s' ";
                                         $result1 = mysqli_query($con,$check1);
                                         if(mysqli_affected_rows($con) >0)
                                         {
                                        while($row1 = mysqli_fetch_assoc($result1))
                                        {
                                            $uid = $row1['Uid'];
                                          ?>
                                          
		                    <form method="post">
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Email / Username </label> 
                                <div class="col-8">
                                  <input  class="form-control here" value="<?php echo $row1['Email']; ?>" disabled type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Phone Number</label> 
                                <div class="col-8">
                                  <input  name="PhoneNumber" placeholder="Phone Number" value="<?php echo $row1['Ph_no']; ?>" class="form-control here" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Date Of Birth</label> 
                                <div class="col-8">
                                  <input  name="DateOfBirth" placeholder="Date Of Birth" value="<?php echo $row1['Dob']; ?>" class="form-control here" type="date">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Registerd As </label> 
                                <div class="col-8">
                                  <select class="form-control here">
                                      <option selected value="<?php echo $row1['User_type']; ?>"><?php echo $row1['User_type']; ?></option>
                                      <option value="Both">Both</option>
                                      <option value="Student">Student</option>
                                      <option value="Teacher">Teacher</option>
                                  </select>
                                </div>
                              </div>
                               
                              
                              
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="updatebasic" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                              </form>
                              <?php  }}?>
                              
                              
                              
                               <div class="row">
		                <div class="col-md-12">
		                    <hr>
		                    <h4>Billing Info</h4>
		                    <hr>
		                </div>
		            </div>
		                          <?php
                                        
                                         $check2 = "select * from User_billing where Uid = '".$uid."' ";
                                         $result2 = mysqli_query($con,$check2);
                                         if(mysqli_affected_rows($con) >0)
                                         {
                                        while($row2 = mysqli_fetch_assoc($result2))
                                        {
                                          ?>
		                        <form>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Account Number *</label> 
                                <div class="col-8">
                                  <input name="AccountNumber" placeholder="Account Number" value="<?php echo $row2['cardno']; ?>" class="form-control here" required="required" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Expiry Date *</label> 
                                <div class="col-8">
                                     <input name="ExpiryDate" placeholder="Expiry Date" value="<?php echo $row2['exp']; ?>" class="form-control here" required="required" type="date">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">CVC Code *</label> 
                                <div class="col-8">
                                  <input  name="CVCCode" placeholder="CVC Code" class="form-control here" value="<?php echo $row2['cvc']; ?>" required="required" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Account Type *</label> 
                                <div class="col-8">
                                  <input  name="AccountType" placeholder="Account Type" class="form-control here" value="<?php echo $row2['add']; ?>" required type="text">
                                </div>
                              </div>
                              
                              
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update Billing Info</button>
                                </div>
                              </div>
                              </form>
                              <?php  }}?>
                              
                              
                              
                               <div class="row">
		                <div class="col-md-12">
		                    <hr>
		                    <h4>Change Password</h4>
		                    <hr>
		                </div>
		            </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Old Password</label> 
                                <div class="col-8">
                                  <input name="OldPassword" placeholder="Old Password" class="form-control here" type="password" required>
                                </div>
                              </div> 
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input  name="NewPassword" placeholder="New Password" class="form-control here" type="password" required>
                                </div>
                              </div> 
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Re-Type New Password</label> 
                                <div class="col-8">
                                  <input  name="Re-TypeNewPassword" placeholder="Re-Type Password" class="form-control here" type="password" required>
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                              </div>
                              
                              
                              
                              
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>