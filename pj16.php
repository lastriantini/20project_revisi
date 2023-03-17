<?php
$koneksi = mysqli_connect("localhost","root","","assesment");
// if ($koneksi) {
//     echo "yey";
// }

function delete($id) {
    global $koneksi;
    $sql = "DELETE FROM dt_barang WHERE id = $id";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}