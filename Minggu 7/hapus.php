<?php 
require 'function.php';


$id_part = $_GET["id_part"];

if( hapus($id_part) > 0 ){
    echo "
    <script>
        alert('data berhasil dihapus!!!');
        document.location.href = 'tokosparepart.php'
    </script>

";
}else {
    echo "
    <script>
        alert('data gagal dihapus!!!');
        document.location.href = 'tokosparepart.php'
    </script>

";
}

?>