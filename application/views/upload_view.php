<!DOCTYPE html>
<html lang="en">
<body>
<form method="post" action="<?=base_url();?>index.php/first/upload_img" enctype="multipart/form-data">
    <input type="file" name="userfile"/>
    <input type="submit" name="download" value="Загрузить"/>
</form>
</body>
</html>