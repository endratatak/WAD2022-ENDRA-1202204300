<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ListCar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md bg-info">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-active">
              <a class="nav-link" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
              <?php
              if($jumlahData ==0){
              echo '<a class="nav-link active" href="Add-Endra.php">MyCar</a>';
              }else {
              echo '<a class="nav-link active" href="ListCar-Endra.php">MyCar</a>';
              }
              ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container px-4 text-start">
        <div class="row gx-5">
          <div class="col">
            <div class="">
            <h1 class="text-start">My Show Room</h1>
            <p class="text-start text-muted">List Show Room Endra - 1202204123</p>
            </div>
            <?php
            include('../config/connector.php');
            $getData = mysqli_query($connect,"SELECT * FROM `showroom_endra_table`");
            $jumlahData = mysqli_num_rows($getData);
            while ($dayta = mysqli_fetch_array($getData)){
            ?>
            <div class="container"> 
              <div class="card" style="width: 18rem;">
                <img src="../asset/images/<?php echo $dayta['foto_mobil'];?>" class="card-img-top" alt="mobil">    
                <div class="card-body">
                  <h5 class="card-title"><?= $dayta['nama_mobil'];?></h5>
                  <h5 class="card-title"><?= $dayta['id_mobil'];?></h5>
                  <p class="card-text"><?= $deskripsiMobil = $dayta['deskripsi'];
                  echo $deskripsiMobil;?></p>
                  <div class="row">
                    <div class="col">
                      <a href="../pages/Detail-Endra.php?id_mobil=<?php echo $dayta['id_mobil']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                    <div class="col">
                      <a href="../config/delete.php?id_mobil=<?php echo $dayta['id_mobil']; ?>" class="btn btn-danger"name="id">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>