<?php
// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("Location: http://localhost/web/index.php?pesan=logout");

?>