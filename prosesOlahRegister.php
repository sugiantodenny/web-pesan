<?php
include_once "dbConnect.php";
$SERVER = 'localhost';
$DATABASE= 'webpesan';
$USER = 'root';
$PASS = '';
// Check connection
$conn = mysqli_connect($SERVER, $USER, $PASS, $DATABASE);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}else{
    $user=$_POST["user"];
    $pass=$_POST["password"];
    $nama=$_POST["nama"];


    //$user=$_SESSION["user"];


    $query="INSERT INTO username VALUES ('$user','$pass','$nama')";
    $result=mysqli_query($conn,$query);

}

if ( $result ){
   // echo "Data berhasil disimpan";
    echo "<script>
alert('Berhasil Disimpan');
window.location.href='index.php';
</script>";

} else {
    echo "<script>
alert('Data Tidak Tersimpan');
window.location.href='index.php';
</script>";
}
