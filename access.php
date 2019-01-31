<?php

session_start();
$rand = rand(111111,999999);
if(!isset($_SESSION) || !$_SESSION['ges_session']){
    
    $_SESSION['ges_session'] = "guest".$rand;
    header('location: http://test.ges.zuhrtech.com/');
}else{
  
    include_once('db.php');  
    
    

if (strpos($_SESSION['ges_session'], 'guest') !== false) {
    header('location: http://test.ges.zuhrtech.com/');
}
    
    
   
    
}



function checkaccess(){
    
}

?>