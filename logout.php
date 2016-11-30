<?php

session_start();
session_unset();
session_destroy();
?><script>
    alert('Berhasil logout');
    window.location.href='index.php';
</script>