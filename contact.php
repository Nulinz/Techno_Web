<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Options -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>Contact</title>

  <!-- CDN Style -->
  <?php include('./cdn_style.php'); ?>

</head>

<body>

  <!-- Header -->
  <?php include('./header.php'); ?>

  <!-- Banner Style One Start -->
  <section class="banner-style-one">
    <div class="parallax" style="background-image: url(assets/images/pattren-3.png);"></div>
    <div class="container">
      <div class="row">
        <div class="banner-details">
          <h2>Contact Us</h2>
          <p>our values and vaulted us to the top of our industry.</p>
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
              <p>Contact Us</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Style One End -->
  <!-- Contact Form 2 Start -->
  <section class="gap contact-form-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="data">
            <span>How can we help?</span>
            <h2>Quality & Passion With Contact Form</h2>
            <p>Have questions or want to chat? Fill out our contact form, and we’ll put you in touch with the right
              people.</p>
            <form action="./form.php" method="POST">
              <div class="row g-0">
                <input type="text" class="form-control" name="name" id="exampleInputText1" placeholder="Full Name" required>
              </div>
              <div class="row g-0">
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email Address" required>
              </div>
              <div class="row g-0">
                  <input type="number" class="form-control" name="contact" id="exampleContact1" min="1000000000" max="9999999999"
                    oninput="validate_contact(this)" placeholder="Contact Number" required>
                </div>
              <div class="row g-0">
                <input type="text" class="form-control" name="subject" id="exampleInputSubject1" placeholder="Subject" required>
              </div>
              <div class="row g-0">
                <textarea placeholder="Question / Message?" rows="2" name="message" required></textarea>
              </div>

              <button type="submit" name="contact_form" class="theme-btn">Send Message <i class="fa-solid fa-angles-right"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
          <div class="info">
            <ul class="contact">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79"
                  height="94" viewBox="0 0 79 94">
                  <defs>
                    <clipPath id="clip-location_Bd">
                      <rect width="79" height="94" />
                    </clipPath>
                  </defs>
                  <g id="location_Bd" data-name="location B" clip-path="url(#clip-location_B)">
                    <path id="Path_1gfhjfjytkd" data-name="Path 1"
                      d="M962.855,575.375a3,3,0,0,1-2.1-.861l-26.263-25.826c-11.03-11.993-13.791-27.653-7.492-42a38.334,38.334,0,0,1,34.959-23.117l1.346.009c15.262,0,27.868,8.452,33.722,22.609,6.152,14.878,3.046,31.554-7.912,42.485-.528.555-24.064,25.75-24.064,25.75a3,3,0,0,1-2.129.951Zm-.9-85.8A31.924,31.924,0,0,0,932.49,509.1c-5.313,12.1-2.954,25.342,6.31,35.419l23.963,23.559c15.027-16.085,20.179-21.585,22.274-23.488l-.164-.165c9.233-9.209,11.825-23.318,6.605-35.944a29.677,29.677,0,0,0-28.177-18.9Z"
                      transform="translate(-922.725 -482.15)" />
                    <path id="Path_24cr2r" data-name="Path 2d"
                      d="M15,6a9,9,0,1,0,9,9,9.01,9.01,0,0,0-9-9m0-6A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"
                      transform="translate(25 26)" />
                  </g>
                </svg>
                <div>
                  <h3>Address:</h3>
                  <p>B2, VIT Collage Opposite Kelambakkam - Vandalur Rd, Keezhakottaiyur, Chennai, TamilNadu - 600127</p>
                </div>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                  height="62" viewBox="0 0 40 62">
                  <defs>
                    <clipPath id="fsddffsdfsdfsdf">
                      <rect width="40" height="62" />
                    </clipPath>
                  </defs>
                  <g id="Mobsfddfsdile" clip-path="url(#fsddffsdfsdfsdf)">
                    <path id="Pafdth_1dfhgfhgjjdfhgddffgdfgdfgdfgdfgd" data-name="Path 1"
                      d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z"
                      transform="translate(1 1)" />
                    <path id="Padfth_2" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z"
                      transform="translate(14 48)" />
                  </g>
                </svg>
                <div>
                  <h3>Telephone:</h3>
                  <p>+91 ​​89880 79880</p>
                </div>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="102"
                  height="93" viewBox="0 0 102 93">
                  <defs>
                    <clipPath id="clip-Emaidl_Bhf">
                      <rect width="102" height="93" />
                    </clipPath>
                  </defs>
                  <g id="Emaidfgsdl_B" data-name="Email B" clip-path="url(#clip-Email_Bsdfhf)">
                    <path id="Pathsdf_1" data-name="Path 1"
                      d="M969.85,550.4,927.766,528.2l2.8-5.307,39.229,20.7,37.712-20.677,2.885,5.261Z"
                      transform="translate(-918 -492)" />
                    <path id="Path_2dfsdsffgs" data-name="Path 2"
                      d="M969.562,494.385l48.391,25.361,0,1.818c-.023,17.272-.043,42.814-.012,47.124l.012.024v.709c0,5.426-1.516,9.425-4.508,11.885a10.4,10.4,0,0,1-6.575,2.344l-75.5-.016c-3.557.071-5.965-.931-7.717-2.752-2.4-2.5-3.517-6.391-3.317-11.577l.065-1.194c.116-5.315.029-29.954-.067-46.535l-.011-1.842Zm42.386,28.988-42.411-22.227-43.2,22.238c.189,32.939.239,42.8-.143,46.148l.13.005c-.168,4.351.8,6.309,1.645,7.185a3.342,3.342,0,0,0,2.458.984l76.043-.071a4.65,4.65,0,0,0,3.16-.963c1.517-1.248,2.319-3.754,2.319-7.25h.09C1011.893,566.689,1011.9,557.566,1011.947,523.373Z"
                      transform="translate(-918 -492)" />
                  </g>
                </svg>
                <div>
                  <h3>Email:</h3>
                  <p>sales@technomerates.com</p>
                </div>
              </li>
            </ul>
            <ul class="social-medias">
              <li>
                <a class="fb" href="javascript:void(0)">
                  <p>Facebook</p>
                  <i class="fa-brands fa-facebook"></i>
                </a>

              </li>
              <li>
                <a class="tw" href="javascript:void(0)">
                  <p>Twitter</p>
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li>
                <a class="lk" href="javascript:void(0)">
                  <p>LinkedIn</p>
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Form 2 End -->

  <!-- Contact Faqs Start -->
  <!-- <section class="contact-faqs">
    <div class="heading">
      <figure>
        <img src="assets/images/heading-icon.png" alt="Heading Icon">
      </figure>
      <span>Frequently asked question</span>
      <h2>Finding Solutions For Your Dream House</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="acc2">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-Two">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-Two" aria-expanded="false" aria-controls="collapse-Two">
                    Occupational Health Risk Management?
                  </button>
                </h2>
                <div id="collapse-Two" class="accordion-collapse collapse" aria-labelledby="heading-Two"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Commercial management in construction ensures the planning, execution, and coordination of a
                    construction project from the start to finish. These are often for specific projects such as
                    building or renovation projects that are sold or leased.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-One">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-One" aria-expanded="true" aria-controls="collapse-One">
                    What is commercial management in construction?
                  </button>
                </h2>
                <div id="collapse-One" class="accordion-collapse collapse show" aria-labelledby="heading-One"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Commercial management in construction ensures the planning, execution, and coordination of a
                    construction project from the start to finish. These are often for specific projects such as
                    building or renovation projects that are sold or leased.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-Three">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-Three" aria-expanded="false" aria-controls="collapse-Three">
                    Start a construction management?
                  </button>
                </h2>
                <div id="collapse-Three" class="accordion-collapse collapse" aria-labelledby="heading-Three"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Commercial management in construction ensures the planning, execution, and coordination of a
                    construction project from the start to finish. These are often for specific projects such as
                    building or renovation projects that are sold or leased.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-Four">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-Four" aria-expanded="false" aria-controls="collapse-Four">
                    Measure quality in construction projects?
                  </button>
                </h2>
                <div id="collapse-Four" class="accordion-collapse collapse" aria-labelledby="heading-Four"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Commercial management in construction ensures the planning, execution, and coordination of a
                    construction project from the start to finish. These are often for specific projects such as
                    building or renovation projects that are sold or leased.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-Five">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-Five" aria-expanded="false" aria-controls="collapse-Five">
                    Prepare a construction project schedule?
                  </button>
                </h2>
                <div id="collapse-Five" class="accordion-collapse collapse" aria-labelledby="heading-Five"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Commercial management in construction ensures the planning, execution, and coordination of a
                    construction project from the start to finish. These are often for specific projects such as
                    building or renovation projects that are sold or leased.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Contact Faqs End -->
  <!-- Contact Map Start -->
  <!-- <div class="contact-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14143117.941545919!2d60.32337114882688!3d30.068124090484673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1655124094484!5m2!1sen!2s"
      width="600" height="760" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> -->

  <div style="overflow:hidden;max-width:100%;width:100%;height:760px;">
    <div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe
        style="height:100%;width:100%;border:0;" frameborder="0"
        src="https://www.google.com/maps/embed/v1/place?q=B2,+VIT+Collage+Opposite+Kelambakkam+-+Vandalur+Rd,+Keezhakottaiyur,+Chennai,+TamilNadu+-+600127&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div><a class="google-maps-html" rel="nofollow" href="https://www.bootstrapskins.com/themes"
      id="enable-map-data">premium bootstrap themes</a>
    <style>
      #google-maps-canvas img {
        max-height: none;
        max-width: none !important;
        background: none !important;
      }
    </style>
  </div>
  <!-- Contact Map End -->

  <!-- Footer Style One Start -->
  <?php include('./footer.php'); ?>

  <button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

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