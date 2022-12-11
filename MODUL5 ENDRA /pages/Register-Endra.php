<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register-Endra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <form action="../MODUL4 ENDRA/config/register.php" method = "post" enctype="multipart/form-data">
                    <h1>Register</h1>
                    <div class="mb-3">
                        <label for="email" class="form-label">
                        E-Mail
                        </label>
                        <input type="text" class="form-control" placeholder="" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">
                        Nama
                        </label>
                        <input type="text" class="form-control" placeholder="" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">
                        No Handphone
                        </label>
                        <input type="text" class="form-control" placeholder="" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">
                        Katasandi
                        </label>
                        <input type="password" class="form-control" placeholder="" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">
                        Konfirmasi Katasandi
                        </label>
                        <input type="password" class="form-control" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="regist">Daftar</button>
                    <br>
                    <a>Anda sudah punya akun?</a> <a href="pages/Login-Endra.php">Login</a>
                </form>
            </div>
            <div class="col-6">
                <img src ="../MODUL4 Endra/asset/images/corolla.png"/>
            </div>
        </div>
    </div>
  </body>
</html>
