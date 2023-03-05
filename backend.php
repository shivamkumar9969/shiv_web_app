<?php
// error_reporting(0);
$server = 'localhost';
$username = 'root';
$server_password = '';
$db = "airplane_form";
$con = mysqli_connect($server, $username, $server_password, $db);
if(!$con) {
	echo "Connection issue";
} else {
	echo "";
}
if(isset($_POST['button'])){
$f_name = $_GET["f_name"];
$l_name = $_GET["l_name"];
$position = $_GET["position"];
$functional = $_GET["functional"];
$OCLC = $_GET["OCLC"];


$sql_name = "INSERT INTO `airplane_form_table` (`f_name`, `l_name`, `position`, `fuctional`, `OCLC`) VALUES ('$f_name', '$l_name', '$position', '$fuctional', $OCLC)";
mysqli_query($con, $sql_name);

}

$pranjal = "$f_name $l_name ✈️ $position $functional ✈️ $OCLC";
?>