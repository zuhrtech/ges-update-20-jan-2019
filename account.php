<?php
session_start();
include "db.php";   



if( strpos($_SESSION['ges_session'], 'guest') !== false){
?>
   
   
   
   
   
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery-2.2.3.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>

<script src="js/notify.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left .aaa{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 200px;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>



<div class="container register">
                <div class="row">
                    
                       <?php
                        
                        if(isset($_GET['register'])){
                            
                           ?>
                           
                          
                  <div class="col-md-3 register-left">
                        <img style="height:100px; " src="http://ges.zuhrtech.com/icon/ges%20t1.png" alt=""/>
                        
                        
                        
                     
                        
                        <h3>Welcome</h3>
                        <p>Already have account !</p>
                        <a class="btn btn-primary col-lg-6" style="margin-bottom:30px" align="center" href="http://test.ges.zuhrtech.com/account.php?login">Login</a><br/>
                    </div>
                     <div class="col-md-9 register-right">
                
               <style>
     
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
   
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
     margin-left: 40px;
}
 </style>      
 
 
 
 
                        <div style="display: none;" class="stepwizard col-xs-12 col-md-12 col-lg-12 col-md-offset-2 col-xs-offset-2 col-lg-offset-3">
    <div style="display: none;" class="stepwizard-row setup-panel col-xs-12 col-md-12 col-lg-12">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <form method="post" action="https://mws.ges.zuhrtech.com/account/register/go" id="reg"  role="form"  style="margin-left:40px;">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-md-12">
          <h3> Add Basic Information</h3>
           <div class="form-group">
            <label class="control-label">First Name</label>
            <input required  maxlength="100" type="text" name="fn" class="form-control"   />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input required maxlength="100" type="text" name="ln" class="form-control"  />
          </div>
           <div class="form-group">
            <label class="control-label">Birth Date</label>
            <input required type="date" class="form-control" name="dob" />
          </div>
           <div class="form-group">
            <label class="control-label">Email Address</label>
            <input required maxlength="200" type="email" name="em" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input required maxlength="200" type="password" name="pd" class="form-control"   />
          </div>
          <div class="form-group">
            <label class="control-label">Register As :</label>
            
             <select required name="type"  class=" form-control">
                 
                 <option>Student</option>
                 <option>Teacher</option>
                 <option>Both</option>
                 </select>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right col-lg-12" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-md-12">
          <h3>Add Profile Information</h3>
          
          
          <div class="form-group">
            <label class="control-label">Mobile No#</label>
            <input required maxlength="200" type="number" name="ph" class="form-control"  />
          </div>
         
          <div class="form-group">
            <label class="control-label">Country :</label>
            <input required type="text" name="country" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">State :</label>
            <input required type="text" name="state" class="form-control"  />
          </div>
           <div class="form-group">
            <label class="control-label">City :</label>
            <input required type="text" name="city" class="form-control"  />
          </div>
           <div class="form-group">
            <label class="control-label">Zip Code :</label>
            <input required type="number" name="zip" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">Address 1:</label>
            <textarea required class="form-control" name="add1" ></textarea>
          </div>
           <div class="form-group">
            <label class="control-label">Address 2:</label>
            <textarea required class="form-control" name="add2" ></textarea>
          </div>
         
          <button class="btn btn-primary nextBtn btn-lg pull-right col-lg-12" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-md-12">
          <h3> Add Billing Information</h3>
          
          
          <div class="form-group">
            <label class="control-label">Creadit Card Number#</label>
            <input required maxlength="11" type="number" name="cn" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">Exp Date</label>
            <input required type="date" class="form-control" name="exp" />
          </div>
         
          <div class="form-group">
            <label class="control-label">CVC Code:</label>
            <input required maxlength="3" type="number" name="cvc" class="form-control"   />
          </div>
          <div class="form-group">
            <label class="control-label">Bank Information:</label>
           <select required name="btype"  class=" form-control" name="binfo">
           
               <option>PayPal</option>
               <option>Visa</option>
               <option>Master</option>
               </select>
          </div>
          <div class="form-group">
            <label class="control-label">Billing Terms And Conditions:</label>
             <input required type="checkbox" name="agree" value='yes' >
          </div>
          
          
          <button class="btn btn-success btn-lg pull-right col-lg-12" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
<script>
          $(document).ready(function () {
              

              
              
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
         curInputs = curStep.find("input, textarea,select,date"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');

              
//////////////// ajax work

$("#reg").submit(function(event) {
 
  event.preventDefault();
  var f = $("#reg").serialize();
  var action = $("#reg").attr("action");
  var method = $("#reg").attr("method");
    
    $.ajax({
        method:method,
        dataType:"json",
        url:action,
        data:f,
        async: true,
        success: function(res)
        { 
              $('#myModal').modal('toggle');
            if(res.status == 200){
                $.notify(res.msg, "success");
                window.location.reload();
                
            }else{
               $.notify(res.msg, "error");
            }
        
        }
       
        
    });
    
    
     
});
  


}); // ready












      </script>
 
 
 
 
 
                        
                    </div>
                           
                    
                           
                           <?php 
                        }else{
                            
                    ?>
                    
                    
                
                   <div class="col-md-3 register-left">
                        <img style="height:100px; " src="http://ges.zuhrtech.com/icon/ges%20t1.png" alt=""/>
                        
                        
                        
                     
                        
                        <h3>Welcome</h3>
                        <p>Don`t have account ?</p>
                        <a class="btn btn-primary col-lg-6" style="margin-bottom:30px" align="center" href="http://test.ges.zuhrtech.com/account.php?register">Register</a><br/>
                    </div>
                     <div class="col-md-9 register-right">
                
                
                 
                     <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading"> Login to Access Dashboard</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <form method="post">
                                        
                                        <div class="form-group">
                                            <label>Select Account</label>
                                            <select class="form-control" required name="utype">
                                                <option value="Student" selected>Student</option>
                                                <option value="Teacher">teacher</option>
                                            </select>
                                        </div>                                  
                                        <div class="form-group">
                                            <label>Type Username</label>
                                            <input type="email" class="form-control" placeholder="Username *" name="uemail" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Type Password</label>
                                            <input type="password" class="form-control" placeholder="Password *" name="upassword" required />
                                        </div>
                                      <div class="form-group">
                                            <input type="submit" class="form-control" value="login" />
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        
 
 
 
                        
                    </div>
                    
                    
                    <?php        
                            
                        }
                        ?>
                        
                    
                </div>

            </div>
             <?php
   
}else{
header('location: http://test.ges.zuhrtech.com/');

}



  
if(isset($_POST['uemail']) && isset($_POST['utype']) && isset($_POST['upassword']) &&  $_POST['upassword'] != null && $_POST['uemail'] != null && $_POST['utype'] != null ){
    
                
                
                $check = "select User_type from User_table where Email = '".$_POST['uemail']."' and Hash_Password = '".$_POST['upassword']."' ";
                $result = mysqli_query($con,$check);
            
            
            if(mysqli_num_rows($result) == 1){
               $uaccess = mysqli_fetch_object($result)->User_type;
               $_SESSION['ges_session'] = $_POST['uemail'];
               $_SESSION['ges_access'] = $uaccess;
               //require "mail/mail.php";
               //sendmail('irfansiddiqui1445@gmail.com','irfan','test mail','test body');
            	
            	if($_POST['utype'] == "Teacher" && $uaccess == "Both" || $uaccess == "Teacher" ){
            	  // 
            	  ?> <script> window.location.replace("http://test.ges.zuhrtech.com/teacher"); 
            	  
            	  </script> <?php 
            	}
            	if($_POST['utype'] == "Student" && $uaccess == "Both" || $uaccess == "Student" ){
            	  // 
            	  ?> <script> window.location.replace("http://test.ges.zuhrtech.com/student");  
            	  
            	  </script> <?php 
            	} 
               
            }else{
                  ?> <script> $.notify("Invalid Credentials", "danger");  </script> <?php
            }
    
    
}



?>