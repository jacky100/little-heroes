<?php include("header.php"); ?>
<body>
    <?php
        session_start();
        include("config.php");
    ?>
<!-- LOCATION -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">    
                <div class="col-12 pt-5">
                    <h3 class= "display-5" style="text-align: center;">Location</h3>
                    <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>
                </div>
                <div class="col-xl-5 col-md-12 col-sm-12 pt-5">
                    <p class= "desc-team">
                        <?php // location
                            $sql = "SELECT * FROM lh_kappale WHERE ID='16';";
                            $result = $conn->query($sql);  
                
                            if ($result->num_rows > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['kappale'];
                            }
                                }
                        ?>
                    </p>
                </div>
                <div class="col-xl-5 col-md-12 col-sm-12 pt-5">
                    <?php include_once("map.php"); ?>
                </div>    
            </div>
        </div>
    </div>
</body>     
    <?php include("footer.php"); ?>