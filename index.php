<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan produk</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <img src="profile.png" alt="profile">
            <div class="php">
                <?php
                    echo "Nama  : ". $_GET['nama']. "<br />";
                    echo "Alamat email  : ". $_GET['email']. "<br />";
                    echo "NIM   : ". $_GET['nim']. "<br />";
                ?>
            </div>
        </div>
    </div>
</body>
</html>