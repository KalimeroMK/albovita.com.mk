
<?php
error_reporting(E_ALL);
require_once '../conf/conf.php';


$user_id = $_POST['user_id'];

$delete = "DELETE FROM users WHERE user_id = '$user_id'";
$execute = mysqli_query($con, $delete);

header('Location: ../users.php');
echo 'This is an error';
?>
