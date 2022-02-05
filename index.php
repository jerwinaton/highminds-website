<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/highminds-logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css" />
  <script src="jquery/jquery3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/showcase.css" />
  <title>HGHMNDS Clothing</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="navbar-container">
        <a href="#"><img src="images/highminds-logo.png" alt="highminds-logoPNG" />HGHMNDS</a>
        <a href="https://shopee.ph/hghmndsonline?smtt=0.0.9" target="_blank">Shopee Link</a>
        <a href="https://www.lazada.com.ph/shop/hghmnds-online?tab=promotion&path=promotion-32090-0.htm&spm=a2o4l.pdp.seller.1.2bf54fda22QOC2&itemId=431102837&channelSource=pdp" target="_blank">Lazada Link</a>
      </div>
    </nav>
    <script>
      $(document).ready(() => {
        // set navbar bg to transparent on load
        $(".navbar").css("background", "transparent");

        // change navbar bg when scrolling
        $(window).scroll(() => {
          var scroll = $(window).scrollTop();
          if (scroll > 300) {
            $(".navbar").css("background", "var(--dark-gradient)");
          } else {
            $(".navbar").css("background", "transparent");
          }
        })
      })
    </script>
  </header>
  <!-- video background -->
  <video autoplay muted loop poster="assets/images/highminds-poster.png" id="bg-video" src="assets/videos/collection-main-video-hd.mp4"></video>
  <!-- transparent black overlay -->
  <div class="overlay"></div>

  <!-- showcase -->
  <section class="showcase d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-center">HIGH MINDS CLOTHING</h1>
    <p class="text-center">Educate Elevate</p>
    <a id="gotoCollectionsbtn" href="#collectionsSection">Collections</a>
  </section>

  <!-- welcome -->
  <section class="whoWeAre">
    <div class="container-md">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center align-items-md-start">
          <h1>Who we are</h1>
          <p>HGHMNDS CLOTHING is an independent PH streetwear brand that aims to uplift and inspire the masses. Highminds Clothing was established on 2011 by <a class="brown-link" target="_blank" href="https://web.facebook.com/OMARBALIWPO">Omar Baliw</a>, an Underground HipHop artist in the Manila, Philippines. Since then, Highminds Clothing became successful and has <a class="brown-link" href="#shops">3 main shops</a> and numerous resellers all over the Philippines.</p>
        </div>
        <div class="col-8 col-md-6 d-flex flex-column justify-content-center align-items-center">
          <img src="assets/images/omar.jpg" alt="omar baliw" id="whoWeAreImg">
        </div>
      </div>
    </div>
  </section>
  <!-- inspiration of products -->
  <section class="inspiration">
    <div class="container-md">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 order-1 order-md-2 d-flex flex-column justify-content-center align-items-center align-items-md-start">
          <h1>Our Products</h1>
          <p>Our products were inspired from the HipHop Fashion <i>(Big, oversized clothes)</i>. Designed to make you comfortable and look cool at the same time.</p>
        </div>
        <div class="col-8 col-md-6 order-2 order-md-1 d-flex flex-column justify-content-center align-items-center">
          <img src="assets/images/hiphop-design.jpg" alt="omar baliw" id="whoWeAreImg">
        </div>
      </div>
    </div>
  </section>
  <section id="collectionsSection" class="collections">
    <div class="container-md">
      <div class="row justify-content-center">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
          <h1>Collections</h1>
        </div>
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
          <div id="collectionCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="11" aria-label="Slide 12"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="12" aria-label="Slide 13"></button>
              <button type="button" data-bs-target="#collectionCarousel" data-bs-slide-to="13" aria-label="Slide 14"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/01-own-the-throne.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?shopCollection=142086283" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=974700&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/02-beyond-greatness.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?page=0&shopCollection=139275631" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/03-knowledge-above-all.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?page=0&shopCollection=139275641" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/04-life-as-fire.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?page=0&shopCollection=135480717" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=939766&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/05-higher-desires.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?page=0&shopCollection=133352650" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=922887&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/06-dekada.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?page=0&shopCollection=129626206" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=922906&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/07-all-hits-no-misses.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-shopee-link" href="https://shopee.ph/shop/507737714/search/?page=0&shopCollection=130003305" target="_blank"><img src="assets/images/shopee-logo.png" height="50" alt="shopee logo"></a>
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=922943&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/08-mind-expansion.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=924138&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/09-alternate-realities.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=923251&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/10-freedom-or-fire.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=923264&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/11-one-with-the-sun.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=924153&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/12-the-strength-beyond-self.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=924159&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/13-signs-of-the-times.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=924158&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/14-seals-x-shadows.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-row d-md-block">
                  <a class="collections-lazada-link" href="https://www.lazada.com.ph/hghmnds-online/?spm=a2o4l.storeSpmB.0.0.2ae33bcfexo26O&q=All-Products&shop_category_ids=924157&from=wangpu&sc=KVUG" target="_blank"><img src="assets/images/lazada-logo.jpg" height="50" alt="lazada logo" style="border-radius:50%;"></a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#collectionCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#collectionCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(() => {
        $('.carousel').carousel({
          interval: 4000
        })
      });
    </script>
  </section>
</body>
<script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="js/hide-navbar-onscroll.js"></script>

</html>