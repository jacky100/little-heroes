<?php include("header.php"); ?>
<body>
<?php
    session_start();
    include("config.php");
 ?>
<!-- TEAM COLUMN-->
    <div class="wrapper">
        <div class="container">
            <div class="row">    
                <div class="col-xl-12 col-md-12 col-sm-12 pt-5">
                    <h3 class= "display-5" style="text-align: center;">Our team</h3>
                    <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>
                </div>
                <div class="team-bg col-xl-4 col-md-4 col-sm-12">
                    <?php //Annikan kuva
                        $result = mysqli_query($conn, "SELECT * FROM lh_photos WHERE ID='1'");
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div id='img_div'>";
                                echo "<img src='img/".$row['photo']."' >";
                                echo "</div>";
                            }
                    ?>  
                </div>
                <div class="text-bg col-xl-8 col-md-8 col-sm-12 pt-0">
                    <p class= "desc-team">
                        <?php //Annika
                                $sql = "SELECT * FROM lh_kappale WHERE ID='7';";
                                $result = $conn->query($sql);  
                    
                                if ($result->num_rows > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['kappale'];
                                    }
                                }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="team-bg col-xl-4 col-md-4 col-sm-12">
                    <?php //Leenan kuva
                        $result = mysqli_query($conn, "SELECT * FROM lh_photos WHERE ID='2'");
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div id='img_div'>";
                                echo "<img src='img/".$row['photo']."' >";
                                echo "</div>";
                            }
                    ?>  
                </div>       
                <div class="text-bg col-xl-8 col-md-8 col-sm-12 pt-0">
                    <p class= "desc-team">
                        <?php //Leena
                            $sql = "SELECT * FROM lh_kappale WHERE ID='8';";
                            $result = $conn->query($sql);  
                
                            if ($result->num_rows > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['kappale'];
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="team-bg col-xl-4 col-md-4 col-sm-12">
                    <?php //Jennyn kuva
                        $result = mysqli_query($conn, "SELECT * FROM lh_photos WHERE ID='3'");
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div id='img_div'>";
                                echo "<img src='img/".$row['photo']."' >";
                                echo "</div>";
                            }
                    ?>  
                </div>    
                <div class="text-bg col-xl-8 col-md-8 col-sm-12 pt-0">
                    <p class= "desc-team">
                        <?php //Jenny
                            $sql = "SELECT * FROM lh_kappale WHERE ID='9';";
                            $result = $conn->query($sql);  
                
                            if ($result->num_rows > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['kappale'];
                                }
                            }
                        ?>
                    </p>     
                </div>
            </div>
        </div>
    </div>
</body>
    <?php include("footer.php"); ?>