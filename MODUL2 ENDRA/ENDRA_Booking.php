<!DOCTYPE html>
<html lang="end">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MODUL2 ENDRA (BOOKING)</title>
    <link
      href="bootstrap-5.2.2-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css"> 
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
    <main>
        <div class="container text-center">
            <section id="Rental"></section>
            <br />
            <h1>Rent your car now!</h1>
            <br />
        </div>
        
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="corolla.png" class="card-img-top" alt="..." />
          </div>
          <div class="col-6">
            <div class="row g-3">
          </div>
          <form action="ENDRA_MyBooking.php" method="POST">
            <fieldset disabled>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" class="form-control" placeholder="ENDRA_1202204300" name="name">
            </div>
          </fieldset>
            <div class="mb-3">
              <label for="inputdate" class="form-label">Book Date</label>
              <input type="date" class="form-control" id="inputdate" name="inputdate">
            </div>
            <div class="mb-3">
              <label for="inputdate" class="form-label">Start Time</label>
              <input type="time" class="form-control" id="starttime" name="starttime">
            </div>
            <div class="mb-3">
              <label for="duration" class="form-label">Duration (Days)</label>
              <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <div class="mb-3">
              <label for="car_type" class="form-label">Car Type</label>
              <select class="form-select" id="car_type" name="car_type">
                <option selected disabled>Choose Car</option>
                <option>Corolla</option>
                <option>Raize</option>
                <option>Vios</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="phone_number" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone_number" name="phone_number">
            </div>
            <div class="my-3">
              <label class="form-label">Additional Service(s)</label>
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="health"
                />
                <label for="Health_proctection" class="form-check-label"
                  >Health Protection / RP25.000</label
                >
              </div>
              <div class="form-check">
                <input
                type="checkbox"
                  class="form-check-input"
                  id="driver"
                />
                <label for="Driver" class="form-check-label"
                  >Driver / Rp100.000</label
                >
              </div>
              <div class="form-check">
                <input
                type="checkbox"
                  class="form-check-input"
                  id="full"
                />
                <label for="Full_filled" class="form-check-label">Full FIlled / RP250.000</label>
              </div>
            </div>
            <div class="col-8">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div>
      </div>
      <br>
      <br>
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
