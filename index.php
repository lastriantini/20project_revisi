<?php
$conn = mysqli_connect("localhost", "root", "","ujian");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $kotaks = [];
    while ($kotak = mysqli_fetch_assoc($result)) {
        $kotaks[]=$kotak;
    }
    return $kotaks;
    }
    function delete($barang1){
        global $conn;
        $delete = "DELETE FROM ujian WHERE barang1 = '$barang1'";
        mysqli_query( $conn,$delete);

        return mysqli_affected_rows($conn);
    }
//     function ubahData( $data) {
//         global $conn;
//         barang1 = $data["id"];
//         $nama = htmlspecialchars ($data ["nama"]);
//         $nis = htmlspecialchars ($data ["nis"]);
//         $rombel = htmlspecialchars ($data ["rombel"]);
//         $rayon= htmlspecialchars ($data ["rayon"]);
//         $status = htmlspecialchars ($data ["status"]);
    
//         $query = "UPDATE students SET
//                nama = '$nama',     
//                Nis  = '$nis',
//                Rombel = '$rombel',
//                Rayon = '$rayon',
//                Status = '$status'
//                WHERE id= $id         
//                     ";
    
//         mysqli_query( $conn, $query);
    
//         return mysqli_affected_rows($conn);
//     }
//     function search($keyword){
//         $query = "SELECT * FROM students
//                     WHERE 
//                     nama LIKE '%$keyword%' OR
//                     nis LIKE '%$keyword%' OR
//                     rombel LIKE '%$keyword%' OR
//                     rayon LIKE '%$keyword%' OR
//                     status LIKE '%$keyword%' 
        
//         ";
//         return query($query);
//     }
    

// ?>