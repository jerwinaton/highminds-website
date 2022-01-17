<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../images/highminds-logo.ico" type="image/x-icon" />
  <title>HGHMNDS Clothing | Admin</title>
  <link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/navbar.css" />
  <link rel="stylesheet" href="css/admin.css" />
  <link rel="stylesheet" href="css/cards-categories.css" />
  <link rel="stylesheet" href="css/cards-collections.css" />
  <link rel="stylesheet" href="css/cards-products.css" />
  <link rel="stylesheet" href="css/view-products-navbar.css" />
  <script src="../jquery/jquery3.6.0.min.js"></script>
  <script src="js/populate-products.js"></script>
  <script src="js/populate-categories.js"></script>
  <script src="js/populate-collections.js"></script>
  <!-- fontawesome cdn -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>
  <nav class="navbar">
    <div class="navbar-container">
      <a href="index.php"><img src="../images/highminds-logo.png" alt="highminds-logoPNG" />HGHMNDS</a>
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
            <div class="my-card-body">
              <h1>0</h1>
            </div>
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
            <div class="my-card-body">
              <h1>0</h1>
            </div>
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
            <div class="my-card-body">
              <h1>0</h1>
            </div>
            <div class="my-card-footer d-flex justify-content-between">
              View All <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of dashboard-items -->
    <!-- script to add active classes to buttons clicked -->
    <script>
      $("document").ready(() => {
        $(".dashboard-items-button").on("click", (e) => {
          $(".dashboard-items-button").removeClass("active");
          $(e.currentTarget).addClass("active");
        });
        $(".my-card-add").on("click", (e) => {
          console.log("b");
        });
      });
    </script>
  </section>
  <section class="products-navbar">
    <div class="container-md">
      <div class="view-products-navbar">
        <div class="sort-group-1 d-flex flex-column justify-content-center">
          <label for="">Sort by:</label>
          <div>
            <button>Latest</button>
            <button>Price</button>
          </div>
        </div>
        <div class="sort-group-2 d-flex flex-row">
          <div class="d-flex flex-column justify-content-center">
            <label for="select_category">Category:</label>
            <select name="category" id="select_category">
              <option value="">All</option>
            </select>
          </div>
          <div class="d-flex flex-column justify-content-center">
            <label for="select_collections">Collections:</label>
            <select name="collections" id="select_collections">
              <option value="">All</option>
            </select>
          </div>
        </div>
        <div class="sort-add-button">
          <button>Add New</button>
        </div>
      </div>

    </div>
    <div class="outputs d-flex justify-content-center">
      <div class="row justify-content-center container-md">
        <!-- to be populated -->
      </div>
    </div>
  </section>
  <!-- end of outputs section -->
</body>
<!-- script -->
<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
<!-- script for sticky navbar -->
<script src="../js/hide-navbar-onscroll.js"></script>

</html>