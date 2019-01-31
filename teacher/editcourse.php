<?php
include "../db.php";
$uname = $_SESSION['ges_session'];
$uaccess = $_SESSION['ges_access'];
$cid = "";
 
                    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$url = explode('/',$url);
			$url = array_slice($url,3);
			
			if($url[0] != ""){
			    
                $check = "select * from course where id = '".$url[0]."' ";
                $result = mysqli_query($con,$check);
                if(mysqli_affected_rows($con) >0){
                         
                $q = "select * from course_schedule where course_id = '".$url[0]."' ";
                $result1 = mysqli_query($con,$q);
               
                 while($row = mysqli_fetch_assoc($result) and $row1 = mysqli_fetch_assoc($result1)){
               $cid = $row['id'];
               
                      ?>
                      
                      

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>


<div class="outer-w3-agile mt-3 col-lg-12" style="margin-bottom:20px">
                <h4 class="tittle-w3-agileits col-lg-12 mb-12">Edit Course </h4>
                <p align="center"><?php echo $row['name']; ?></p>
            
             
            </div>
<div class="clearfix" ></div>



    
    
    <form id="eform" method="post"  class="outer-w3-agile mt-3 form-horizontal col-lg-12">
               
               
  <div class="panel-heading">
    
  </div>
  
  
        <div class="panel-body ">
            
             <div  class="col-lg-12 col-md-12 col-sm-12 ">
                 
                 
                 
                 
            
  <div style="margin-right:2px" class="form-horizontal  form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Title</label>
    <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="CourseTitle" title="Course Title" placeholder="Course Title">
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Subject Name</label>
    <input type="text" class="form-control" value="<?php echo $row['subject_name']; ?>" name="SubjectName" title="Subject Name" placeholder="Subject Name">
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Fee: Doller($)</label>
    <input type="number" class="form-control" value="<?php echo $row['fee']; ?>" name="CourseFee" title="Course Fee" placeholder="Course Fee" value="0.0">
    
  </div>
  
  
  <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Start Date</label>
    <input type="date" class="form-control" value="<?php echo $row1['start_date']; ?>"  name="StartDate" title="Start Date" placeholder="Start Date">
    
  </div>
  
  <!----------->
  
  
  <div style="margin-right:2px" class="form-horizontal  form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Duration (Total Days)</label>
    <input type="number" class="form-control" value="<?php echo $row1['duration_days']; ?>"  name="TotalDays" title="Total Days" placeholder="Total Days">
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Day Of Class</label>
    <select type="day" class="form-control" id="DayOfClass" name="DayOfClass" title="Day Of Class" placeholder="Day Of Class">
        <option value="<?php echo $row1['days']; ?>" salected><?php echo $row1['days']; ?></option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
    </select>
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Class Timing</label>
    <input type="time" class="form-control" value="<?php echo $row1['timing']; ?>"  name="ClassTiming" title="Class Timing" placeholder="Class Timing" >
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Select Course Category</label>
     <select class="form-control catlist" id="catlistxxc" name="CourseCategory" title="Select Course Category" placeholder="Select Course Category" >
        
        <?php
        
        $cat0 = "select name from course_cat where id = '".$row['cat_id']."' ";
        $result0 = mysqli_query($con,$cat0);
        $cname = mysqli_fetch_object($result0)->name;
            ?><option value="<?php echo $row['cat_id'];?>"><?php echo $cname;?></option><?php                                 
                                             
          $cat = "select * from course_cat ";
     
    $result7 = mysqli_query($con,$cat);
            

if(mysqli_affected_rows($con) >0){
   
	
	
	
	    
                        while($row7 = mysqli_fetch_assoc($result7)){
                          
                          ?>
                          <option value="<?php echo $row7['id'];?>"><?php echo $row7['name'];?></option>
                          <?php
                         }
    
}
        
        ?>
        
    </select>
    
  </div>
  
  
  <!------------->
  
  
  
  <div style="margin-right:6px" class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
      
    <label  class=""> Course Detail</label>
    <textarea type="time" class="form-control" id="CourseDetail" name="CourseDetail" title="Course Detail" placeholder="Course Detail" rows="10"><?php echo $row['detail']; ?></textarea>
    
  </div>
  
  
  
  
            </div>
  
  <div class="clearafix"></div>
  
  </div>

  <div class="form-inline panel-footer">
  
  
  <div class="form-group t">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <input type="submit" name="updatecourse" class="btn btn-success " value="Save Changes">
    </div>
  </div>    
      
    
  <div class="form-group t pull-right clearafix">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <a href="#" onclick="location.reload();" class="btn btn-primary">Reset</a>
    </div>
  </div>      
      
      
  </div>


</form>

                      
                      <?php           ;
               
                 }}else{
                     
                
			      ?>
			         <div class="outer-w3-agile mt-3 col-lg-12">
                <div class="card text-center">
                    
                    <div class="card-body">
                        <h5 class="card-title">Oops! Error 404</h5>
                        <p class="card-text">Error Message. Something went wrong try later..</p>
                        <a href="http://test.ges.zuhrtech.com/teacher" class="btn more mt-3">Go To Dashboard</a>
                    </div>
                    
                </div>
            </div>

			    <?php     
                 }
                 
                 
			}else{
			    
			      ?>
			         <div class="outer-w3-agile mt-3 col-lg-12">
                <div class="card text-center">
                    
                    <div class="card-body">
                        <h5 class="card-title">Oops! Error 404</h5>
                        <p class="card-text">Error Message. Something went wrong try later..</p>
                        <a href="http://test.ges.zuhrtech.com/teacher" class="btn more mt-3">Go To Dashboard</a>
                    </div>
                    
                </div>
            </div>

			    <?php
			}



?>
    
<?php



   
   if(isset($_POST['updatecourse'])){
       
       $d1 = "DELETE FROM course WHERE id = '".$cid."' ";
       $dr1 = mysqli_query($con,$d1);
       
        $d2 = "DELETE FROM course_schedule WHERE  course_id = '".$cid."' ";
       $dr2 = mysqli_query($con,$d2);
       
       if($dr1 && $dr2){
       
$xxx1 = "insert into course values(
'".$cid."',
'".$_POST['CourseTitle']."',
'".$_SESSION['ges_session']."',
'".$_POST['CourseCategory']."',
'".$_POST['SubjectName']."',
'".$_POST['CourseFee']."',
'".$_POST['CourseDetail']."')";
$ccc1 = mysqli_query($con,$xxx1);             
            
$xxx2 = "insert into course_schedule values(
'".$cid."',
'".$_POST['TotalDays']."',
'".$_POST['DayOfClass']."',
'".$_POST['ClassTiming']."',
'".$cid."',
'".$_POST['StartDate']."'
)";


$ccc2 = mysqli_query($con,$xxx2);
if($ccc1 && $ccc2){
    $t = $_POST['CourseTitle'];
    echo '<script>
  
  
  function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {
    $("#eform")[0].reset();
  $.notify("Course '.$t.' has been modified ", "success");
  await sleep(2000);
$("#eform")[0].reset();
  window.location.replace("http://test.ges.zuhrtech.com/teacher/editcourse/'.$cid.'");  
}

demo();
  
    </script>';
    
}else{
    
    echo '<script>
    $("#eform")[0].reset();
    $.notify("Error in modification! Try later", "error");
    window.location.reload;
    </script>';
    
}    
       }
       
     
       
       
       
       
       
   }
 


?>