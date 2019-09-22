<?php
    session_start();

    //ottaa vastaan syötetyt tunnukset

    if(isset($_POST['login'])) {
        include_once("config.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $password = md5($password);

        //vertailee löytyykö tunnuksia

        $sql = "SELECT * FROM lh_users WHERE username ='$username' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['ID'];
        $db_password = $row['password'];
        $admin = $row['Admin'];

        //jos tunnukset täsmää, sisäänkirjautuminen onnistuu

        if($password == $db_password) {
             $_SESSION['username'] = $username;
             $_SESSION['ID'] = $id;
             if($admin == 1) {
                 $_SESSION[ 'Admin'] = 1;
             }
             header("Location: admin_room.php");
        } else {
            echo "Error: Incorrect Details!";
        }
    }
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="css/login_style.css">
<title>Login</title>
</head>
<body>
    <div class="login">
    <h1 style="font-family: Arial; color: white;">Login</h1><br />
    <form action="login.php" method="post" enctype="multipart/form-data">
        <input placeholder="Username" name="username" type="text" autofocus><br />
        <input placeholder="Password" name="password" type="text"><br />
        <input name="login" type="submit" value="Login">
    </form>
</div>
</body>
</html>