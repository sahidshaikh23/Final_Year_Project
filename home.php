<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>

<body>
  <div class="header">
    <?php
    $active = "home";
    include('head.php'); ?>

  </div>
  <?php include 'ticker.php'; ?>
  <br>
  <h1 style="text-align:center;font-size:45px;">Welcome to BloodBank & Donor Management System</h1>

  <div id="page-container" style="margin-top:45px; position: relative;min-height: 80vh;   ">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:75px;">
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image\_107317099_blooddonor976.jpg" alt="image\_107317099_blooddonor976.jpg" width="100%"
                height="500">
            </div>
            <div class="carousel-item">
              <img src="image\Blood-facts_10-illustration-graphics__canteen.png"
                alt="image\Blood-facts_10-illustration-graphics__canteen.png" width="100%" height="500">
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

        <br>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">The need for blood</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='needforblood'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">Blood Tips</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='bloodtips'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>

            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">Who you could Help</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='whoyouhelp'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>


            </div>
          </div>
        </div>

        <h2>Blood Donor Names</h2>

        <div class="row">
          <?php
          include 'conn.php';
          $sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item"><br>
                <div class="card" style="width:300px">
                  <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image"
                    style="width:100%;height:300px">
                  <div class="card-body">
                    <h3 class="card-title">
                      <?php echo $row['donor_name']; ?>
                    </h3>
                    <p class="card-text">
                      <b>Blood Group : </b> <b>
                        <?php echo $row['blood_group']; ?>
                      </b><br>
                      <b>Mobile No. : </b>
                      <?php echo $row['donor_number']; ?><br>
                      <b>Gender : </b>
                      <?php echo $row['donor_gender']; ?><br>
                      <b>Age : </b>
                      <?php echo $row['donor_age']; ?><br>
                      <b>Address : </b>
                      <?php echo $row['donor_address']; ?><br>
                    </p>

                  </div>
                </div>
              </div>
            <?php }
          } ?>
        </div>
        <br>
        <style>
          .card:hover {
            box-shadow: 0 4px 8px 0 rgba(255, 0, 0, 0.2);
            transform: translateY(-5px);
          }
        </style>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
          <div class="col-lg-6">
            <h2>BLOOD GROUPS</h2>
            <p>
              <?php
              include 'conn.php';
              $sql = $sql = "select * from pages where page_type='bloodgroups'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

              ?>
            </p>

          </div>
          <div class="col-lg-6">
            <img class="img-fluid rounded" src="image\blood_donationcover.jpeg" alt="">
          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
          <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              <?php
              include 'conn.php';
              $sql = $sql = "select * from pages where page_type='universal'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

              ?>
            </p>
          </div>


          <style>
            .btn-secondary {
              background-color: crimson;
              color: #273746;
              border: 2px solid;
              border-radius: 25px;
              transition: all 0.3s ease;
            }

            .btn-secondary:hover {
              background-color: #273746;
              color: #ffffff;
              border-color: #273746;
            }

            .col-md-3 {
              padding-left: 15px;
              margin-top: 40px;
            }
          </style>

          <div class="col-md-3">
            <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php">Become a Donor</a>
          </div>

          <div class="container cont mt-5">

            <div class="row justify-content-center">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                  <img src="image/bg.png" class="card-img-top">
                </div>
              </div>


              <style>
                .card-header {
                  background-color: crimson;
                  font-size: 20px;
                }
              </style>

              <div class="col-lg-9">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">A+</div>
                      <div class="card-body">
                        If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">A-</div>
                      <div class="card-body">
                        If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A- and O-.
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">B+</div>
                      <div class="card-body">
                        You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">B-</div>
                      <div class="card-body">
                        If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B- and
                        O-.You can give blood to B+ and AB+.
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">AB+</div>
                      <div class="card-body">
                        People with AB+ blood can receive red blood cells from any blood type. This means that demand
                        for AB+ can donate with AB only.
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">AB-</div>
                      <div class="card-body">
                        AB- patients can receive red blood cells from all negative blood types.
                        AB- can give red blood cells to both AB- and AB+ blood types.
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">O+</div>
                      <div class="card-body">
                        Blood O+ can donate to A+, B+, AB+ and O+ Blood
                        Group O can donate red blood cells to anybody. It's the universal donor.
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                    <div class="card">
                      <div class="card-header text-center">O-</div>
                      <div class="card-body">
                        O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                        People with O negative blood can only receive red cell donations from O negative donors.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php include('footer.php'); ?>
    </div>

</body>

</html>