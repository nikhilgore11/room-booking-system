<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$in = $_POST['in'];
$out = $_POST['out'];
$pid_amount = $_POST['paid_amount'];
$t_id = $_POST['t_id'];
$conn=new mysqli('localhost','root','','roombook');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into booking(name, email, mobile, in, out, paid_amount, t_id)values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissis",$name, $email, $mobile, $in, $out, $paid_amount, $t_id);
    $stmt->execute();
echo "booking successfully.....";
$stmt->close();
$conn->close();
}

?>
