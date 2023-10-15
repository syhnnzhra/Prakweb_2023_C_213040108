<?php
    require 'function.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(tambah($_POST) > 0){
            echo"<script> alert('data berhasil di tambahkan');
                document.location.href = 'index.php'
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naan's Bookshelf | Create Book</title>
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
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Create Book
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                        <input type="text" name="judul_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <!-- <div class="">
                        <label for="exampleInputEmail1" class="form-label">Cover Buku</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="cover" aria-label="Upload">
                    </div> -->
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div> 
        </div>
        </div>
    </div>
    
   
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
