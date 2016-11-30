<?php

session_start();
require_once "dbConnect.php";
?>
<?php
//$query = "SELECT * FROM pesan WHERE user=".$_SESSION['user'];
$query = "SELECT * FROM pesan WHERE penerima='".$_SESSION['user']."'";
//echo "".$_SESSION['user'];
//$data1= mysqli_query($db,$query); PROCEDURAL
//$rowData1=mysqli_fetch_assoc($data1);
$data = $db->query($query);
$rowData = $data->fetch_assoc(); ?>

<?php
$query1= "SELECT user from username";
$data1=mysqli_query($db,$query1);
$num=mysqli_num_rows($data1);
$rowData1=mysqli_fetch_assoc($data1);
?>
<title>Menu</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav>
    <div class="nav-wrapper blue lighten-3 darken-2">
        <a href="tampilMenu.php" class="brand-logo">Menu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href=""><?echo " Nama Lengkap  ".$_SESSION['nama'];?></a></li>
            <li><a href="tampilHistory.php">Lihat History</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="col-md-3"></div>
<div class="col-md-6">
    <h3>INBOX</h3>
<form method="post" action="prosesPesan.php" >
<table border="1" class="table table-responsive table-striped  ">
    <thead>

    <th>Pengirim</th>
    <th>Pesan</th>

    </thead>
    <?
    foreach ($data as $rowData) {
        echo "<tbody>";

        echo "<td>" . $rowData['user'] . "</td>";
        echo "<td><div class='form-group'><input readonly class='form-control' name='isi[]' size='6' value='" . $rowData['isi'] . "'></div></td>";

        echo "</tbody>";
    } ?></table>
    <button class="btn btn-large waves-effect waves-light blue lighten-3 darken-2" type="submit" name="action">Tulis Pesan
    </button></div>
<?php
while($rowData1=mysqli_fetch_assoc($data1)) {

    echo "" . $rowData1['user'];
}
?>
<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>