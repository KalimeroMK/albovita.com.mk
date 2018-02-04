<?php require_once 'header.php'; ?>
<div class="clearfix"><br /></div>
<?php
$id = $_POST['id'];

$sql = mysqli_query($con, "SELECT * FROM tekst WHERE id = $id");
if (mysqli_connect_errno($con)) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
while ($row = mysqli_fetch_array($sql)) {
echo '

<div class="form-group">
    <form action="process/markerupdate.php" method="post" >
        
        <input type="hidden" name="id" value="'.$id.'" />
        
        <label for="naslov">Внесете наслов на "артиклот" (Село Небрегово, Манастир Св. Ѓорѓија,...):</label>
        <input type="text" name="naslov" class="form-control" id="naslov" value="'.$row['name'].'">
        <label for="date">Изберете датум кога е направен "артиклот" пр. 01/23/2014 (MM/DD/YYYY):</label>
        <input type="date" name="date" class="form-control" id="date" value="'.$row['date'].'">
        <br />
        <label for="tip">Тип на "артиклот" (Патепис, Репортажа,...) :</label>
        <select name="tip" class="form-control" id="tip">
            <option value="mk">Македонски</option>
            <option value="an">Англиски</option>
        </select>
        
        ';
        
        }
        ?>
        
    </select>
    <br />
    <?php
    $id = $_POST['id'];
    
    $sql = mysqli_query($con, "SELECT * FROM tekst WHERE id = $id");
    if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    while ($row = mysqli_fetch_array($sql)) {
    echo '
    <textarea class="ckeditor" name="rte">'.$row['rte'].'</textarea>
    <label for="youtube">Youtube Link</label>
    <input type="text" name="youtube" class="form-control" id="youtube" value="'.$row['youtube'].'"/>
    
    <div class="clearfix"><br /></div>
    <button type="submit" class="pull-right btn btn-success"> <span class="glyphicon glyphicon-check"></span> Додади  </button>
</form>
</div>
';
}
?>
<?php require_once 'footer.php'; ?>