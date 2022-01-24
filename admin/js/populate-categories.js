$(document).ready(() => {
  // sample data
  const categories = [
    {
      name: "Shirts",
      total_products: 10,
      icon: "uploads/category_icons/",
    },
    {
      name: "Bandanas (Scarf)",
      total_products: 50,
      icon: "uploads/category_icons/",
    },
    {
      name: "Hoodies",
      total_products: 40,
      icon: "uploads/category_icons/",
    },
    {
      name: "Shorts",
      total_products: 70,
      icon: "uploads/category_icons/",
    },
    {
      name: "Caps",
      total_products: 70,
      icon: "uploads/category_icons/",
    },
    {
      name: "Bags",
      total_products: 70,
      icon: "uploads/category_icons/",
    },
    {
      name: "Sandals",
      total_products: 70,
      icon: "uploads/category_icons/",
    },
  ];

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
      $(e.currentTarget).css("top", "-5px");
    });
    // hide action buttons
    $(".my-card-category-container").on("mouseleave", (e) => {
      $(e.currentTarget).find(".category-actions").css("right", "-120px");
      $(e.currentTarget).css("top", "0px");
    });
  });
  // end of categories script
});
