<?php require_once '../conf/conf.php'; ?>
<?php 

$slika = $_POST['slika'];
$slikathumb = $_POST['slikathumb'];
$gallery_id = $_POST['gallery_id'];



$sql = "INSERT INTO gallery (image, imagethumb, gallery_id) VALUES ('$slika', '$slikathumb', '$gallery_id')";
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

header("Location: ../addgallery.php?id=$gallery_id");


?>