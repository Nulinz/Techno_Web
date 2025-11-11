<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Options -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title -->
  <title>Home</title>

  <!-- CDN Style -->
  <?php include('./cdn_style.php'); ?>

</head>
<style>
  @media screen and (min-width: 990px) {
    .project-post img {
        height: 400px;
    }

    .project-style-one .project-post .project-data .project-icon {
        content: "\f101";
        width: 60px;
        height: 100%;
        position: absolute;
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: skew(-38.5deg, 0deg);
        top: 0;
        right: -16px;
        color: var(--black);
        background: var(--card-side);
    }
    
    .project-style-one .project-post .project-data h3 a {
        font-size: 18px;
        line-height: 30px;
        color: var(--black);
    }

  }
</style>

<body>

  <!-- Header -->
  <?php include('./header.php') ?>

  <!-- Featured Slider One Start -->
  <section class="featured-slider-one" style="background: grey;">
    <div class="container-fluid p-0 m-0">
      <div class="ro f-slider-one owl-carousel">
        <div class="f-slider-layer">
          <img src="./assets/images/carousel1.jpg" alt="Slider 1">
          <div class="f-slider-one-data">
            <h1>Technomerates Pvt Ltd</h1>
            <p>A conglomerate of innovation, leveraging the power of AI, IoT, and Data Science to revolutionize
              construction management. Our solutions redefine efficiency, safety, and decision-making, paving the way
              for smarter, more advanced construction processes.</p>
            <!-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal2" class="theme-btn">Start
              Consulting <i class="fa-solid fa-angles-right"></i></a> -->
            <a href="https://wa.me/917550265502" target="__blank" class="theme-btn">Start Consulting <i class="fa-solid fa-angles-right"></i></a>
          </div>
        </div>
        <div class="f-slider-layer">
          <img src="./assets/images/project/project_aadarsh.png" alt="Project Img">
          <div class="f-slider-one-data">
            <h1>Aadarsh Group's - Aadarsh Green</h1>
            <p>Technomerates is thrilled to announce Aadarsh Group's latest under-construction project, Aadarsh Green. This luxurious property is being developed in the prime location of Kempanahalli, near Yelahanka New Town.</p>
            <a href="./new-project-1.php" target="__blank" class="theme-btn">View Project <i class="fa-solid fa-angles-right"></i></a>
          </div>
        </div>
        <div class="f-slider-layer">
          <img src="./assets/images/project/project_address.png" alt="Project Img 2">
          <div class="f-slider-one-data">
            <h1>The Address Villa</h1>
            <p>We are excited to announce our collaboration with S&P Foundation on their prestigious project, "The Address" Villa in Mambakam, near Medavakkam, Chennai. As we bring our expertise and commitment to excellence to this remarkable project. We are eager to embark on this journey and create outstanding living spaces that exemplify quality and innovation.</p>
            <a href="./new-project-2.php" target="__blank" class="theme-btn">View Project <i class="fa-solid fa-angles-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Featured Slider One End -->

  <!-- Service Style One Start -->
  <section class="gap service-style-one">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
          <div class="service-data">
            <div class="svg-icon d-flex-all">
              <!-- <img class="light-icon" src="assets/images/icon-1.svg" alt="Icon"> -->
              <img class="dark-icon" src="assets/images/icon-1.png" alt="Icon">
            </div>
            <h3><a href="./service-detail-1.php">Construction Projects</a></h3>
            <p>At Technomerates Pvt. Ltd., we believe in transforming ideas into reality...</p>
            <a class="icon" href="./service-detail-1.php">
              <i class="fa-solid fa-angles-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
          <div class="service-data">
            <div class="svg-icon d-flex-all">
              <!-- <img class="light-icon" src="assets/images/icon-2.svg" alt="Icon"> -->
              <img class="dark-icon" src="assets/images/icon-2.png" alt="Icon">
            </div>
            <h3><a href="./service-detail-2.php">ONSTRU AI-Driven E-Commerce Platform</a></h3>
            <p>Onstru is an innovative, AI-powered platform designed to revolutionize...</p>
            <a class="icon" href="./service-detail-2.php">
              <i class="fa-solid fa-angles-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
          <div class="service-data">
            <div class="svg-icon d-flex-all">
              <!-- <img class="light-icon" src="assets/images/icon-3.svg" alt="Icon"> -->
              <img class="dark-icon" src="assets/images/icon-3.png" alt="Icon">
            </div>
            <h3><a href="./service-detail-3.php">AFMS - Aluminum Formwork Management System</a></h3>
            <p>Technomerates Pvt Ltd presents an advanced Formwork...</p>
            <a class="icon" href="./service-detail-3.php">
              <i class="fa-solid fa-angles-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
          <div class="service-data">
            <div class="svg-icon d-flex-all">
              <!-- <img class="light-icon" src="assets/images/icon-3.svg" alt="Icon"> -->
              <img class="dark-icon" src="assets/images/icon-4.png" alt="Icon">
            </div>
            <h3><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal1">AI-Driven ERP Solutions For Construction Projects</a></h3>
            <p>Technomerates Pvt Ltd offers a groundbreaking ERP solution...</p>
            <a class="icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal1">
              <i class="fa-solid fa-angles-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Style Two End -->

  <!-- About Style One Start -->
  <section class="gap no-top about-style-one">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-data-left">
            <figure>
              <img src="./assets/images/vision2.png" class="rounded-2" alt="About One">
            </figure>
            <figure class="about-image">
              <img src="./assets/images/vision1.png" class="rounded-2" alt="About Two">
            </figure>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-data-right">
            <span>Welcome to Our Company</span>
            <h2>Our Vision</h2>
            <div class="about-info">
              <p>
                Technomerates envisions becoming a Construction Tech conglomerate that transforms the construction and
                construction management sector to align with the new era of technology. By merging innovative
                technological solutions with traditional construction practices, we aim to set unprecedented standards
                in efficiency, innovation, and sustainability. Through our relentless pursuit of excellence and
                innovation, we seek to redefine the future of construction, propelling the industry into a dynamic and
                technology-driven era. Join us on this transformative journey as we reshape construction for the modern
                age.
              </p>
              <!-- <figure>
                <img src="assets/images/signature.png" alt="Signature">
              </figure>
              <h3>Walimes Jonnie</h3>
              <h4>Director of Constro Company</h4> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Style One End -->

  <!-- About Style Two Start -->
  <section class="gap no-top about-style-one">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-data-right">
            <span>Welcome to Our Company</span>
            <h2>Our Mission</h2>
            <div class="about-info">
              <p>
                Technomerates Pvt Ltd is dedicated to leveraging the power of technology to revolutionize the
                construction industry. Through a holistic approach that combines traditional construction expertise with
                innovative AI, IoT, and Data Analytics solutions, we aim to redefine construction and construction
                management for the modern era. Our mission is to empower construction professionals with
                state-of-the-art tools such as ONSTRU AI-powered BOTs, advanced Formwork Management systems, and
                integrated ERP solutions. By driving efficiency, sustainability, and excellence in every project, we are
                committed to shaping a future where technology seamlessly enhances every aspect of the construction
                process.
              </p>
              <!-- <figure>
                <img src="assets/images/signature.png" alt="Signature">
              </figure>
              <h3>Walimes Jonnie</h3>
              <h4>Director of Constro Company</h4> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-data-left">
            <figure>
              <img src="./assets/images/mission2.png" class="rounded-2" alt="About One">
            </figure>
            <figure class="about-image">
              <img src="./assets/images/mission1.png" class="rounded-2" alt="About Two">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Style Two End -->

  <!-- Counter Style One Start -->
  <section class="gap no-top counter-style-one">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="counter-data">
            <div class="count">
              <span class="odometer" data-count="25" data-status="yes">0</span><i>Years</i>
            </div>
            <h4>Experience</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="counter-data upper-space">
            <div class="count">
              <span class="odometer" data-count="46" data-status="yes">0</span><i>People</i>
            </div>
            <h4>Employees in team</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="counter-data">
            <div class="count">
              <span class="odometer" data-count="9" data-status="yes">0</span><i>Locations</i>
            </div>
            <h4>Sites</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Style One End -->

  <!-- Project Style One Start -->
  <section class="gap project-style-one light-bg-color">
    <div class="heading">
      <figure>
        <img src="assets/images/heading-icon.png" height="50px" alt="Heading Icon">
      </figure>
      <span>Company Projects</span>
      <h2>Projects Completed</h2>
    </div>
    <div class="container">
      <div class="row project-slider owl-carousel">
        <div class="col-lg-12">
          <div class="project-post">
            <figure>
              <img src="./assets/images/project/project_spre.png" alt="project-img-1">
            </figure>
            <div class="project-data">
              <h3><a href="./projects-completed.php">SPRE Vatrathunda - Mumbai</a></h3>
              <!-- <p>This project was successfully completed against an extremely tight programme.</p> -->
              <a class="project-icon" href="./projects-completed.php">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="project-post">
            <figure>
              <img src="./assets/images/project/project_casagrand.png" alt="project-img-2">
            </figure>
            <div class="project-data">
              <h3><a href="./projects-completed.php">Casagrand Zingo - Chennai</a></h3>
              <!-- <p>This project was successfully completed against an extremely tight programme.</p> -->
              <a class="project-icon" href="./projects-completed.php">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="project-post">
            <figure>
              <img src="./assets/images/project/project_sobha.png" alt="project-img-3">
            </figure>
            <div class="project-data">
              <h3><a href="./projects-completed.php">Sobha Developers Yard - Bangalore</a></h3>
              <!-- <p>This project was successfully completed against an extremely tight programme.</p> -->
              <a class="project-icon" href="./projects-completed.php">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="project-post">
            <figure>
              <img src="./assets/images/project/project_caparo.png" alt="project-img-4">
            </figure>
            <div class="project-data">
              <h3><a href="./projects-completed.php">Caparo Powerhouse - Chennai</a></h3>
              <!-- <p>This project was successfully completed against an extremely tight programme.</p> -->
              <a class="project-icon" href="./projects-completed.php">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Project Style One End -->

  <!-- Team Style One Start -->
  <!-- <section class="gap team-style-one">
    <div class="heading-style-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-8">
            <div class="data">
              <span>Our Skilled Team</span>
              <h2>Meet The Expert Team</h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-4">
            <div class="team-slider-nav">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="team-slider owl-carousel">
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-3">
                </figure>
              </div>
              <div class="team-info">
                <h3>Harald Gindl, MBA</h3>
                <p>Head Railway Construction</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-1">
                </figure>
              </div>
              <div class="team-info">
                <h3>Edward Jeffrey</h3>
                <p>Finance Department</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-2">
                </figure>
              </div>
              <div class="team-info">
                <h3>Nicholas Larry</h3>
                <p>Railway Manager</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-3">
                </figure>
              </div>
              <div class="team-info">
                <h3>Stephen</h3>
                <p>Creative Worker</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-1">
                </figure>
              </div>
              <div class="team-info">
                <h3>Eric Scot</h3>
                <p>Cheif Railway Construction</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-2">
                </figure>
              </div>
              <div class="team-info">
                <h3>Alexander</h3>
                <p>Head Railway Construction</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-3">
                </figure>
              </div>
              <div class="team-info">
                <h3>Jose Tyler</h3>
                <p>HR Department</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-data">
              <div class="team-image">
                <figure>
                  <img src="https://via.placeholder.com/275x430" alt="team-2">
                </figure>
              </div>
              <div class="team-info">
                <h3>Henry Vincent</h3>
                <p>Construction Manager</p>
                <div class="team-social-media">
                  <a class="fb icon" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a class="tw icon" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Team Style One End -->

  <!-- Core Features Start -->
  <section class="core-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="space">
            <div class="heading-style-2">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="data">
                      <span>Core Features</span>
                      <h2>What Makes Us Different</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <span class="num">01.</span> Innovative Construction
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Technomerates key team have post graduates from Machessutes who have contributed in
                      conceptualizing and creating cost dampening opportunities by leveraging creative and intuitive
                      techniques. Their expertise & vast experience in field of construction with post graduation from
                      Massecutes facilitated for employing unique and new construction methodologies viz. Tunnel form,
                      Designing, Manufacturing tunnel form with plywood, wall form & table form for an area of
                      2,00,000sqft to build 167,85,600sqft of formwork area.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="num">02.</span> Strategic Excellence
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Technomerates and its key team have demonstrated their strength in strategic planning, housing
                      NICMAR graduates who have been recognized for sweeping improvements in efficiency, product &
                      process development with projects valued to 1000+ crores.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="num">03.</span> Design Expertise
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Technomerates key team houses MS Structure IIT alumnus who is conversant in designing multi
                      storied & commercial structures, maven in designing precast structures with 10lakh+sqft designed
                      as of day, the maven ability to analyse the structure, facilitates in envisaging complication in
                      designs & resolve them to optimized design, the quench for technology had ended in designing
                      precast Toilet POD's, self stressing prestressing bed, formwork. The passion towards design has
                      ended up providing design solutions for cantilever deck platforms, PEB transportable toilets etc.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="shape">
            <div class="video">
              <figure>
                <img src="./assets/images/features1.jpg" alt="Core Feature Img">
              </figure>
              <!--<a class="video-play-btn" data-fancybox="" href="#">-->
              <!--  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35"-->
              <!--    height="56" viewBox="0 0 35 56">-->
              <!--    <defs>-->
              <!--      <clipPath id="clip-video_arrow">-->
              <!--        <rect width="35" height="56" />-->
              <!--      </clipPath>-->
              <!--    </defs>-->
              <!--    <g id="video_arrow" data-name="video arrow" clip-path="url(#clip-video_arrow)">-->
              <!--      <path id="Shape_1" data-name="Shape 1" d="M1362,5000.8,1327,4972V5027Z"-->
              <!--        transform="translate(-1326.998 -4971.996)" fill="rgba(0,0,0,0)" />-->
              <!--      <path id="Shape_1_-_Outline" data-name="Shape 1 - Outline"-->
              <!--        d="M1333,5015.017l19.29-14.437L1333,4984.7v30.313M1327,5027V4972l35,28.807Z"-->
              <!--        transform="translate(-1326.998 -4971.996)" />-->
              <!--    </g>-->
              <!--  </svg>-->
              <!--</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Core Features End -->

  <!-- Client Style One Start -->
  <!-- <div class="gap client-style-one">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="client-slider owl-carousel">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-1">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-2">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-3">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-4">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-5">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-1">
            <img class="w-auto m-auto" src="https://via.placeholder.com/230x40" alt="client-2">
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Client Style One End -->

  <!-- Renovation Start -->
  <section class="gap renovation py-5">
    <div class="parallax"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="reno-data">
            <h3 class="mb-3">Our Strengths</h3>
            <p style="font-size: 12px; width: 70%;">
              Executed super structure of G+10 floors - 6600sqm in 21 days - Deshuttered formwork for the slabs @ 12hrs,
              achieved pour cycle time of 24hrs with key significant technique improvements viz casting of starters of
              walls along with slabs, early deshuttering using high early strength concrete thereby increasing the
              repetition of the formwork and lower capital cost on formwork.
              Deshuttered formwork for the slabs @ 12hrs and achieved pour cycle time of 24hrs.
              Established formwork system with formwork pressure of 65kg/sqm - without intermediate tie rods for a
              column size of 1.2X1.2m.
              Hotshot in designing concrete mixes - Designed more than 600 concrete mixes out of which few includes
              usage of advanced chemical admixtures viz poly carbo oxylic ether base and mineral admixtures viz micro
              silica, fly ash.
              Having hands-on up to M60 grade Self Compacting Concrete- Whiz in optimizing the cement content in
              concrete.
              Established CLC block manufacturing unit and manufactured 30lakh bricks in a period of one year.
              Established Formwork system - Designed & built - To pour column and slab on single go - Formwork area - 9
              lakh sqft.
              Conversant in Formwork Technologies - Which includes Tunnel form, Aluminum Form work, Table form, Gang
              form, Plastic Form, Jump form. Also have designed and manufactured formwork for more than 200000sqft which
              includes Tunnel form fabrication with ply wood, Gang form and Table form to cater a requirement of 167
              lakhs sqft formwork area.
            </p>
            <!-- <div class="bbtn">'
              <figure>
                <img class="w-auto circle-layer" src="assets/images/circle-text.png" alt="Circle Text">
              </figure>
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i
                  class="fa-solid fa-arrow-up-long"></i></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Renovation End -->

  <!-- Client Review Style One Start -->
  <!-- <section class="gap client-review-style-one">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="head-review">
            <span>Testimonials</span>
            <h3>Client's Reviews</h3>
          </div>
          <div class="client-review-slider owl-carousel">
            <div class="slider-data">
              <p>To my mind, the greatest reward for any renovation project is being able to experience the
                transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a
                reality and lead to an elevated mood and heightened productivity.</p>
              <div class="bio d-flex-all justify-content-start w-100">
                <div class="icon d-flex-all">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26"
                    height="26" viewBox="0 0 26 26">
                    <defs>
                      <clipPath id="clip-Inverted">
                        <rect width="26" height="26" />
                      </clipPath>
                    </defs>
                    <g id="Inverted_" data-name="Inverted commas flaky" clip-path="url(#clip-Inverted)">
                      <path id="Path_3444" data-name="Path 3"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(14 0.964)" />
                      <path id="Path_weee4" data-name="Path 4"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(0.969 0.964)" />
                    </g>
                  </svg>
                </div>
                <div class="details w-100">
                  <h3>Marko Marlee</h3>
                  <p>Chairman, Building Corp</p>
                </div>
              </div>
            </div>
            <div class="slider-data">
              <p>To my mind, the greatest reward for any renovation project is being able to experience the
                transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a
                reality and lead to an elevated mood and heightened productivity.</p>
              <div class="bio d-flex-all justify-content-start w-100">
                <div class="icon d-flex-all">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26"
                    height="26" viewBox="0 0 26 26">
                    <defs>
                      <clipPath id="clip-Inverted_comma">
                        <rect width="26" height="26" />
                      </clipPath>
                    </defs>
                    <g id="Inver" data-name="Inverted commas flaky" clip-path="url(#clip-Inverted_comma)">
                      <path id="Path_332" data-name="Path 3"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(14 0.964)" />
                      <path id="Path_3344" data-name="Path 4"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(0.969 0.964)" />
                    </g>
                  </svg>
                </div>
                <div class="details w-100">
                  <h3>Christopher</h3>
                  <p>Social Worker</p>
                </div>
              </div>
            </div>
            <div class="slider-data">
              <p>To my mind, the greatest reward for any renovation project is being able to experience the
                transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a
                reality and lead to an elevated mood and heightened productivity.</p>
              <div class="bio d-flex-all justify-content-start w-100">
                <div class="icon d-flex-all">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26"
                    height="26" viewBox="0 0 26 26">
                    <defs>
                      <clipPath id="clip-Inve">
                        <rect width="26" height="26" />
                      </clipPath>
                    </defs>
                    <g id="Inverted_co" data-name="Inverted commas flaky" clip-path="url(#clip-Inve)">
                      <path id="Path_35555" data-name="Path 3"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(14 0.964)" />
                      <path id="Path_4545454" data-name="Path 4"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(0.969 0.964)" />
                    </g>
                  </svg>
                </div>
                <div class="details w-100">
                  <h3>Donald Paul</h3>
                  <p>Constructor</p>
                </div>
              </div>
            </div>
            <div class="slider-data">
              <p>To my mind, the greatest reward for any renovation project is being able to experience the
                transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a
                reality and lead to an elevated mood and heightened productivity.</p>
              <div class="bio d-flex-all justify-content-start w-100">
                <div class="icon d-flex-all">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26"
                    height="26" viewBox="0 0 26 26">
                    <defs>
                      <clipPath id="clip-Inverted_coadsadad">
                        <rect width="26" height="26" />
                      </clipPath>
                    </defs>
                    <g id="Inverte" data-name="Inverted commas flaky" clip-path="url(#clip-Inverted_coadsadad)">
                      <path id="Path_3fewrrw" data-name="Path 3"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(14 0.964)" />
                      <path id="Path_werwer4" data-name="Path 4"
                        d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z"
                        transform="translate(0.969 0.964)" />
                    </g>
                  </svg>
                </div>
                <div class="details w-100">
                  <h3>Kevin Samuel</h3>
                  <p>Creative Head</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <figure>
            <img src="https://via.placeholder.com/620x630" alt="Client Images">
          </figure>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Client Review Style One End -->

  <!-- Blog Style One Start -->
  <!-- <section class="gap no-top blog-style-one">
    <div class="heading">
      <figure>
        <img src="assets/images/heading-icon.png" alt="heading-icon">
      </figure>
      <span>Let us Help Guide</span>
      <h2>Recent Articles</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="blog-post">
            <div class="blog-image">
              <figure>
                <img src="https://via.placeholder.com/415x270" alt="blog-img-1">
              </figure>
              <a href="blog-detail.html">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
            <div class="blog-data">
              <span class="blog-date">January 9, 2022</span>
              <h2>
                <a href="blog-detail.html">Differently to build bigger and better</a>
              </h2>
              <div class="blog-author d-flex-all justify-content-start">
                <div class="author-img">
                  <figure>
                    <img src="https://via.placeholder.com/60x60" alt="Blog Author Img">
                  </figure>
                </div>
                <div class="details">
                  <h3> <span>by</span> Jakki James</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="blog-post">
            <div class="blog-image">
              <figure>
                <img src="https://via.placeholder.com/415x270" alt="blog-img-2">
              </figure>
              <a href="blog-detail.html">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
            <div class="blog-data">
              <span class="blog-date">January 9, 2022</span>
              <h2>
                <a href="blog-detail.html">Seven Mistakes To Avoid During Construction</a>
              </h2>
              <div class="blog-author d-flex-all justify-content-start">
                <div class="author-img">
                  <figure>
                    <img src="https://via.placeholder.com/60x60" alt="Blog Author Img">
                  </figure>
                </div>
                <div class="details">
                  <h3> <span>by</span> Jakki James</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="blog-post">
            <div class="blog-image">
              <figure>
                <img src="https://via.placeholder.com/415x270" alt="blog-img-3">
              </figure>
              <a href="blog-detail.html">
                <i class="fa-solid fa-angles-right"></i>
              </a>
            </div>
            <div class="blog-data">
              <span class="blog-date">January 9, 2022</span>
              <h2>
                <a href="blog-detail.html">Build Climate Change-Resilient Infrastructure</a>
              </h2>
              <div class="blog-author d-flex-all justify-content-start">
                <div class="author-img">
                  <figure>
                    <img src="https://via.placeholder.com/60x60" alt="Blog Author Img 1">
                  </figure>
                </div>
                <div class="details">
                  <h3> <span>by</span> Jakki James</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="common-btn">
        <a href="our-blog-1.html" class="theme-btn">View All Posts <i class="fa-solid fa-angles-right"></i></a>
      </div>
    </div>
  </section> -->
  <!-- Blog Style One End -->

  <!-- Footer -->
  <?php include('./footer.php'); ?>

  <!-- Scroll to Top Button -->
  <button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- Modal1 -->
  <div class="modal fade popups est-popup" id="modal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-dark">
          <h3 class="text-center text-uppercase bg-dark text-white">Our Products</h3>
          <div class="estimated-price popup mt-4">
            <div class="est-form row bg-dark">
              <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <a href="./service-detail-4.php"><button class="theme-btn">ERP <i class="fa-solid fa-angles-right"></i></button></a>
              </div>
              <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <a href="https://onstru.com/DLR/"><button class="theme-btn">DLR <i class="fa-solid fa-angles-right"></i></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal2 -->
  <div class="modal fade popups conslt-popup" id="modal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="contact-form-one popup">
            <div class="c-form-2">
              <h3>Start Consulting</h3>
              <div class="parallax" style="background-image: url(assets/images/pattren.png);"></div>
              <form>
                <div class="row g-0">
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Full Name">
                </div>
                <div class="row g-0">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                </div>
                <div class="row g-0">
                  <input type="number" class="form-control" id="exampleInputPassword1" min="1000000000" max="9999999999" oninput="validate_contact(this)" placeholder="Phone No">
                </div>
                <div class="row g-0">
                  <select id="inputState-21" class="form-control">
                    <option selected>Subject</option>
                    <option>Subject 1</option>
                    <option>Subject 2</option>
                    <option>Subject 3</option>
                  </select>
                </div>
                <div class="row g-0">
                  <textarea placeholder="Question / Message?" rows="2" class="h-auto"></textarea>
                </div>
                <button type="submit" class="theme-btn">Submit Now <i class="fa-solid fa-angles-right"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CDN Script -->
  <?php include('./cdn_script.php'); ?>

</body>

<script>
  function validate_contact(input) {
    const value = input.value;

    if (value.length > 10) {
      input.value = value.slice(0, 10);
    }
  }
</script>

</html>