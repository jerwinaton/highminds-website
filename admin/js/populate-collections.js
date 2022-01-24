$(document).ready(() => {
  // sample data
  const collections = [
    {
      name: "Zoro",
      total_products: 10,
      image: "collection.jpg",
    },
    {
      name: "Malo",
      total_products: 50,
      image: "collection.jpg",
    },
    {
      name: "Zimo",
      total_products: 40,
      image: "collection.jpg",
    },
    {
      name: "Solo",
      total_products: 70,
      image: "collection.jpg",
    },
    {
      name: "Hades",
      total_products: 70,
      image: "collection.jpg",
    },
    {
      name: "Eagle",
      total_products: 19,
      image: "collection.jpg",
    },
  ];

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
            <div class="col-12 my-5 col-md-6 my-card-collections-container">
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
      $(e.currentTarget).css("top", "-5px");
    });
    // hide action buttons
    $(".my-card-collections-container").on("mouseleave", (e) => {
      $(e.currentTarget).find(".collections-actions").css("right", "-120px");
      $(e.currentTarget).css("top", "0px");
    });
  });
});
