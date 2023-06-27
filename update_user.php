<?php 
include('connection.php');
$username = $_POST['username'];
$age = $_POST['age'];
$id = $_POST['id'];

$sql = "UPDATE `users` SET  `username`='$username' , `age`='$age' WHERE id='$id' ";
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