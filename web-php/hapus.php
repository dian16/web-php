<?php
include 'koneksi.php';
$id=$_GET['user_id'];

$query=mysqli_query($koneksi, "DELETE FROM `user` WHERE user_id='$id'") or die (mysqli_error($koneksi));

if ($query) {
    header("Location: index.php");
} else {
    echo "GAGAL";
}
    
?>