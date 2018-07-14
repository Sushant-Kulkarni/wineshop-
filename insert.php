<?php 

$server = "localhost";
$user = "root";
$pwd = "";
$db = "widehub";

$conn = mysqli_connect($server,$user,$pwd,$db);

$name = $_POST['name'];
$satis = $_POST['satisfaction'];
$comment = $_POST['comment'];
$email = $_POST['email'];

$sql = "INSERT into feedback(name,satis,comment,email) values(?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("location: ../index.php?insert=preparefailed");
}else{
	mysqli_stmt_bind_param($stmt,"siss",$name,$satis,$comment,$email);
	mysqli_stmt_execute($stmt);
	if (mysqli_stmt_num_rows()==0) {
		header("location: ../index.php?insert=success");
	}
	else{
		header("location: ../index.php?insert=failed");
	}
}