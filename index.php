<?php
include 'Mahasiswa.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-group{
            display: flex;
            align-items: center;
            padding: 5px 0;
        }
        .form-group label{
            width: 150px;
            font-weight: 600;
        }
        button{
            width: 200px;
            padding: 5px 10px;
            background-color: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color:rgb(80, 129, 202);
        }
    </style>
    <title>Data Mahasiswa</title>
</head>
<body style="font-family:arial, sans-serif">
    <h1>Form Data Mahasiswa</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="nim">NIM    :</label>
            <input type="text" style="padding: 5px;" name="nim" id="nim" placeholder="NIM" required>
        </div>
        <br>
        <div class="form-group">
            <label for="name">Nama  :</label>
            <input type="text" style="padding: 5px;" name="name" id="name" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label for="name">Program Studi  :</label>
            <input type="text" style="padding: 5px;" name="programStudi" id="programStudi" placeholder="Program Studi" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mahasiswa = new Mahasiswa();
            $mahasiswa->setMhs($_POST['nim'], $_POST['name'], $_POST['programStudi']);

            echo "<h3>Data Mahasiswa</h3>";
            $data = $mahasiswa->getMhs();
            echo "<div style='border: 1px solid #ddd; padding: 10px; border-radius: 5px; max-width: 400px;'>";
            echo "NIM: " . $data['nim'] . "<br>";
            echo "Nama: " . $data['name'] . "<br>";
            echo "Program Studi: " . $data['programStudi'] . "<br>";
            echo "</div>";
        }
    ?>
</body>
</html>