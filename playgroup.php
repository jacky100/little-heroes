<?php include("header.php"); ?>
<body>
<?php
    session_start();
    include("config.php");
 ?>
<!-- PLAYGROUPS COLUMN-->
    <div class="container">
        <div class="row">    
            <div class="story-bg col-12 pt-5">
                <h3 class= "display-5" style="text-align: center;">Playgroups</h3>
                <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>

                <p class= "desc">
                        <?php //playgroup
                            $sql = "SELECT * FROM lh_kappale WHERE ID='15';";
                            $result = $conn->query($sql);  
                
                            if ($result->num_rows > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['kappale'];
}
                            }
                        ?>
                       
                        Sign up using this link:&nbsp;
                        <a href="http://www.littleheroes.fi/apply-form">http://www.littleheroes.fi/apply-form</a>
                    </p>
                    <br><br>
            </div>
            </div>
            </div>
            
    
    <?php include("footer.php"); ?>