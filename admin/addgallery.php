<?php require_once 'header.php';
    session_start();
    if (isset($_SESSION['user_email'])) { ?>


        <p class="breadcrumb" style="text-align: center;"><?php
            $id = $_GET['id'];
            $sql = mysqli_query($con, "SELECT * FROM markers INNER JOIN region ON markers.address = region.id WHERE markers.id='$id'");
            if (mysqli_connect_errno($con)) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            while ($row = mysqli_fetch_array($sql)) {
                echo $row['name'];
            }

            ?> </p>

        <div style="text-align: center;">
            <p class="btn btn-danger btn-xs"><strong>ВАЖНО! </strong> Сликата треба да биде со димензии од околу: width:
                980px;</p>
        </div>


        <form id="file_attachment_slider" method="post" enctype="multipart/form-data" action="javascript:void(0);"
              autocomplete="on">
            <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file"
                                                        class="btn btn-warning">
            <a href="javascript:void(0);" onclick="slider_form_script();" class="btn btn-info"
               required><?php echo UPLOAD; ?></a>
        </form>

        <form action="process/processimage.php" method="post">
            <br/>
            <div id="vpb_upload_status"></div>
            <br/>

            <?php

            $id = $_GET['id'];


            echo '<input type="hidden" name="gallery_id" value="' . $id . '" />';

            ?>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <br/><br/>

        <p class="breadcrumb" style="text-align: center;"> <?php echo DELETE_CATALOG_IMAGE; ?> </p>

        <table class="table">

            <?php echo '<th>' . IMG_TITLE . '</th><th>' . IMAGE . '</th><th>' . DELETE . '</th>'; ?>
            <?php
            $id = $_GET['id'];

            // Check connection
            if (mysqli_connect_errno($con)) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = mysqli_query($con, "SELECT * FROM gallery WHERE gallery_id = $id ");
            echo '
<div class="row">       
';
            while ($row = mysqli_fetch_array($sql)) {
                echo '
<form action="process/deleteimage.php" method="post">                 
<tr>
<td>' . $row['title'] . '</td>
<td><img src="' . $row['image'] . '" class="img-responsive" style="max-width: 600px;"></img></td>
<td>
<input type="hidden"  name="id" value="' . $row['id'] . '" />
<input type="hidden"  name="gallery_id" value="' . $id . '" />
<button type="submit" class="btn btn-danger btn-xs" >' . IZBRISHI_SLIKA_KATALOG . '</button>
</td>
</tr>
</form>
';
            }
            ?>
        </table>

        <script>
            function slider_form_script() {
                //alert('COOL');
                $("#file_attachment_slider").vPB({
                    url: 'vpb_uploader.php',
                    beforeSubmit: function () {
                        $("#vpb_upload_status").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Please wait <img src="images/loadings.gif" align="absmiddle" title="Upload...."/></div><br clear="all">');
                    },
                    success: function (response) {
                        $("#vpb_upload_status").hide().fadeIn('slow').html(response);
                    }
                }).submit();
            }

        </script>
        <?php
    }
    else {
        echo 'Please <a href="index.php">Log in</a>';
    }
        ?>
<?php require_once 'footer.php'; ?>