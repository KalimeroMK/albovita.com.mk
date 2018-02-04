<?php require_once '../conf/conf.php'; ?>
<?php

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$naslov = $_POST['naslov'];
$tip = $_POST['tip'];
$address = $_POST['address'];
$date = $_POST['date'];
$slika = $_POST['slika'];
$slika_large = $_POST['slikathumb'];
$youtb = $_POST['youtube'];
$p_url = parse_url($youtb);
parse_str($p_url['query'], $p_param);
$youtube = $p_param['v'];
$rte = $_POST['rte'];



$sql = "INSERT INTO tekst (name, address, lang, date, slika, slika_large, youtube, rte) 
VALUES ('$naslov', '$address','$tip','$date','$slika', '$slika_large','$youtube','$rte')";
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

header('Location: /');
?>
