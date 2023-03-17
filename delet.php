<?php
 require 'index.php';

 $barang1 = $_GET['barang1'];

     if ( delete( $barang1 ) > 0  ) {
         echo "
         <script>
            alert('data berasil di hapus')
            document.location.href ='index.php';
            </script>      
         
         ";
     } else {
        echo "
        <script>
            alert('data berasil di hapus')
            document.location.href ='index.php';
            </script>  
         ";    
     }
 







?>