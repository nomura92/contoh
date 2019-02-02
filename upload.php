
<?php
$target_dir = "";
$uploadOk = 1;
if(isset($_POST["submit"])) {
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"");
   echo"Berhasil <br>";
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
