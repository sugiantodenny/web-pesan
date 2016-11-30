<?php
session_start();

require_once "dbConnect.php";

$user = $_POST['user'];
$pass = $_POST['pass'];
$query = 'SELECT * FROM username';
$data = $db->query($query);
$sukses = 0;
$row = $data->fetch_assoc();
foreach ($data as $row) {

    if ($user == $row['user'] && $pass == $row['password']) {
        $sukses = 1;
    
        $_SESSION['user'] = $row['user'];
        $_SESSION['nama'] = $row['namalengkap'];
       // $_SESSION['saldo'] = $row['deposit'];
    }
}
if ($sukses == 1) {
    echo "<script>
alert('Berhasil Login');
window.location.href='tampilMenu.php';
</script>";

} else
    echo "<script>
alert('Username tidak ada atau password salah');
window.location.href='index.php';
</script>";





