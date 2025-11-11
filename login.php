<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Options -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>Login</title>

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
          <h2>Login</h2>
          <p>Our values and vaulted us to the top of our industry.</p>
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
              <p>Login</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Style One End -->
  <!-- Login Register Start -->
  <section class="gap login-register">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="faqs">
            <div class="question">
              <h3>What do I need to log in?</h3>
              <p>Once you have registered you will be able to log in using your account number and your password.</p>
            </div>
            <div class="question">
              <h3>How do I sign up for paperless billing?</h3>
              <p>Simply log into your account, select the My Details tab and update Send invoices by to Email.</p>
            </div>
            <div class="question">
              <h3>Register today and you will be able to:</h3>
              <ul>
                <li><i class="fa-solid fa-chevron-right"></i> view the balance on your account</li>
                <li><i class="fa-solid fa-chevron-right"></i> make quick and secure payments using a debit or credit
                  card</li>
                <li><i class="fa-solid fa-chevron-right"></i> let us know of any changes to your billing address or
                  other details</li>
                <li><i class="fa-solid fa-chevron-right"></i> sign up for paperless billing and receive rent invoices
                  directly to your inbox</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="box login">
            <h3>Log In Your Account</h3>
            <form>
              <input type="email" name="email" placeholder="Username or email address">
              <input type="password" name="password" placeholder="Password">
              <div class="remember">
                <div class="first">
                  <input type="checkbox" name="checkbox" id="checkbox">
                  <label for="checkbox">Remember me</label>
                </div>
                <div class="second">
                  <a href="javascript:void(0)">Forgot Password?</a>
                </div>
              </div>
              <button type="submit" class="theme-btn"><i class="fa-solid fa-angles-right"></i> Login</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box register">
            <div class="parallax" style="background-image: url(assets/images/pattren.png);"></div>
            <h3>Log In Your Account</h3>
            <form>
              <input type="text" name="text" placeholder="Complete Name">
              <input type="email" name="email" placeholder="Username or email address">
              <input type="password" name="password" placeholder="Password">
              <p>Your personal data will be used to support your experience throughout this website, to manage access to
                your account, and for other purposes described in our privacy policy.</p>
              <button type="submit" class="theme-btn"><i class="fa-solid fa-angles-right"></i> Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Login Register End -->

  <!-- Footer -->
  <?php include('./footer.php'); ?>

  <button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- CDN Script -->
  <?php include('./cdn_script.php'); ?>

</body>

</html>