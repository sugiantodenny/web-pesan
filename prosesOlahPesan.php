<?php

session_start();

    if (isset($_SESSION["user"])) {

        $SERVER = 'localhost';
        $DATABASE= 'webpesan';
        $USER = 'root';
        $PASS = '';
        // Check connection
        $conn = mysqli_connect($SERVER, $USER, $PASS, $DATABASE);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());

        }else{
          //  $user=$_POST["user"];
            $pesan=$_POST["pesan"];
            $penerima=$_POST["penerima"];


            $user=$_SESSION["user"];


            $query="INSERT INTO pesan VALUES ('','$user','$pesan','$penerima')";
            $result=mysqli_query($conn,$query);
            //$berhasil = 1;
        }

        if ( $result ){
            echo "<script>
alert('Berhasil Terkirim');
window.location.href='tampilMenu.php';
</script>";

        } else {
            echo "<script>
alert('Tidak Terkirim');
window.location.href='tampilMenu.php';
</script>";
        }




    }else{
    echo "<a href=index.php>Silahkan Login</a>";
}
