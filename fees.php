<?php include("header.php"); ?>
<body>
    <?php
        session_start();
        include("config.php");
    ?>
<!-- FEES COLUMN-->
    <div class="container">
        <div class="row">    
            <div class="col-12 pt-5">
                <h3 class= "display-5" style="text-align: center;">Fees</h3>
                <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>
                    <p class= "desc">
                        <?php
                            $sql = "SELECT * FROM lh_kappale WHERE ID='18';";
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
        <div class="row">
            <div class="col-xl-6 col-sm-12">
                <p class= "price1">
                    <?php
                        $sql = "SELECT * FROM lh_kappale WHERE ID='20';";
                        $result = $conn->query($sql);  
            
                        if ($result->num_rows > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['kappale'];
                        }
                            }
                    ?>
                </p>
            </div>
            <div class="col-xl-6 col-sm-12">
                <p class= "price2">
                    <?php
                        $sql = "SELECT * FROM lh_kappale WHERE ID='21';";
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
</body>      
    <?php include("footer.php"); ?>