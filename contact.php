<?php include("header.php"); ?>
<body>
    <?php
        session_start();
        include("config.php");
    ?>
<!-- CONTACT -->
    <div class="wrapper">
        <div class="container">
            <div class="row">    
                <div class="col-12 pt-5">
                    <h3 class= "display-5" style="text-align: center;">Contact</h3>
                    <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>
                        <?php // welcome
                            $sql = "SELECT * FROM lh_kappale WHERE ID='19';";
                            $result = $conn->query($sql);  
                
                            if ($result->num_rows > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['kappale'];
                            }
                                }
                            include_once("contactform.php");
                        ?>
                </div>
            </div>
        </div>
    </div>
</body>            
    <?php include("footer.php"); ?>