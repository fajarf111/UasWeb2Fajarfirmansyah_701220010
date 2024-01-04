<?php include("sidebar.php");
if (!in_array("siswa", $_SESSION['admin_akses'])) {
    echo "kamu tidak memiliki akses";
    include("close.php");
    exit();
}
?>
<?php include("close.php");
require 'function.php';
$result = mysqli_query($conn, "SELECT * FROM datakaryawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        background: black;
        font-family: 'Arial', sans-serif;
    }

    h1 {
        text-align: center;
        color: yellow;
    }

    th {
        color: black;
        font-weight: bold;
        background: #dedede;
    }

    tr {
        margin: auto;
        text-align: center;
        align-items: center;
    }

    td {
        color: black;
        font-weight: bold;
    }

    table {
        margin: auto;
        border-collapse: collapse;
        width: 70%;
        background: white;
    }

    a {
        color: red;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <diiv>
        <h1>DATA KARYAWAN</h1>
        <table border="1" cellpadding="10" cellspacing="2">

            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>GMAIL</th>
                <th>NO HP</th>
                <th>TEMPAT TINGGAL</th>
                <th>TANGGAL LAHIR</th>
                <th>ID KARYAWAN</th>
                <th>GAMBAR</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <td><?= $i; ?> </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["nohp"]; ?></td>
                <td><?= $row["ttl"]; ?></td>
                <td><?= $row["tanggallahir"]; ?></td>
                <td><?= $row["idkaryawan"]; ?></td>
                <td><img src="img/<?php echo $row["gambar"]; ?>" width="70"></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>

        </table>

</body>

</html>