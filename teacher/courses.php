<?php
include "../db.php";
$uname = $_SESSION['ges_session'];
$uaccess = $_SESSION['ges_access'];


function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}
?>


<div class="outer-w3-agile mt-3 col-lg-12" style="margin-bottom:20px">
                <h4  class="tittle-w3-agileits col-lg-12 mb-12">Your Courses </h4>
</div>
            
            <div class="btn-group outer-w3-agile mt-3 col-lg-12" role="group" style="margin-bottom:10px">
            <button  type="button" class="btn btn-primary col-md-6 pull-left" data-toggle="modal" data-target=".bd-example-modal-lg">Add New Course</button>
            <button  type="button" class="btn btn-info col-md-6 pull-left" onclick="alert('not now');" data-toggle="modal" data-target="#newcatmodal">Add New Category</button>
</div>
            
<div class="clearfix" ></div>







<section class="cards-section">
                <div class="card-columns">
                    
                    
                    
                       <?php
                       $all = 1;
          $check = "select * from course where added_by_id = '".$_SESSION['ges_session']."' ";
     
    $result = mysqli_query($con,$check);

$totals = mysqli_affected_rows($con)-1;
if(mysqli_affected_rows($con) >0){
   
	
	
	
	    
                        while($row = mysqli_fetch_assoc($result)){
                          
                          ?>
                          <div class="card">
                        <img class="card-img-top" src="https://images.pexels.com/photos/442574/pexels-photo-442574.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                        <div class="card-body" style="height:250px">
                            <h5 class="card-title"><?php echo $row['name']?></h5>
                            <small class="text-muted"><?php echo $row['subject_name']?></small>
                            <p class="card-text" >
                                <?php 
       
                      
                    
                                
                                echo substrwords($row['detail'],70);
                                ?>
                                </p>
                                
                                
                                
                                
                            <a align="center" href="#" class="btn more mt-3" data-toggle="modal" data-target="#modal<?php echo $row['id']?>">See Details</a>
                            
                            
                            
                            <!-- Modal -->  
                            <div class="modal fade col-lg-12" id="modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                
                                <?php
                                $ch1 = "select * from course_schedule where course_id = '".$row['id']."'   ";
                                     
                                    $r44 = mysqli_query($con,$ch1);
                                while($row44 = mysqli_fetch_assoc($r44)){
                                ?>

                                    
                                     <div class="modal-body">
                                            <div class="row">
                                            <div class="col-md-6 pull-left">
                                            <img class="card-img-top" src="https://images.pexels.com/photos/442574/pexels-photo-442574.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940" alt="Course image ">
                                            </div>
                                            
                                            
                                            
                                                            
                                            
                                            
                                            <div class="col-md-6 pull-left">
                                            
                                            <h5 class="modal-title"><?php echo $row['name']; ?></h5>
                                                
                                            <div class="pull-left"> 
                                            <strong>Subject : </strong>  <?php echo $row['subject_name']; ?>
                                            <br>
                                            <strong>Starting From : </strong>  <?php  echo $row44['start_date']; ?>
                                            <br>
                                            <strong>Fee : </strong> $ <?php echo $row['fee']; ?>
                                            <br>
                                            <strong>Instructor : </strong>  <?php 
                                               $n = "select Scren_Name from User_table where Email = '".$row['added_by_id']."' ";
                                             $result222 = mysqli_query($con,$n);
                                             $uname = mysqli_fetch_object($result222)->Scren_Name;
                                             echo $uname;
                                            ?>
                                            <br>
                                            <strong>Day And Timing : </strong> <?php echo $row44['days']."  ".$row44['timing']; ?>
                                            <br>
                                            <strong>Total Duration : </strong> <?php echo $row44['duration_days']." Days"; ?>
                                            <br>
                                            </div>
                                            
                                            </div>
                                            </div>
                                            
                                            <p class="paragraph-agileits-w3layouts my-3">
                                                <strong>Course Description : </strong><br>
                                                <?php echo $row['detail']; ?>
                                            </p>
                                            
                                            
                                            
                                            
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        
                                        <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   <form method="post"><input type="hidden" name="d_id" value="<?php echo $row['id']; ?>" /><button type="submit" class="btn btn-danger" name="cencelcourse">Cencel this course</button></form>
                                    <a href="editcourse/<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                                    
                                    
                                    <!----------------Modal-------------------->
                             
                                    
                                    <!----------------Modal-------------------->
                                    
                                    
                                    
                                    
                                    
                                </div>
                                        
                                        
                                        
                                        
                                         </div>
                        </div>
                    </div>

                                        
                            <!-- /Modal -->
                            
                            
                            
                            
                        </div>
                    </div>
                          <?php
                         }
    
}else{
$all = 0;
}
        
        ?>
                    
                    
                    
                    
                    
                    
                  
                </div>
                
                
                
                
            </section>
            
            
            <?php if($all == 0){ ?>
                 <div class="outer-w3-agile mt-3 col-lg-12">
                <div class="card text-center">
                    
                    <div class="card-body">
                        <h5 class="card-title">Oops! There is no course</h5>
                        <p class="card-text">Start a course today.</p>
                        <a href="courses" class="btn more mt-3">Add new course</a>
                    </div>
                    
                </div>
            </div>
                <?php } ?>








































                    <!-- Large popup content -->

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    
                                        <form method="post"  class="outer-w3-agile mt-3  col-lg-12">
               
               
  <div class="panel-heading">
    
  </div>
  
  
        <div class="panel-body ">
            
             <div  class="col-lg-12 col-md-12 col-sm-12 ">
                 
                 
                 
                 
            
  <div  class="  form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Title</label>
    <input type="text" class="form-control" id="CourseTitle" name="CourseTitle" title="Course Title" placeholder="Course Title">
    
  </div>
  
  
   <div  class="form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Subject Name</label>
    <input type="text" class="form-control" id="SubjectName" name="SubjectName" title="Subject Name" placeholder="Subject Name">
    
  </div>
  
  
   <div  class=" form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Fee: Doller($)</label>
    <input type="number" class="form-control" id="CourseFee" name="CourseFee" title="Course Fee" placeholder="Course Fee" value="0.0">
    
  </div>
  
  
  <div  class=" form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Start Date</label>
    <input type="date" class="form-control" id="StartDate" name="StartDate" title="Start Date" placeholder="Start Date">
    
  </div>
  
  <!----------->
  
  
  <div  class="  form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Duration (Total Days)</label>
    <input type="number" class="form-control" id="TotalDays" name="TotalDays" title="Total Days" placeholder="Total Days">
    
  </div>
  
  
   <div  class=" form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Day Of Class</label>
    <select type="day" class="form-control" id="DayOfClass" name="DayOfClass" title="Day Of Class" placeholder="Day Of Class">
        <option selected disable>---Select One---</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
    </select>
    
  </div>
  
  
   <div  class=" form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Class Timing</label>
    <input type="time" class="form-control" id="ClassTiming" name="ClassTiming" title="Class Timing" placeholder="Class Timing" >
    
  </div>
  
  
   <div  class=" form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Select Course Category</label>
     <select class="form-control catlist" id="catlistxxc" name="CourseCategory" title="Select Course Category" placeholder="Select Course Category" >
        <option selected disable>---Select One---</option>
        <?php
          $check = "select * from course_cat ";
     
    $result = mysqli_query($con,$check);


if(mysqli_affected_rows($con) >0){
   
	
	
	
	    
                        while($row = mysqli_fetch_assoc($result)){
                          
                          ?>
                          <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                          <?php
                         }
    
}
        
        ?>
        
    </select>
    
  </div>
  
  
  <!------------->
  
  
  
  <div  class=" form-group col-lg-12 col-md-12 col-sm-12">
      
    <label  class=""> Course Detail</label>
    <textarea type="time" class="form-control" id="CourseDetail" name="CourseDetail" title="Course Detail" placeholder="Course Detail" rows="4">
        
    </textarea>
    
  </div>
  
  
  
  
            </div>
  
  <div class="clearafix"></div>
  
  </div>

  <div class="form-inline panel-footer">
  
  
  <div class="form-group t">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <input type="submit" name="addcourse" class="btn btn-success " value="Start Course">
    </div>
  </div>    
      
    
  <div class="form-group t pull-right clearafix">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <button type="reset" class="btn btn-primary">Clear</button>
    </div>
  </div>      
      
      
  </div>


</form>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Large popup content -->



    
    

    
<?php


$rand = rand(333333,999999);
   
   if(isset($_POST['addcourse'])){
     
$xxx1 = "insert into course values(
'".$rand."',
'".$_POST['CourseTitle']."',
'".$_SESSION['ges_session']."',
'".$_POST['CourseCategory']."',
'".$_POST['SubjectName']."',
'".$_POST['CourseFee']."',
'".$_POST['CourseDetail']."')";
$ccc1 = mysqli_query($con,$xxx1);             
            
$xxx2 = "insert into course_schedule values(
'".$rand."',
'".$_POST['TotalDays']."',
'".$_POST['DayOfClass']."',
'".$_POST['ClassTiming']."',
'".$rand."',
'".$_POST['StartDate']."'
)";


