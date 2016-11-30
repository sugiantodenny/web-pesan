<title>Register</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav>
<div class="nav-wrapper blue lighten-3 darken-2">
        <a href="register.php" class="brand-logo">Register</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div> !-->
</nav>

<div class="col-md-3"></div>
<div class="col-md-6">
    <form method="post" action="prosesOlahRegister.php">
        <table border="1" class="table table-responsive table-striped ">
            <thead>

            <th>user<input type="text" name="user"></th>
            <th>pessword<input type="text" name="password"></th>
            <th>Nama Lengkap<input type="text" name="nama"></th>
            </thead>
        </table>
        <button class="btn btn-large waves-effect waves-light blue lighten-3 darken-2" type="submit" name="action">register
        </button></div>

<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>