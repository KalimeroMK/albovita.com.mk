<?php require_once '../conf/conf.php'; ?>

<?php

$pageid = $_POST['pageid'];
$pagetitle = $_POST['pagetitle'];
$rte = $_POST['rte'];

if (isset($pagetitle) && $pagetitle != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekstovi SET pagetitle = '$pagetitle' WHERE pageid = '$pageid'");
}
if (isset($rte) && $rte != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekstovi SET pagerte = '$rte' WHERE pageid = '$pageid'");
}
header('Location: ../addtext.php');
mysqli_close($con);
?>
