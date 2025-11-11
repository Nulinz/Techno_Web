<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Options -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>New Projects</title>

  <!-- CDN Style -->
  <?php include('./cdn_style.php'); ?>

</head>

<style>
  @media screen and (min-width: 990px) {
    .project-post img {
      height: 400px;
    }
  }
</style>

<body>

  <!-- Header -->
  <?php include('./header.php'); ?>

  <!-- Banner Style One Start -->
  <section class="banner-style-one">
    <div class="parallax" style="background-image: url(assets/images/pattren-3.png);"></div>
    <div class="container">
      <div class="row">
        <div class="banner-details">
          <h2>New Projects</h2>
          <p>Applying par excellence quality standards without compromising quality</p>
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
              <p>New Projects</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Style One End -->
  <!-- Our Project Two Start -->
  <section class="gap project-style-one addition">
    <div class="container">
      <div class="row project-slider">
        <div class="col-lg-6">
          <div class="project-post">
            <figure>
              <img class="w-100" src="./assets/images/project/project_aadarsh.png" alt="Our Project One Image 1">
            </figure>
            <div class="project-data">
              <h3><a href="./new-project-1.php">Aadarsh Green - Kempanahalli</a></h3>
              <!-- <p>80 Lakhs</p> -->
              <!-- <a class="project-icon" href="#">
                <i class="fa-solid fa-angles-right"></i>
              </a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="project-post">
            <figure>
              <img class="w-100" src="./assets/images/project/project_address.png" alt="Our Project One Image 2">
            </figure>
            <div class="project-data">
              <h3><a href="./new-project-2.php">The Address Villa - Chennai</a></h3>
              <!-- <p>80 Lakhs</p> -->
              <!-- <a class="project-icon" href="#">
                <i class="fa-solid fa-angles-right"></i>
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="container">
      <div class="row">
        <div class="builty-pagination">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="JavaScript:void(0)"><i class='fa-solid fa-arrow-left-long'></i></a></li>
              <li class="page-item"><a class="page-link" href="JavaScript:void(0)">01</a></li>
              <li class="page-item"><a class="page-link" href="JavaScript:void(0)">02</a></li>
              <li class="page-item"><a class="page-link" href="JavaScript:void(0)">03</a></li>
              <li class="page-item space"><a class="page-link" href="JavaScript:void(0)">..........</a></li>
              <li class="page-item"><a class="page-link" href="JavaScript:void(0)">08</a></li>
              <li class="page-item"><a class="page-link" href="JavaScript:void(0)"><i
                    class='fa-solid fa-arrow-right-long'></i> </a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div> -->

  </section>
  <!-- Our Project Two End -->

  <!-- Footer -->
  <?php include('./footer.php'); ?>

  <button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- CDN Script -->
  <?php include('./cdn_script.php'); ?>

</body>

</html>