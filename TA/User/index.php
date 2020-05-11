<?php
include ("../config.php");

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomer</th>
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th>Tahun</th>
                      <th>Stock</th>
                      <th>Harga</th>
                      <th>Kode Buku</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                    while($data = mysqli_fetch_array($query)){
                      echo "<tr>";
                      echo "<td>".$nomer."</td>";
                      echo "<td>".$data["judul"]."</td>";
                      echo "<td>".$data["penulis"]."</td>";
                      echo "<td>".$data["penerbit"]."</td>";
                      echo "<td>".$data["tahun"]."</td>";
                      echo "<td>".$data["stock"]."</td>";
                      echo "<td>".$data["harga"]."</td>";
                      echo "<td>".$data["kode_buku"]."</td>";
                      echo "<td><a href='http://localhost/TA/User/beli.php?kode_buku=".$data["kode_buku"]."&harga=".$data["harga"]."&judul=".$data["judul"]."'><button type='button' class='btn btn-primary'>Beli</button></a></td>";
                      echo "</tr>"; 
                      $nomer++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
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
