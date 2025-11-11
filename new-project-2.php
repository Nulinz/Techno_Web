<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Options -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>The Address Villa</title>

  <!-- CDN Style -->
  <?php include('./cdn_style.php'); ?>

</head>

<body>

  <!-- Header -->
  <?php include('./header.php') ?>

  <!-- Banner Style One Start -->
  <section class="banner-style-one">
    <div class="parallax" style="background-image: url(assets/images/pattren-3.png);"></div>
    <div class="container">
      <div class="row">
        <div class="banner-details">
          <h2>The Address Villa</h2>
          <!-- <p>our values and vaulted us to the top of our industry.</p> -->
        </div>
      </div>
    </div>
    <div class="breadcrums">
      <div class="container">
        <div class="row">
          <ul>
            <li>
              <a href="./index.php">
                <i class="fa-solid fa-house"></i>
                <p>Home</p>
              </a>
            </li>
            <li class="current">
              <p>The Address Villa</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Style One End -->
  <!-- Service-Detail-First Start -->
  <section class="gap about-first service-detail-first detail-page">
    <div class="container">

      <div class="row s-d-gallery">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <figure>
            <a data-fancybox="gallery" href="./assets/images/project/project_address.png">
              <img class="img-fluid w-100" src="./assets/images/project/project_address.png" alt="service-detail-1">
            </a>
          </figure>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <figure>
            <a data-fancybox="gallery" href="./assets/images/project/project_address_1.png">
              <img class="img-fluid w-100" src="./assets/images/project/project_address_1.png" alt="service-detail-2">
            </a>
          </figure>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <figure>
            <a data-fancybox="gallery" href="./assets/images/project/project_address_2.png">
              <img class="img-fluid w-100" src="./assets/images/project/project_address_2.png" alt="service-detail-3">
            </a>
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="who-we-are">
            <div>
              <h3>The Address Villa</h3>
              <p>We are excited to announce our collaboration with S&P Foundation on their prestigious project, "The Address" Villa in Mambakam, near Medavakkam, Chennai. As we bring our expertise and commitment to excellence to this remarkable project. We are eager to embark on this journey and create outstanding living spaces that exemplify quality and innovation.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Service-Detail-First End -->
  <!-- Footer -->
  <?php include('./footer.php'); ?>

  <button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- CDN Script -->
  <?php include('./cdn_script.php'); ?>

</body>

</html>