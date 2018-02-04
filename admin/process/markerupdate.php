<?php require_once '../conf/conf.php'; ?>

<?php


$id = $_POST['id'];
$naslov = $_POST['naslov'];
$tip = $_POST['tip'];
$address = $_POST['address'];
$date = $_POST['date'];
$youtb = $_POST['youtube'];
$p_url = parse_url($youtb);
parse_str($p_url['query'], $p_param);
$youtube = $p_param['v'];
$rte = $_POST['rte'];



if (isset($naslov) && $naslov != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekst SET name = '$naslov' WHERE id = '$id'");
}
if (isset($rte) && $rte != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekst SET rte = '$rte' WHERE id = '$id'");
}
if (isset($tip) && $tip != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekst SET lang = '$tip' WHERE id = '$id'");
}
if (isset($address) && $address != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekst SET address = '$address' WHERE id = '$id'");
}
if (isset($date) && $date != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekst SET date = '$date' WHERE id = '$id'");
}
if (isset($youtube) && $youtube != NULL) {
    $updateuser = mysqli_query($con, "UPDATE tekst SET youtube = '$youtube' WHERE id = '$id'");
}
header("Location: /viewarticle.php?id=$id");

?>