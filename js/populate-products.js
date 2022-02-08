$(document).ready(() => {
  // sample data
  const products = [
    {
      id: 1,
      name: "UNIVERSITY BLUE",
      price: "1,300",
      image: "assets/images/1.jfif",
      category: "hoodies",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-university-blue-i2686714841-s12819950063.html?spm=a2o4l.seller.list.29.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-UNIVERSITY-BLUE-i.507737714.15738608851?sp_atk=28706adb-a497-4397-af1d-e63859e84185",
    },
    {
      id: 2,
      name: "NO DRAMA",
      price: "700",
      image: "assets/images/2.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-no-drama-i2686691597-s12819611414.html?spm=a2o4l.seller.list.25.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-NO-DRAMA-i.507737714.15038591384?sp_atk=3c2c6ff8-2727-48b9-8cea-e2a76fc2c632",
    },
    {
      id: 3,
      name: "CARRIED ABOVE BLACK",
      price: "700",
      image: "assets/images/3.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-carried-above-black-i2686725574-s12819656240.html?spm=a2o4l.seller.list.9.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-CARRIED-ABOVE-BLACK-i.507737714.14638595623?sp_atk=1d65e85d-669a-437b-ad85-7f3a67a4ece9",
    },
    {
      id: 4,
      name: "GAME ON",
      price: "700",
      image: "assets/images/4.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-game-on-i2686816166-s12819891214.html?spm=a2o4l.seller.list.11.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-GAME-ON-i.507737714.10283185473?sp_atk=b6ed34bc-4928-49a3-b721-f55ae80e93ef",
    },
    {
      id: 5,
      name: "RAT SNAKE",
      price: "700",
      image: "assets/images/5.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-rat-snake-i2686728504-s12819462912.html?spm=a2o4l.seller.list.15.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-RAT-SNAKE-i.507737714.8098092744?sp_atk=86bad4ed-50ab-45ac-9652-31fb8924afec",
    },
    {
      id: 6,
      name: "SOUND FIST",
      price: "700",
      image: "assets/images/6.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-sound-fist-i2686748473-s12819678503.html?spm=a2o4l.seller.list.7.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-SOUND-FIST-i.507737714.13770215820?sp_atk=162fd4ad-9b86-40d1-b39f-0a4c2613e08d",
    },
    {
      id: 7,
      name: "SHED LIGHT",
      price: "700",
      image: "assets/images/7.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-shed-light-i2686791275-s12819822322.html?spm=a2o4l.seller.list.19.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-SHED-LIGHT-i.507737714.15238599378?sp_atk=2e1ac420-3ab1-4bc9-95f2-bd29922f0680",
    },
    {
      id: 8,
      name: "ICE DROP PAISLEY HOODIE",
      price: "1,300",
      image: "assets/images/8.jfif",
      category: "hoodies",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-ice-drop-paisley-hoodie-i2686669937-s12819883493.html?spm=a2o4l.seller.list.33.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-ICE-DROP-PAISLEY-HOODIE-i.507737714.12970240173?sp_atk=5dbd5170-59c4-4921-84f5-198f566090bf",
    },
    {
      id: 9,
      name: "INDIGO RANCH PANTS",
      price: "1,500",
      image: "assets/images/9.jfif",
      category: "pants",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-indigo-ranch-polo-i2686758551-s12819921936.html?spm=a2o4l.seller.list.35.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-INDIGO-RANCH-PANTS-i.507737714.12770243539?sp_atk=3566cac3-2ab9-4f58-a362-c221a5b2c9e6",
    },
    {
      id: 10,
      name: "LIFELINE",
      price: "700",
      image: "assets/images/10.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-lifeline-i2686697477-s12819284988.html?spm=a2o4l.seller.list.5.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-LIFELINE-i.507737714.10783180998?sp_atk=87124d65-fe3f-43f3-a4d0-a7d657492778",
    },
    {
      id: 11,
      name: "RECORDED",
      price: "700",
      image: "assets/images/11.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-recorded-i2686730286-s12819311661.html?spm=a2o4l.seller.list.3.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-RECORDED-i.507737714.12770229827?sp_atk=5f65aede-7bf0-4753-b694-1f83f81fc464",
    },
    {
      id: 12,
      name: "ELEVATION CONTROL",
      price: "700",
      image: "assets/images/12.jfif",
      category: "t-shirts",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-elevation-control-i2686730347-s12819388946.html?spm=a2o4l.seller.list.1.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-ELEVATION-CONTROL-i.507737714.14938590558?sp_atk=0183ae41-74d5-4134-8754-36dccfd91c91",
    },
    {
      id: 13,
      name: "SUGAR FREAK MOUSE PAD",
      price: "500",
      image: "assets/images/13.jfif",
      category: "accessories",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-sugar-freak-mouse-pad-i2686850144-s12820102202.html?spm=a2o4l.seller.list.21.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-SUGAR-FREAK-MOUSE-PAD-i.507737714.14738614964?sp_atk=ae18b822-6461-4e43-8cc0-25b8ba314410",
    },
    {
      id: 14,
      name: "SCREEN TIME SLIPPERS",
      price: "500",
      image: "assets/images/14.jfif",
      category: "slippers",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-screentime-slippers-i2686832420-s12820193831.html?spm=a2o4l.seller.list.27.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-SCREENTIME-SLIPPERS-i.507737714.13470281299?sp_atk=9266499d-331f-4ede-ab2f-a685c2b2b106",
    },
    {
      id: 15,
      name: "INDIGO RANCH POLO",
      price: "1,300",
      image: "assets/images/15.jfif",
      category: "polo",
      collection: "own-the-throne",
      lazada:
        "https://www.lazada.com.ph/products/hghmnds-indigo-ranch-polo-i2686758551-s12819921936.html?spm=a2o4l.seller.list.35.2c647319sc18vY&mp=1",
      shopee:
        "https://shopee.ph/HGHMNDS-ONLINE-INDIGO-RANCH-POLO-i.507737714.13970222040?sp_atk=de92b6c7-5e52-46f5-ba45-744bbaa60ec9",
    },
  ];

  // populate products

  //container for all content
  let allContent = "";

  // sample retrieval of data and make cards
  const container = $(".latest").find(".row");
  products.forEach((result) => {
    const content = `
        <div class="col-6 col-lg-4">
        <div class="latest-pro-card my-1" >
        <div class="latest-pro-card-links">
        <button class="latestProShopee me-1"data-link=${result.shopee}>Shopee</button>
        <button class="latestProLazada ms-1" data-link=${result.lazada}>Lazada</button>
        </div>  
        <div class="latest-pro-card-img-container d-flex align-items-center justify-content-center">
            <img src="${result.image}" alt="">
          </div>
          <div class="latest-pro-card-details-container d-flex flex-column align-items-start justify-content-start">
            <h5 class="mb-2">${result.name}</h5>
            <div class="mt-3 d-flex flex-row align-items-end">
              <span class="peso-sign">&#8369;</span>
              <p class="mb-0">${result.price}</p>
            </div>
          </div>
        </div>
      </div>
            `;
    allContent += content;
  });
  container.html(allContent);

  // end of populate products
  // end of products script
});
