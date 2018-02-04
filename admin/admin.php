<?php require_once 'header.php'; ?>
<?php

session_start();
if (isset($_SESSION['user_email'])) {
    echo '


    <div class="row">

        <div class="col-md-2"><a href="/users.php"><img src="/images/admin/settings.png" alt="Slider" width="128" /><br />' . USER . '</a></div>
        <div class="col-md-2"><a href="/addpost.php"><img src="/images/admin/marker.png" alt="Marker" width="128"  /><br />' . ADD_MARKER . '</a></div>
        <div class="col-md-2"><a href="/pregled.php"><img src="/images/admin/pregled.png" alt="Pregled" width="128" /><br />' . PREGLED . '</a></div>

     </div>
  </div>

';
} else {
    echo 'Please <a href="index.php">Log in</a>';
}
?>





<?php require_once 'footer.php'; ?>



