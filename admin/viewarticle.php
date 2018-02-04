<?php require_once 'header.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM tekst WHERE id='$id'");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
while ($row = mysqli_fetch_array($sql)) {
    echo "<h1>" . $row['name'] . "</h1>";
    echo "<p>" . $row['region_name'] . "</p>";
    echo '<div class="clearfix"><br /><br /></div>';
 if (isset($row['youtube']) && $row['youtube'] != NULL) {
                    echo '<p class="col-md-12 col-lg-12 col-xs-12 col-sm-12"style="text-align: center;" class="white float-left"><iframe width="auto" height="auto" src="//www.youtube.com/embed/' . $row['youtube'] . '" frameborder="0" allowfullscreen></iframe></p> ';
                }    echo $row['rte'];
    }
?>
<?php
$id = $_GET['id'];
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = mysqli_query($con, "SELECT * FROM gallery WHERE gallery_id = $id ");
echo '
';
while ($row = mysqli_fetch_array($sql)) {
    echo '
    <div class="sliki">
       <div class="image-cropper img-polaroid nastanbox">
           <a class="fancybox-effects-d"  data-fancybox-group="gallery" href="' . $row['imagethumb'] . '"><img class="centered" src="' . $row['image'] . '" /></a>
       </div>
   </div>                
   ';
}
?>
<div class="clearfix"><br /><br /><br /><br /></div>
<?php require_once 'footer.php'; ?>