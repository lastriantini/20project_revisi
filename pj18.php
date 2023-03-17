<?php

require 'pj16.php';
$id = $_GET["id"];

if( delete($id) > 0) {
    global $koneksi;
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'pj17.php';
    </script>";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'pj17.php';
    </script>";
}
?>