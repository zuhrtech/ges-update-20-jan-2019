<?php
session_start();
$rand = rand(111111,999999);




if(isset($_GET['makeuser']) && !empty($_GET['makeuser'])){
    
    $_SESSION['ges_session'] = $_GET['makeuser'];
    header('location: http://test.ges.zuhrtech.com/');
    
}else{

if(!isset($_SESSION) || !$_SESSION['ges_session']){
    
    $_SESSION['ges_session'] = "guest".$rand;
    header('location: http://test.ges.zuhrtech.com/');
}else{
  
    $_SESSION['ges_session'] = "guest".$rand;
    header('location: http://test.ges.zuhrtech.com/');
    
}
}



?>