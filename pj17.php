<?php


include "pj16.php";
session_start();

// if(!isset($_SESSION['username'])) {
//     header("Location: index.php?page=login");
// }

function query( $query ) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $kotaks = [];
    while($kotak = mysqli_fetch_assoc($result)) {
        $kotaks[] = $kotak;
    }
    return $kotaks;
}

$datas = query("SELECT * FROM dt_barang");

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>Tabel Biodata</h3>
        <table border="2" cellpading="40">
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
    <?php $i=1;?>  
    <?php foreach($datas as $data){?>
        <tr>
            <td>
                <?php echo $data["namabarang"]?>
                </td>
            <td>
                <?php echo $data["jumlah"]?>
                </td>
            <td>
                <?php echo $data["harga"]?>
                </td>
                <td>
                <a href="pj18.php?id=<?= $data["id"] ?>">hapus</a>
                </td>
        </tr>
        <?php } ?>
        </table>
    </body>
    </html>