<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusans_id = $_POST['jurusans_id'];   

    #3. Query Insert (proses tambah data)
    $query = "UPDATE biodata SET nama ='$nama', nisn='$nisn', tmpt_lahir='$tmpt_lahir', 
    tgl_lahir='$tgl_lahir', alamat='$alamat', email='$email', jenis_kelamin='$jenis_kelamin', jurusans_id='$jurusans_id'
    WHERE id='$id'";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal diedit";
    }
?>