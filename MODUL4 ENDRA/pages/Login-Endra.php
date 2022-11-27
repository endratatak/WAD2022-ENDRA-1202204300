<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login-Endra</title>
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
                <form action="" method = "post" enctype="multipart/form-data">
                    <h1>Login</h1>
                    <div class="mb-3">
                        <label for="email" class="form-label">
                        E-Mail
                        </label>
                        <input type="text" class="form-control" placeholder="" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">
                        Password
                        </label>
                        <input type="text" class="form-control" placeholder="" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember me">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                <a>Anda belum punya akun?</a> <a href="Register-Endra.php">Daftar</a>
            </div>
            <div class="col-6">
                <img src ="../asset/images/corolla.png"/>
            </div>
        </div>
    </div>
    <script src="/Users/endratatak/Desktop/Kuliah/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Users/endratatak/Desktop/Kuliah/bootstrap-5.2.2-dist/popper.min.js"></script>
  </body>
</html>
