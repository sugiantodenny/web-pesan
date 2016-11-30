<?php

session_start();
require_once "dbConnect.php";
//$query = "SELECT * FROM pesan WHERE user=".$_SESSION['user'];
$query = "SELECT * FROM pesan WHERE user ='" . $_SESSION['user'] . "'";
//echo "" . $_SESSION['user'];
$data = $db->query($query);
$rowData = $data->fetch_assoc(); ?>
<title>Menu</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav>
    <div class="nav-wrapper blue lighten-3 darken-2">
        <a href="tampilMenu.php" class="brand-logo">Menu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href=""><? echo " Nama Lengkap  " . $_SESSION['nama']; ?></a></li>
            <li><a href="tampilMenu.php">Lihat Inbox</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="col-md-3"></div>
<div class="col-md-6">
    <form method="post" action="prosesPesan.php">
        <table border="1" class="table table-responsive table-striped " id="demo">
            <thead>

            <th>User</th>
            <th>Pesan</th>
            <th>To</th>
            </thead>
            <?php
            foreach ($data as $rowData) {
                echo "<tbody>";

                echo "<td>" . $rowData['user'] . "</td>";
                echo "<td><div class='form-group'><input readonly class='form-control' name='isi[]' size='6' value='" . $rowData['isi'] . "'></div></td>";
                echo "<td>" . $rowData["penerima"] . "</td>";
                echo "</tbody>";
            } ?></table>
    </form>
    <div class="demo1"></div>
    </a></div>
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>
<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/page.js" type="application/javascript"></script>
<script>
    $('.demo1').bootpag({
        total: 5
    }).on("page", function(event, num){
        $(".content").html("Page " + num); // or some ajax content loading...

        // ... after content load -> change total to 10
        $(this).bootpag({total: 5, maxVisible: 5});

    });
</script>

