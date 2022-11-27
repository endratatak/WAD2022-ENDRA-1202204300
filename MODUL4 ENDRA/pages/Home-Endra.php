<?php

  include_once("./config/connector.php");
  $ambilData = mysqli_query($connect, "SELECT id_mobil FROM `showroom_endra_table`");
  $sikat = mysqli_num_rows($ambilData);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md bg-info">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-active">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <?php
                  if($jumlahData == 0){
                    echo '<a class="nav-link active" href="pages/Add-Endra.php">MyCar</a>';
                  }else {
                    echo '<a class="nav-link active" href="pages/ListCar-Endra.php">MyCar</a>';
                  }
                ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container mt-5 text-right">
        <div class="row mb-3 text-right">
          <div class="col-md-6 themed-grid-col">
            <div class="pb-3">
              <h1>Selamat Datang Di</h1>
              <h1>Show Room Endra</h1>
              <p>
                At lacus vitae nulla sagittis scelerisque nisl. Pellentesque
                duis cursus vestibulum, facilisi ac, sed faucibus.
              </p>
              <br />
              <div class="pb-3">
                <div class="text-start">
                    <?php
                    if ($jumlahData == 0) {
                        echo '<a class="btn btn-primary " href="pages/ListCar-Endra.php">MyCar</a>';
                    } else {
                        echo '<a class="btn btn-primary " href="pages/ListCar-Endra.php">MyCar</a>';
                    }
                    
                    ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 themed-grid-col">
                <img src="../MODUL3-ENDRA/asset/images/logo-ead.png" width="150px" />
              </div>
              <div class="col-md-6 themed-grid-col text-muted">
                <p>Raden Endra Wijaya_1202204300</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 themed-grid-col">
            <img src="../MODUL3-ENDRA/asset/images/corolla.png" />
          </div>
        </div>
      </div>
    </main>
    <script src="/Users/endratatak/Desktop/Kuliah/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Users/endratatak/Desktop/Kuliah/bootstrap-5.2.2-dist/popper.min.js"></script>
  </body>
</html>
