<?php require_once 'header.php'; ?>
<?php
$naslov = $_POST['naslov'];
$tip = $_POST['tip'];
$address = $_POST['address'];
?>
<div class="clearfix"><br /></div>
<div class="form-group">
    <form id="file_attachment_slider" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
        <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
        <a href="javascript:void(0);" onclick="slider_form_script();" class="btn btn-info" required><?php echo UPLOAD; ?></a>
    </form>
    <form action="process/processmarker.php" method="post" >
        <br />
        <div id="vpb_upload_status"></div>
        <br />
        <label for="naslov">Внесете наслов на "артиклот" (Име на рецепта,...):</label>
        <input type="text" name="naslov" class="form-control" id="naslov">
        <label for="date">Изберете датум кога е направен "артиклот" пр. 01/23/2014 (MM/DD/YYYY):</label>
        <input type="date" name="date" class="form-control" id="date">
        <br />
        <label for="tip">Јазик на "артиклот" (Англиски, Македонски,...) :</label>
        <select name="tip" class="form-control" id="tip">
            <option value="mk">Македонски</option>
            <option value="en">Англиски</option>
        </select>
        <br />
        <textarea class="ckeditor" name="rte"></textarea>
        <label for="youtube">Youtube Link</label>
        <input type="text" name="youtube" class="form-control" id="youtube" />
        <div class="clearfix"><br /></div>
        <button type="submit" class="pull-right btn btn-success"> <span class="glyphicon glyphicon-check"></span> Додади  </button>
    </form>
</div>
<script>
function slider_form_script()
{
//alert('COOL');
$("#file_attachment_slider").vPB({
url: 'vpb_small_image.php',
beforeSubmit: function()
{
$("#vpb_upload_status").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Please wait <img src="images/loadings.gif" align="absmiddle" title="Upload...."/></div><br clear="all">');
},
success: function(response)
{
$("#vpb_upload_status").hide().fadeIn('slow').html(response);
}
}).submit();
}
</script>
<?php require_once 'footer.php'; ?>