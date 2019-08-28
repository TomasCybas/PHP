<?php
if(isset($_POST["upload"])){
    print_r($_FILES);
    move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/PHP/".$_FILES["file"]["name"] );
}

?>


<form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="upload" value="1">Įkelti</button>
</form>
