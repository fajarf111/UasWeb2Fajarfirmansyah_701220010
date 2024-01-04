<?php
require 'function.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>        
        ";
    } else {
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>        
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        .wrapper {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-box input,
        .input-box input {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #btn-1 {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        #btn-1:hover {
            background-color: #0056b3;
        }

        .btn-warning {
            display: inline-block;
            margin-bottom: 15px;
        }

        .btn-warning i {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <h1>Tambah data</h1>
    <div class="wrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-box">
                <label for="nama"><b>Nama</b></label>
                <input class="teks1" type="text" name="nama" id="nama">
            </div>
            <div class="input-box">
                <label for="email"><b>Gmail</b></label>
                <input class="teks1" type="text" name="email" id="email">
            </div>
            <div class="input-box">
                <label for="nohp"><b>No Hanphone</b></label>
                <input class="teks1" type="text" name="nohp" id="nohp">
            </div>
            <div class="input-box">
                <label for="ttl"><b>Tempat Tinggal</b></label>
                <input class="teks1" type="text" name="ttl" id="ttl">
            </div>
            <div class="input-box">
                <label for="tanggallahir"><b>Tanggal Lahir</b></label>
                <input class="teks1" type="text" name="tanggallahir" id="tanggallahir">
            </div>
            <div class="input-box">
                <label for="idkaryawan"><b>Id Karyawan</b></label>
                <input class="teks1" type="text" name="idkaryawan" id="idkaryawan">
            </div>
            <div class="btn-warning">
                <label for="gambar">
                    <input type="file" name="gambar" id="gambar">
                </label>
            </div>
            <div>
                <button id="btn-1" type="submit" name="submit"><b>Tambah Kan</b>
                </button>
            </div>
        </form>
    </div>
</body>

</html>