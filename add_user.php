<?php 
include('connection.php');
$username = $_POST['username'];
$age = $_POST['age'];

$sql = "INSERT INTO `users` (`username`,`age`) values ('$username', '$age')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>