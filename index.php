<?php include("header.php"); ?>
<body>
    <?php
        session_start();
        include("config.php");
    ?>
<!--CAROUSEL COLUMN-->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="carousel-bg col-xl-10 col-md-12 col-sm-12">
                    <div id="Mycarousel" class="carousel slide mt-3" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/image1.png">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/image2.jpg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/image1.png">
                            </div>
                        </div>
                            <a class="carousel-control-prev" href="#Mycarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#Mycarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div>
                </div>
<!-- WELCOME COLUMN-->
                <div class="about-bg col-xl-10 col-md-11 col-sm-12">
                    <h3 class="mx-2 pt-5 pb-4" style="text-align: center;">Welcome to Little Heroes</h3>
                        <p class= "lead px-2">
                            <?php // welcome
                                $sql = "SELECT * FROM lh_kappale WHERE ID='1';";
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
<!--ICON COLUMN-->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="icon-bg col-xl-4 col-md-4 col-sm-12 text-center">
                    <i class="fas fa-map-marker-alt fa-9x mt-5 mx-1 px-1"></i>
                        <a href="/location" style="text-decoration:none;"><h4 class="icon-title mx-1 px-1">Our location</h4></a>
                            <p class="mt-4">
                                <?php //location info
                                    $sql = "SELECT * FROM lh_kappale WHERE ID='2';";
                                    $result = $conn->query($sql);    
                                    
                                    if ($result->num_rows > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo $row['kappale'];
                                        }
                                    }         
                                ?>
                            </p> 
                </div>
                <div class="icon-bg col-xl-3 col-md-4 col-sm-12  text-center">
                    <i class="fas fa-camera-retro fa-9x mt-5 mx-1 px-1"></i>
                        <a href="/gallery"style="text-decoration:none;"><h4 class="icon-title mx-1 px-1">Gallery</h4></a>
                            <p class= "mt-4">
                                <?php //Photo info
                                    $sql = "SELECT * FROM lh_kappale WHERE ID='3';";
                                    $result = $conn->query($sql);  
                                    
                                    if ($result->num_rows > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo $row['kappale'];
                                        }
                                    }         
                                ?>
                            </p>
                </div>
                <div class="icon-bg col-xl-4 col-md-4 col-sm-12 text-center">
                    <i class="fas fa-envelope fa-9x mt-5 mx-1 px-1"></i>
                        <a href="/contact"style="text-decoration:none;"><h4 class="icon-title mx-1 px-1">Contact</h4></a>
                            <p class="mt-4">
                                <?php //Contact info
                                    $sql = "SELECT * FROM lh_kappale WHERE ID='4';";
                                    $result = $conn->query($sql);
                            
                                    if ($result->num_rows > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo $row['kappale'];
                                        }
                                    }         
                                ?>
                            <p>
                </div>
            </div>
        </div>
    </div>
<!--FACEBOOK -->
    <section>  
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="fb-bg col-xl-5 col-md-4 col-sm-12">
                    <h3 class="py-5" style="text-align: center; color: orange;">Latest news & events</h3> 
                            <div 
                                class="fb-page" 
                                data-tabs="timeline,events,messages"
                                data-href="https://www.facebook.com/littleheroesinternationalkindergarten/"
                                data-width="700"
                                data-height="600"
                                data-hide-cover="false">
                            </div>  
                    </div>
                </div>
            </div>
        </div>
    <section>  
<!-- APPLY -->
    <section>   
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="apply-bg col-xl-10 col-md-12 col-sm-12">
                    <h3 class="py-5" style="text-align: center; color: orange;">How to apply?</h3>
                            <p class= "lead pt-2" style="color: white;">
                                <?php //How to apply
                                    $sql = "SELECT * FROM lh_kappale WHERE ID='5';";
                                    $result = $conn->query($sql);  
                                
                                    if ($result->num_rows > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo $row['kappale'];
                                        }
                                    }         
                                ?>
                            </p>     
                                    <a href="/application" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Apply</a>    
                    </div>
                </div>
            </div>
        </div>
    </section>                        
</body>
<?php include("footer.php"); ?>