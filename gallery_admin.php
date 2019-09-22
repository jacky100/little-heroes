<html>
<head>

</head>



<link rel="stylesheet" href="css/admin_style.css">



<body>

<?php
    
    echo '<div class="gallery-upload">
    
        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="File name">
        <input type="text" name="filetitle" placeholder="Image title">
        <input type="text" name="filedesc" placeholder="Image desc">
        <input type="file" name="file">
        <button type ="submit" name="submit">UPLOAD</button>
        </form>
    </div>';
    
    ?>  