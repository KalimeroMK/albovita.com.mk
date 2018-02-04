<?php require_once '../conf/conf.php'; ?>
<?php
$img_id = $_POST['id'];
$gallery_id = $_POST['gallery_id'];
// Check connection
if (mysqli_connect_errno($con)) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$delete = "DELETE FROM gallery WHERE id = '$img_id'";
$execute = mysqli_query($con, $delete);
header("Location: ../addgallery.php?id=$gallery_id");
?>