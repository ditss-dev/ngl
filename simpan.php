<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['pesan'])) {
    $pesan = strip_tags($_POST['pesan']);
    $time = date("Y-m-d H:i:s");
    $data = "[$time] $pesan\n";
    
    file_put_contents("pesan.txt", $data, FILE_APPEND | LOCK_EX);
    
    echo "<script>alert('Pesan terkirim!');window.location='index.html';</script>";
} else {
    echo "<script>alert('Isi pesan tidak boleh kosong!');window.location='index.html';</script>";
}
?>