$ccc2 = mysqli_query($con,$xxx2);
if($ccc1 && $ccc2){
    $ct = $_POST['CourseTitle'];
   
    
       echo '<script>
  
  
  function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {
   
  $.notify("New course '.$ct.' has been added", "success");
  await sleep(2000);

  window.location.replace("http://test.ges.zuhrtech.com/teacher/courses");  
}

demo();
  
    </script>';  
    
    
}else{
    
    echo '<script>$.notify("Error adding course!", "error");</script>';
    
}}
 
if(isset($_POST['cencelcourse']) && $_POST['d_id'] !=""){
    
    
    
    
    $ddd1 = "DELETE FROM course WHERE id = '".$_POST['d_id']."'  ";
    $ddd2 = "DELETE FROM course_schedule WHERE course_id = '".$_POST['d_id']."' ";
    
    $d_1 = mysqli_query($con,$ddd1);
    $d_2 = mysqli_query($con,$ddd2);
if($d_1 && $d_2){
    $t = $_POST['d_id'];
   echo '<script>
  
  
  function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {

  $.notify("Course '.$t.' has been deleted ", "success");
  await sleep(2000);

  window.location.replace("http://test.ges.zuhrtech.com/teacher/courses");  
}

demo();
  
    </script>';   
}else{
     echo '<script>
  
  
  function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {

  $.notify("Error deleting course '.$t.' ", "success");
  await sleep(2000);

  window.location.replace("http://test.ges.zuhrtech.com/teacher/courses");  
}

demo();
  
    </script>';  
}
}

?>