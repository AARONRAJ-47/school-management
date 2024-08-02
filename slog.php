<?php
include('database.php');
include('config.php');
$name=$_POST['name'];
$email=$_POST['email'];

$sql="select id,name,email from students where name='$name' AND email='$email'";
$result=$con->query($sql);

if($result->num_rows>=1)
{
	$_SESSION["name"]=$name;
header('location:screv.php');
}
else 
{
echo "invalid name and date of birth ";
}

?>