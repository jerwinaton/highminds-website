$(document).ready(() => {
  // sample data
  const products = [
    {
      name: "Item1as shirt tshirt",
      price: 100,
      image: "product-category1.jpg",
      category: "Tshirt",
      collection: "Zimo",
    },
    {
      name: "Item2",
      price: 500,
      image: "product-category2.jpg",
      category: "Slipper",
      collection: "Hades",
    },
    {
      name: "Item3",
      price: 400,
      image: "product-category3.jpg",
      category: "Bag",
      collection: "Zimo",
    },
    {
      name: "Item4",
      price: 700,
      image: "product-category4.jpg",
      category: "Shoe",
      collection: "Solo",
    },
    {
      name: "Item5",
      price: 700,
      image: "product-category5.jpg",
      category: "Shoe",
      collection: "Eagle",
    },
    {
      name: "Item6",
      price: 199,
      image: "product-category6.jpg",
      category: "Tshirt",
      collection: "Solo",
    },
    {
      name: "Item7",
      price: 199,
      image: "product-category1.jpg",
      category: "Tshirt",
      collection: "Eagle",
    },
    {
      name: "Item8",
      price: 199,
      image: "product-category3.jpg",
      category: "Shades",
      collection: "Malo",
    },
    {
      name: "Item9",
      price: 199,
      image: "product-category4.jpg",
      category: "Bag",
      collection: "Zoro",
    },
  ];

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
            <div class="col-5 col-lg-4 my-card-product-container my-5">
           <div class="card-wrapper">
          <div class="product-actions d-flex flex-row">
            <button class="">a<i class="fas fa-edit fa-lg"></i></button>
            <button class="">a<i class="fas fa-trash-alt fa-lg"></i></button>
          </div>
          <div class="my-card-product">
            <div class="my-card-body my-card-product-body">
            <div class="product-img-wrapper d-flex align-items-center justify-content-center">  
              <img src="${result.image}" alt="">
            </div> 
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
        </div>
          `;
        allContent += content;
      });
      container.html(allContent);
    }
    // end of populate products

    // show action buttons
    $(".card-wrapper").on("mouseover", (e) => {
      $(e.currentTarget).find(".product-actions").css("right", "0px");
      $(e.currentTarget).css("top", "-5px");
    });
    // hide action buttons
    $(".card-wrapper").on("mouseleave", (e) => {
      $(e.currentTarget).css("top", "0px");
      $(e.currentTarget).find(".product-actions").css("right", "-120px");
    });
  });
  // end of products script
});
