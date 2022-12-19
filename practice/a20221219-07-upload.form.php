<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="a20221219-06-files.php" method="post" enctype="multipart/form-data">

        <!-- 
        accept => 預設檔案類型
        
        需要多個檔案 multipart
        name = [] 
        -->
        <input type="file" name="my_file[]" accept="image/jpeg,image/png" multipart>
        <br>
    <input type="submit">
    </form>
</body>

</html>