<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <title>URFWS</title>

    <?php include('./cdn_style.php'); ?>
</head>

<body>

    <!-- Preloader Start -->
    <?php include('./loader.php'); ?>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include('./navbar.php'); ?>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Page not found</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">404 error page</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- error Page start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-page-image wow fadeInUp">
                        <img src="images/404-error-img.png" alt="">
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">Oops! page <span>not found</span></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">We searched everywhere but couldn't find what
                                you're looking for. Let's find a better place for you to go.</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.75s" href="./"><span>back to
                                    home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error Page end -->

    <!-- Footer Start -->
    <?php include('./footer.php'); ?>
    <!-- Footer End -->

    <?php include('./cdn_script.php'); ?>
</body>

</html>