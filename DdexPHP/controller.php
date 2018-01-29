<?php
$sname  = @$_POST['studentname'];
$enroll = @$_POST['eno'];
$branch   = @$_POST['branch'];
$category   = @$_POST['category'];
$message = @$_POST['message'];

 $dbhost = "au-cdbr-sl-syd-01.cleardb.net:3306";
 $dbuser = "bd34e5cf018ac8";
 $dbpass = "000067cf";
 $dbname = "ibmx_22cb20180827e99";
 
 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if($conn){
 $query   = "INSERT into feedback (roll,stuname,branch,category,message) VALUES('" . $enroll . "','" . $sname . "','" . $branch . "','" . $category . "','" . $message . "')";
$success = $conn->query($query);
 if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Contacting Us <br>";
 }
$conn->close();
 
?>