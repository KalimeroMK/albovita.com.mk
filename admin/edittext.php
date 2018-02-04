<?php

require_once 'header.php';
$pageid = $_POST['pageid'];

echo '<form action="process/processedittext.php" method="post" >';

$sql = mysqli_query($con, "SELECT * FROM tekstovi WHERE pageid = '$pageid'");

while ($row = mysqli_fetch_assoc($sql)) {
    echo '

    <div class="form-group">
        <label for="inputNaslov"><?php echo PAGE_NAME ; ?> </label>
        <input type="text" class="form-control" id="inputNaslov" placeholder="<?php echo ENTER_TITLE; ?>" name="pagetitle" value="' . $row['pagetitle'] . '">
    </div>
    <br />
    <div class="form-group">
        <textarea name="rte" class="ckeditor">' . $row['pagerte'] . '</textarea>
    </div>    
<input type="hidden" value="' . $row['pageid'] . '" name="pageid" />
    <button type="submit" class="btn btn-warning btn-xs">' . EDIT . '</button>




';
}


echo '</form>';



require_once 'footer.php';
?>








