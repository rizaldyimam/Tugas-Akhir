<?php
include ("../config.php");
include ("kode_kuitansi.php");

$sql = "SELECT * FROM tbl_buku";
$query = mysqli_query($conn, $sql);
$nomer = 1;





?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">TOKO BUKU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="card shadow my-4">

            <div class="card-body">
                <form action="http://localhost/TA/User/kuitansi.php" method="get">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Kode Buku</label>
                            <input type="text" class="form-control" id="inputEmail4" name="kode_buku" value="<?= $_GET['kode_buku'] ?>" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Harga Buku</label>
                            <input type="text" class="form-control" id="inputEmail4" name="harga" value="<?= $_GET['harga'] ?>" readonly>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Nama Pembali</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Nama" name="nama_pembeli">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Jumlah</label>
                        <input type="text" class="form-control col-md-3" id="inputAddress2" name="jumlah">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Metode Pembayaran</label>
                            <select id="inputState" class="form-control" name="method_bayar">
                                <option selected>Pilih</option>
                                <option>CASH</option>
                                <option>CICIL</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Bank</label>
                            <select id="inputState" class="form-control" name="bank">
                                <option selected>Pilih</option>
                                <option>BCA</option>
                                <option>MANDIRI</option>
                                <option>BRI</option>
                                <option>BNI</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                    </div>
                    <input type="hidden" name="tanggal_beli" value="<?= date('d / M / y'); ?>">
                    <input type="hidden" name="kode_kuitansi" value="<?= kode() ?>">
                    <input type="hidden" name="judul" value="<?= $_GET['judul'] ?>">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>