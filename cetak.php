<?php include("close.php");
require 'function.php';
$result = mysqli_query($conn, "SELECT * FROM datakaryawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cetak</title>
    <style>
        body {
            background: black;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: yellow;
            font-size: 40px;
            text-align: center;
            padding: 15px;
        }

        th {
            color: black;
            font-weight: bold;
            font-size: 25px;
            background-color: #dedede;
        }

        tr {
            margin: auto;
            text-align: center;
            align-items: center;
        }

        td {
            color: black;
            font-weight: bold;
            background-color: white;
        }

        table {
            margin: auto;
            width: 80%;
        }

        a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <h2>Data Karyawan</h2>

    <?php
    include 'inc_footer.php';
    ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>GMAIL</th>
            <th>NO HP</th>
            <th>T-TINGGAL</th>
            <th>TANGAL-L</th>
            <th>ID-K</th>
            <th>FOTO</th>
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
                <td><img src="img/<?php echo $row["gambar"]; ?> " width="50"></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    <script>
        window.print();
    </script>
    </table>
</body>

</html>