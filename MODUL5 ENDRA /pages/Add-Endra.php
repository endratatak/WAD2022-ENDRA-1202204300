<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Car</title>
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
                            if($jumlahData == 0){
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
        <div class="container mt-5 text-right">
        <h1>Tambah Mobil</h1>
        <p class="text-muted">Tambah Mobil Baru Anda Ke List Show Room</p>
        </div>
        <div class="container mt-5" style="width : 500%">
            <form action="../config/insert.php" method = "post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="namamobil" class="form-label">
                    Nama Mobil
                    </label>
                    <input type="text" class="form-control" placeholder="Nama Mobil" name="nama_mobil">
                </div>
                <div class="mb-3">
                    <label for="namapemilik" class="form-label">
                    Nama Pemilik
                    </label>
                    <input type="text" class="form-control" placeholder="Nama Pemilik" name="pemilik_mobil">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">
                    Merk
                    </label>
                    <input type="text" class="form-control" placeholder="Merk" name="merk_mobil">
                </div>
                <div class="mb-3">
                    <label for="tanggalbeli" class="form-label">
                    Tanggal Beli
                    </label>
                    <input type="date" class="form-control" placeholder="DD-MM_YYYY" name="tanggal_beli">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">
                    Deskripsi
                    </label>
                    <textarea class="form-control" rows="3" placeholder="deskripsi" name="deskripsi">
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">
                    Foto
                    </label>
                    <input type="file" class="form-control" placeholder="Upload Gambar" name="foto_mobil">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">
                    Status Pembayaran
                    </label>
                    <label>
                        <input type="radio" name="status_pembayaran" value="L">Lunas
                        <input type="radio" name="status_pembayaran" value="BL">Belum Lunas
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </form>
        </div>
        </main>
    </body>
</html>