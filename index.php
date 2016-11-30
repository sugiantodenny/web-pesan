<html>
<head>
    <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container my-cont">
        <div class="top-cont">
            <h3>Login</h3>
        </div>
        <div class="row">
            <div class="col m12">
                <form class="col m12" id="my-form" method="post" action="login.php">
                    <div class="input-field col s12">
                        <input name="user" type="text" class="validate" required>
                        <label>Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="pass" type="password" class="validate" required>
                        <label>Password</label>
                    </div>
                    <div class="input-field col s12">
                        <div class="row">
                            <div class="col m4">
                                <input type="submit" class="waves-effect waves-light btn" value="Login">
                            </div>
                            <div class="col m3">
                                <a class="waves-effect waves-light btn" href="register.php">Daftar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom-cont">
            <p>Copyrigh &copy 2016 Denny Sugianto 311210011</p>
        </div>
    </div>
<!--script-->
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>
<script src="js/materialize.min.js" type="application/javascript"></script>
</body>
</html>
