<?php include("sidebar.php");
if (!in_array("guru", $_SESSION['admin_akses'])) {
    echo "kamu tidak memiliki akses";
    include("close.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background: black;
        }

        h1 {
            color: yellow;

        }

        h3 {
            color: white;
        }

        a {
            color: red;
            display: block;
            text-align: center;
        }

        a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <br><br>
    <h1>halaman Kepala</h1>
    <h3>Hanya Bisa Mendownload file pdf atau Mencetak</h3>
    <a href="cetak.php" target="_blank">Download pdf ? Or Print ?
    </a>
</body>

</html>