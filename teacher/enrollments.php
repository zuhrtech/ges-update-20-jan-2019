<?php
include "../db.php";


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

$all=0;

?>






 <!-- table1 -->
   <section class="tables-section col-lg-12" >


                            

                <div class="outer-w3-agile mt-3 col-lg-12">
                                        <h4 class="tittle-w3-agileits mb-4">Students Enrolled in your Courses</h4>
                    <div class="widget-header row justify-content-between mb-3">
                              
                         

                    <div class="table-responsive" >
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Course ID</th>
                                    <th scope="col">Course Title</th>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                   
                       <?php
                       $all = 1;
          $check = "SELECT * FROM enrollment WHERE course_id IN(SELECT id FROM course WHERE added_by_id = '".$_SESSION['ges_session']."')   ";
     
    $result = mysqli_query($con,$check);
$all = $totals = mysqli_affected_rows($con);

if(mysqli_affected_rows($con) >0){
   
	
	
	
	    
                        while($row = mysqli_fetch_assoc($result)){
                          
                          ?>
                                <tr>
                                    <th scope="row"><?php echo $row['course_id']?></th>
                                    <td><?php
                                     $check2 = "select name from course where id = '".$row['course_id']."' ";
                                             $result2 = mysqli_query($con,$check2);
                                             $uname = mysqli_fetch_object($result2)->name;
                                             echo $uname;
                                    ?></td>
                                    <td><?php echo $row['user_id']?></td>
                                    <td>
                                     <form method="post"><input type="hidden" name="e_id" value="<?php echo $row['id']; ?>" /><button type="submit" class="btn btn-danger" name="cencelenrollment">Cencel Enrollment</button></form>
                                    </td>
                                </tr>
                            
                            
                            <?php
                            } }else{
                            ?>
                            
                            
                              <tr>
                                    <th scope="row">No Enrollment</th>
                                    <td>No Enrollment</td>
                                    <td>No Enrollment</td>
                                    <td>No Action</td>
                                </tr>
                            
                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>


                  

    </section>
                <!--// table1 -->


            
            
          
                <?php 
                
                
                
                
                
                
                if(isset($_POST['cencelenrollment'])){
                    
                    
                                    
                $c = "delete from enrollment WHERE id  = '".$_POST['e_id']."'  ";
                $dr = mysqli_query($con,$c);
                if($dr){
                       echo '<script>
  
  
  function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {

  $.notify("Enrollment has been cenceled ", "success");
  await sleep(2000);

  window.location.replace("http://test.ges.zuhrtech.com/teacher/enrollments");  
}

demo();
  
    </script>';
                }else{
                                   echo '<script>
  
  
  function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {

  $.notify("Unable to cencele enrollment", "danger");
  await sleep(2000);

  window.location.replace("http://test.ges.zuhrtech.com/teacher/enrollments");  
}

demo();
  
    </script>';     
                }
                
                    
                    
                    
                    
                    
                    
                }
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                ?>



