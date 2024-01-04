    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_uasweb2");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        $ttl = htmlspecialchars($data["ttl"]);
        $tanggallahir = htmlspecialchars($data["tanggallahir"]);
        $idkaryawan = htmlspecialchars($data["idkaryawan"]);

        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO datakaryawan (nama, email, nohp, ttl, tanggallahir, idkaryawan, gambar) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sssssss", $nama, $email, $nohp, $ttl, $tanggallahir, $idkaryawan, $gambar);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_affected_rows($stmt);
    }
    function upload()
    {
        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $eror = $_FILES['gambar']['error'];
        $tmpname = $_FILES['gambar']['tmp_name'];
        if ($eror === 4) {
            echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
            return false;
        }
        $gambarvalid = ['jpg', 'jpeg', 'png'];
        $gambar = explode('.', $namafile);
        $gambar = strtolower(end($gambar));
        if (!in_array($gambar, $gambarvalid)) {
            echo "<script>alert('Mohon Masukkan gambar yang benar!');</script>";
            return false;
        }
        if ($ukuranfile > 2000000) {
            echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
            return false;
        }
        $namafilebaru = uniqid() . '.' . $gambar;
        move_uploaded_file($tmpname, 'img/' . $namafilebaru);
        return $namafilebaru;
    }


    function ubah($data)
    {
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        $ttl = htmlspecialchars($data["ttl"]);
        $tanggallahir = htmlspecialchars($data["tanggallahir"]);
        $idkaryawan = htmlspecialchars($data["idkaryawan"]);

        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $query = "UPDATE datakaryawan SET
                    nama = '$nama',
                    email = '$email',
                    nohp = '$nohp',
                    ttl = '$ttl',
                    tanggallahir = '$tanggallahir',
                    idkaryawan = '$idkaryawan',
                    gambar = '$gambar'
                    WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;
        mysqli_query($conn, "DELETE FROM datakaryawan WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    ?>