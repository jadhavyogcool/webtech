<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kectech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user_name = $_POST['Name'];
$college_name = $_POST['CollegeName'];
$department_name = $_POST['DepartmentName'];
$class = $_POST['Class'];
$mobile_number = $_POST['MobileNumber'];
$email = $_POST['email'];
$event = $_POST['event'];

/* $sql = "INSERT INTO kecevent (name,collegename,dept,class,mobnumber,email,event) VALUES ('$user_name','$college_name','$department_name','$class','$mobile_number','$email','$event')"; */

$sql = "INSERT INTO kecevent(name,collegename,dept,class,mobnumber,email,event)
VALUES ('$user_name','$college_name','$department_name','$class','$mobile_number','$email','$event')";

if($conn->query($sql) === TRUE) {
    echo "Congratulations You are registerd";
} else {
    echo 'not registered';
}
header("refresh:2; url=register.php");

/*if(mysql_query($con,$sql))
{

echo 'not registered';

}

else
{
	echo 'reegistered';
}

header("refresh:2; url=reg.php"); */

?> 