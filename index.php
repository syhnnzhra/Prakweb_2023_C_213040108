<?php
    require 'function.php';
    $buku = query("Select * from buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naan's Bookshelf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: white;
            margin: 0; /* Menghilangkan margin default */
        }

        .sidebar {
            height: 100%;
            width: 100px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #DCC4AC;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            z-index: 3;
        }

        .sidebar a {
            text-decoration: none;
            font-size: 24px;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            margin: 10px 0;
            transition: 0.3s;
            background-color: white;
        }

        .sidebar a:hover {
            background-color: #E6DCD2;
        }

        .content {
            margin-left: 100px;
            margin-top: 60px; 
            padding: 20px;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px; 
            background-color: #fff;
            z-index: 2; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-input {
            width: 900px;
            height: 40px;
            background: #ECE6DC;
            border: none;
            border-radius: 30px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#" class="side1"><img src="img/profile.png" width="30px" height="30px" alt=""></a> 
        <a href="#" class="side2"><img src="img/favorite.png" width="30px" height="30px" alt=""></a> 
        <a href="tambah.php" class="side3"><img src="img/plus.png" width="30px" height="30px" alt=""></a> 
        <a href="#" class="side4"><img src="img/favourite.png" width="30px" height="30px" alt=""></a> 
        <a href="#" class="side5"><img src="img/logout.png" width="30px" height="30px" alt=""></a> 
    </div>
    <nav class="navbar">
        <form class="form-inline">
            <input class="form-control search-input" style="width: 900px; height: 40px; background: #ECE6DC; border-radius: 30px" type="text" placeholder="Search" aria-label="Search">
            <!-- <button class="btn search-button" style="width: 201px; height: 61px; background: #ECE6DC; border-radius: 30px" type="submit">Search</button> -->
        </form>
    </nav>
    
    <div class="content">
        <h2>My Books</h2>
        <div class="row">
            <?php foreach($buku as $b) :?>
                <div class="col-sm-3 mb-3 mb-sm-0" style="width: 15rem;">
                    <div class="card">
                        <img src="img/edit.png" class="card-img-top" alt="$b['kategori']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $b['judul_buku']?></h5>
                            <p class="card-text"><?= $b['penerbit']?></p>
                            <p class="card-text"><?= $b['kategori']?></p>
                            <p class="card-text">
                                <a href="ubah.php?id_buku=<?= $b['id_buku']?>"><img src="img/edit.png" width="30px" height="30px" alt =""></a>
                                <a href="hapus.php?id_buku=<?= $b['id_buku']?>"><img src="img/delete.png" width="30px" height="30px" alt="" onclick="return confirm('yakin?');"></a>
                                <?= $b['tahun_terbit']?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    
   
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
