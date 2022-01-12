<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../images/highminds-logo.ico"
      type="image/x-icon"
    />
    <title>HGHMNDS Clothing | Login</title>
    <link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <script src="../jquery/jquery3.6.0.min.js"></script>
    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <nav class="navbar">
      <div class="navbar-container">
        <a href="index.php"
          ><img
            src="../images/highminds-logo.png"
            alt="highminds-logoPNG"
          />HGHMNDS</a
        >
        <a href="index.php">Dashboard</a>
        <a href="">Products</a>
      </div>
    </nav>
    <section class="dashboard d-flex justify-content-center">
      <div class="dashboard-items">
        <div class="row">
          <div class="my-card-container col-4 d-flex align-items-center">
            <button class="my-card-add">Add <i class="fas fa-plus"></i></button>
            <div class="my-card dashboard-items-button products">
              <div class="my-card-head d-flex justify-content-between">
                <h3>Products</h3>
              </div>
              <div class="my-card-body"><h1>0</h1></div>
              <div class="my-card-footer d-flex justify-content-between">
                View All <i class="fas fa-chevron-right"></i>
              </div>
            </div>
          </div>
          <div class="my-card-container col-4 d-flex justify-content-center">
            <button class="my-card-add">Add <i class="fas fa-plus"></i></button>
            <div class="my-card dashboard-items-button categories">
              <div class="my-card-head d-flex justify-content-between">
                <h3>Categories</h3>
              </div>
              <div class="my-card-body"><h1>0</h1></div>
              <div class="my-card-footer d-flex justify-content-between">
                View All <i class="fas fa-chevron-right"></i>
              </div>
            </div>
          </div>
          <div class="my-card-container col-4 d-flex justify-content-center">
            <button class="my-card-add">Add <i class="fas fa-plus"></i></button>
            <div class="my-card dashboard-items-button collections">
              <div class="my-card-head d-flex justify-content-between">
                <h3>Collections</h3>
              </div>
              <div class="my-card-body"><h1>0</h1></div>
              <div class="my-card-footer d-flex justify-content-between">
                View All <i class="fas fa-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of dashboard-items -->
      <script>
        $("document").ready(() => {
          $(".dashboard-items-button").on("click", (e) => {
            console.log("a");
          });
          $(".my-card-add").on("click", (e) => {
            console.log("b");
          });
        });
      </script>
    </section>
  </body>
  <!-- script -->
  <script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
  <!-- script for sticky navbar -->
  <script src="../js/hide-navbar-onscroll.js"></script>
</html>
