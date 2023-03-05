<?php
$server = 'localhost'
$username = 'root'
$server_password = ''
// Create connection
 $con=mysql_connect("localhost","root","server_password") or die(mysql_error());	
//code to be executed...
if(!$con){
    echo "connection issu"
}else{
    echo ""
}
if(isset($_POST['button'])){
    $u_name = $_GET['name']
    $u_address = $_GET['address']
    $gender = $_GET['gender']
    $u_dob = $_GET['dob']


}
// Close connection	
mysql_close($con);
   
?>