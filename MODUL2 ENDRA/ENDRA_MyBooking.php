<!DOCTYPE html>
<html lang="end">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MODUL3 ENDRA (My Booking)</title>
    <link
      href="bootstrap-5.2.2-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      .bd-placeholder-img {
        font-size: 18px;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 56px;
        }
      }

      .b-example-divider {
        height: 25px;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 0px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 24px;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 44px;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 16px;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body>
    <?php
    $name = $_POST['name'];
    $car_type = $_POST['car_type'];
    $phone_number = $_POST['phone_number'];
    $inputdate = $_POST['inputdate'];
    $duration = $_POST['duration'];
    $starttime = $_POST['starttime'];
    ?>
    <main>
        <div class="container text-center">
            <section id="Rental"></section>
            <br />
            <h1>Thank you ENDRA_1202204300 for reserving!</h1>
            <h1>Please double check your reservation details</h1>
            <br />
        </div>
    </main>
    <main>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Car Type</th>
                    <th>Phone Number</th>
                    <th>Service(s)</th>
                    <th>Total Price</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                        <?php
                            echo rand() . "\n";
                        ?>
                        </th>
                        <td>
                        <?php echo "ENDRA_1202204300"?>
                        </td>
                        <td>
                        <?php echo date ("Y-m-d H:i:s", strtotime($starttime))."\n";?>
                        </td>
                        <td>
                        <?php echo date ("Y-m-d H:i:s", strtotime($inputdate))."\n";?>
                        </td>
                        <td>
                        <?php echo $car_type?> 
                        </td>
                        <td>
                        <?php echo $phone_number?> 
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
              </table>
            </div>
        </main>
    <div class="b-example-divider"></div>
    <div class="container text-center text-muted">
      <footer>Raden Endra Wijaya (120224300) SI4405</footer>
    </div>
    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/popper.min.js"></script>
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>
  </body>
</html>
