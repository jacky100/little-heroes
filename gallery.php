
<?php

include("header.php"); ?>
<body>
<?php
    session_start();
    
 ?>
<main>

<section class="gallery-links">
    <div class="wrapper">
        

        <div class="container">
        <div class="row">    
            <div class="story-bg col-12 pt-5">
                <h1 class= "display-5" style="text-align: center;">Gallery</h1>
                <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>
            <div class="gallery-container">
            <?php
            include_once 'includes/config.inc.php';

            $sql = "SELECT * FROM lh_gallery ORDER BY orderGallery DESC";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed!";
            } else{
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)){

   echo  '<a href="#">
        <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
        </a>';
      }
    }
    ?>
    </div>

    </div>
</section>
</main>
    <?php include("footer.php"); ?>



