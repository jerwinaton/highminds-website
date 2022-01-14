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

      // sample data
      const products = [{
          name: "Item1as shirt tshirt",
          price: 100,
          image: "product-category1.jpg",
          category: "Tshirt",
          collection: "Zimo"
        },
        {
          name: "Item2",
          price: 500,
          image: "product-category2.jpg",
          category: "Slipper",
          collection: "Hades"
        },
        {
          name: "Item3",
          price: 400,
          image: "product-category3.jpg",
          category: "Bag",
          collection: "Zimo"
        },
        {
          name: "Item4",
          price: 700,
          image: "product-category4.jpg",
          category: "Shoe",
          collection: "Solo"
        },
        {
          name: "Item5",
          price: 700,
          image: "product-category5.jpg",
          category: "Shoe",
          collection: "Eagle"
        },
        {
          name: "Item6",
          price: 199,
          image: "product-category6.jpg",
          category: "Tshirt",
          collection: "Solo"
        },
        {
          name: "Item7",
          price: 199,
          image: "product-category1.jpg",
          category: "Tshirt",
          collection: "Eagle"
        },
        {
          name: "Item8",
          price: 199,
          image: "product-category3.jpg",
          category: "Shades",
          collection: "Malo"
        },
        {
          name: "Item9",
          price: 199,
          image: "product-category4.jpg",
          category: "Bag",
          collection: "Zoro"
        },
      ];

      const categories = [{
          name: "Tshirt",
          total_products: 10,
          icon: "fas fa-tshirt fa-3x"
        },
        {
          name: "Shoe",
          total_products: 50,
          icon: "fas fa-tshirt fa-3x"
        },
        {
          name: "Bag",
          total_products: 40,
          icon: "fas fa-tshirt fa-3x"
        },
        {
          name: "Slipper",
          total_products: 70,
          icon: "fas fa-tshirt fa-3x",
        },
        {
          name: "Shades",
          total_products: 70,
          icon: "fas fa-tshirt fa-3x"
        },


      ];

      const collections = [{
          name: "Zoro",
          total_products: 10,
          image: "collection.jpg"
        },
        {
          name: "Malo",
          total_products: 50,
          image: "collection.jpg"
        },
        {
          name: "Zimo",
          total_products: 40,
          image: "collection.jpg"
        },
        {
          name: "Solo",
          total_products: 70,
          image: "collection.jpg"
        },
        {
          name: "Hades",
          total_products: 70,
          image: "collection.jpg"
        },
        {
          name: "Eagle",
          total_products: 19,
          image: "collection.jpg"
        },
      ];
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

  <script>
    $(document).ready(() => {
      // products script
      // populate products
      $(".products").on("click", () => {
        // global variable , container for all content
        let allContent = "";
        // if not yet active
        if ($(".products").not("active")) {
          // sample retrieval of data and make cards
          const container = $(".outputs").find(".row");
          products.forEach((result) => {
            const content = `
            <div class="col-5 col-md-3 my-card-product-container my-5">
          <div class="product-actions d-flex flex-row">
            <button class="">a<i class="fas fa-edit fa-lg"></i></button>
            <button class="">a<i class="fas fa-trash-alt fa-lg"></i></button>
          </div>
          <div class="my-card-product">
            <div class="my-card-body my-card-product-body">
              <img src="${result.image}" alt="">
              <div class="my-card-product-details d-flex flex-column align-items-start justify-content-start">
                <h3 class="mt-2">${result.name}</h3>
                <div class="mt-3 d-flex flex-row align-items-end">
                  <span class="peso-sign">&#8369;</span>
                  <p>${result.price}</p>
                </div>

              </div>
            </div>
            <div class="my-card-footer my-card-product-footer d-flex flex-row align-items-center">
              <button>Shopee</button>
              <button>Lazada</button>
            </div>
          </div>
        </div>
          `;
            allContent += content;
          });
          container.html(allContent);
        }
        // end of populate products



        // show action buttons
        $(".my-card-product-container").on("mouseover", (e) => {
          $(e.currentTarget).find(".product-actions").css("right", "0px");
        });
        // hide action buttons
        $(".my-card-product-container").on("mouseleave", (e) => {
          $(e.currentTarget).find(".product-actions").css("right", "-120px");
        });
      });
      // end of products script

      // categories script
      // populate categories
      $(".categories").on("click", () => {
        // global variable , container for all content
        let allContent = "";
        // if not yet active
        if ($(".categories").not("active")) {
          // sample retrieval of data and make cards
          const container = $(".outputs").find(".row");
          categories.forEach((result) => {
            const content = `
          <div class="col-6 col-md-4 col-lg-3 my-card-category-container" >
            <div class="category-actions">
              <button class=""><i class="fas fa-edit fa-lg"></i></button>
              <button class=""><i class="fas fa-trash-alt fa-lg"></i></button>
            </div>
            <div class="my-card-category">
              <div class="my-card-head my-card-category-head">
                <h3>${result.name}</h3>
              </div>
              <div class="my-card-body my-card-category-body">
                <i class="${result.icon}"></i>
                <h1>${result.total_products}</h1>
              </div>
              <div class="my-card-footer my-card-category-footer d-flex flex-row justify-content-between">
                View All <i class="fas fa-chevron-right"></i>
              </div>
            </div>
            </div>
          `;
            allContent += content;
          });
          container.html(allContent);
        }
        // end of populate categories



        // show action buttons
        $(".my-card-category-container").on("mouseover", (e) => {
          $(e.currentTarget).find(".category-actions").css("right", "0px");
        });
        // hide action buttons
        $(".my-card-category-container").on("mouseleave", (e) => {
          $(e.currentTarget).find(".category-actions").css("right", "-120px");
        });
      });
      // end of categories script


      // collections script
      // populate collections
      $(".collections").on("click", () => {
        // global variable , container for all content
        let allContent = "";
        // if not yet active
        if ($(".collections").not("active")) {
          // sample retrieval of data and make cards
          const container = $(".outputs").find(".row");
          collections.forEach((result) => {
            const content = `
            <div class="col-12 col-md-6 my-card-collections-container">
          <div class="collections-actions">
            <button class=""><i class="fas fa-edit fa-lg"></i></button>
            <button class=""><i class="fas fa-trash-alt fa-lg"></i></button>
          </div>
          <div class="my-card-collections">
            <div class="my-card-head my-card-collections-head">
              <h3>${result.name}</h3>
            </div>
            <div class="my-card-body my-card-collections-body">
              <img src=${result.image} >
            </div>
            <div class="my-card-footer my-card-collections-footer d-flex flex-row justify-content-between">
              ${result.total_products} Products <span>View all <i class="fas fa-chevron-right"></i></span>
            </div>
          </div>
        </div>
          `;
            allContent += content;
          });
          container.html(allContent);
        }
        // end of populate categories



        // show action buttons
        $(".my-card-collections-container").on("mouseover", (e) => {
          $(e.currentTarget).find(".collections-actions").css("right", "0px");
        });
        // hide action buttons
        $(".my-card-collections-container").on("mouseleave", (e) => {
          $(e.currentTarget).find(".collections-actions").css("right", "-120px");
        });
      });


      // end of populate script
    });
  </script>
</body>
<!-- script -->
<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
<!-- script for sticky navbar -->
<script src="../js/hide-navbar-onscroll.js"></script>

</html>