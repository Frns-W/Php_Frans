<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload foto</title>
</head>
<body>
    <form action="prosses_upload.php" method="post" enctype="multipart/form-data">
        Keterangan :
        <input type="text" name="ket">

        <br>
        
        <br>

        Foto :
        <input type="file" name="upload">

        <br>
        <br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>