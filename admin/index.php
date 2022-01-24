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
  <link rel="stylesheet" href="css/my-modal-products.css" />
  <script src="../jquery/jquery3.6.0.min.js"></script>
  <script src="js/populate-products.js"></script>
  <script src="js/populate-categories.js"></script>
  <script src="js/populate-collections.js"></script>
  <!-- image uploader -->
  <link rel="stylesheet" href="image-uploader/src/image-uploader.css" />
  <script src="image-uploader/src/image-uploader.js"></script>
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
          <button class="my-card-add my-card-add-products">Add <i class="fas fa-plus"></i></button>
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
          <button class="my-card-add my-card-add-categories">Add <i class="fas fa-plus"></i></button>
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
          <button class="my-card-add my-card-add-collections">Add <i class="fas fa-plus"></i></button>
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
    <!-- show modal -->
    <script>
      $("document").ready(() => {
        // show products modal
        let productsModal = $("#products-modal");
        let productBtn = $(".my-card-add-products");
        productBtn.on("click", () => {
          productsModal.css("display", "block");
        })
        $(".close").on("click", (e) => {
          e.preventDefault();
          productsModal.css("display", "none");
        })
        window.addEventListener("click", (e) => {
          if (e.target == document.querySelector("#products-modal")) {
            productsModal.css("display", "none");
          }
        })
        // show categories modal
        let categoriesModal = $("#categories-modal");
        let categoryBtn = $(".my-card-add-categories");
        categoryBtn.on("click", () => {
          categoriesModal.css("display", "block");
        })
        $(".close").on("click", (e) => {
          e.preventDefault();
          categoriesModal.css("display", "none");
        })
        window.addEventListener("click", (e) => {
          if (e.target == document.querySelector("#categories-modal")) {
            categoriesModal.css("display", "none");
          }
        })
      });
    </script>
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

  <!-- products modal edit/add -->
  <div class="my-modal" id="products-modal">
    <form action="php/upload-products.php" method="POST" class="my-modal-content container" name="my-modal-products" enctype="multipart/form-data">
      <div class="my-modal-header d-flex flex-row align-items-center justify-content-between">
        <button class="hide">x</button>
        <h3 class="my-modal-header-title">Add Products</h3>
        <button class="close">x<i class="fas fa-times"></i></button>
      </div>
      <div class="row justify-content-center my-modal-body">
        <div class="col-10 col-md-6 d-flex flex-column">
          <label for="product-name">Name</label>
          <input type="text" id="product-name">
          <label for="product-price">Price (Peso)</label>
          <input type="text" id="product-price">
          <label for="product-category">Category</label>
          <select name="product-category" id="product-category">
            <option value="">All</option>
          </select>
          <label for="product-collection">Collection</label>
          <select name="product-collection" id="product-collection">
            <option value="">All</option>
          </select>
          <label for="product-description">Description</label>
          <textarea style="resize:none" id="product-description" name="product-description" rows="3"></textarea>
        </div>
        <div class="col-10 col-md-6 d-flex flex-column">
          <div class="input-field">
            <label for="photos">Photos</label>
            <div id="photos" class="input-images-1" style="padding-top: .5rem;"></div>
          </div>
          <!-- image-uploader plugin -->
          <script>
            let products_options = {
              preloaded: [],
              imagesInputName: "products_images",
              preloadedInputName: "preloaded",
              label: "Drag & Drop images here or Click to browse",
              extensions: [".jpg", ".jpeg", ".png"],
              mimes: ["image/jpeg", "image/png"],
              maxSize: 2 * 1024 * 1024,
              maxFiles: undefined,
            };
            $('.input-images-1').imageUploader(products_options);
          </script>
          <label for="product-shopee-link">Shopee Link</label>
          <input type="text" id="product-shopee-link">
          <label for="product-lazada-link">Lazada Link</label>
          <input type="text" id="product-lazada-link">

        </div>
      </div>
      <div class="row my-modal-footer d-flex flex-row justify-content-center">
        <div class="col-10 col-md-6">
          <button id="products-btn-add">Add</button>

        </div>
      </div>
    </form>
  </div>
  <!-- end of products modal edit/add -->
  <!-- categories modal -->
  <div class="my-modal" id="categories-modal">
    <form action="php/upload-categories.php" method="POST" class="my-modal-content my-modal-categories container" name="my-modal-categories" enctype="multipart/form-data">
      <div class="my-modal-header d-flex flex-row align-items-center justify-content-between">
        <button class="hide">x</button>
        <h3 class="my-modal-header-title">Add Categories</h3>
        <button class="close">x<i class="fas fa-times"></i></button>
      </div>
      <div class="row justify-content-center my-modal-body">
        <div class="col-10 col-md-6 d-flex flex-column">
          <label for="category_name">Category Name</label>
          <input type="text" id="category_name" name="category_name">
          <div class="input-field">
            <label for="category_icon">Category Icon</label>
            <div id="category_icon" class="input-images-2" style="padding-top: .5rem;"></div>
          </div>
          <!-- image-uploader plugin -->
          <!-- image-uploader plugin -->
          <script>
            let categories_options = {
              preloaded: [],
              imagesInputName: "categories_icons",
              preloadedInputName: "preloaded",
              label: "Drag & Drop images here or Click to browse",
              extensions: [".jpg", ".jpeg", ".png", '.svg'],
              mimes: ["image/jpeg", "image/png", "image/svg+xml"],
              maxSize: 2 * 1024 * 1024,
              maxFiles: 1,
            };
            $('.input-images-2').imageUploader(categories_options);
            // submit
            $(document).ready(() => {
              $('.my-modal-categories').on('submit', function(e) {
                // prevent default submission
                e.preventDefault();
                let formData = new FormData(this);
                // ajax script to upload category
                $.ajax({
                  type: 'post',
                  url: 'php/upload-categories.php',
                  data: formData,

                  beforeSend: function() {
                    $("#categories-btn-add").html("Processing...");

                    // disable button upon submitting data
                    $("#categories-btn-add").attr('disabled', true);

                    console.log("Processing...");
                  },

                  complete: function() {
                    $("#categories-btn-add").html("Add");

                    // enable button again
                    $("#categories-btn-add").removeAttr('disabled');

                  },
                  success: function(response) {
                    $(".my-modal-categories h3").html(response);
                    console.log("success");
                  },
                  cache: false,
                  contentType: false,
                  processData: false
                });

              });
            })
          </script>

        </div>
      </div>
      <div class="row my-modal-footer d-flex flex-row justify-content-center">
        <div class="col-10 col-md-6">
          <button id="categories-btn-add">Add</button>

        </div>
      </div>
    </form>
  </div>
  <!-- end of products modal edit/add -->
  <!-- end of categories modal -->
</body>
<!-- script -->
<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
<!-- script for sticky navbar -->
<script src="../js/hide-navbar-onscroll.js"></script>

</html>