<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- Meta Tags -->
    <title>Projects | Completed, Ongoing & New Construction Projects</title>
    <meta name="description"
        content="Explore Technomerates’ completed, ongoing, and new projects showcasing our technology-driven construction solutions and achievements.">
    <meta name="keywords"
        content="construction projects, technomerates projects, ongoing projects, completed projects, new projects">

    <!-- Open Graph -->
    <meta property="og:title" content="Technomerates Projects – Completed, Ongoing & New">
    <meta property="og:description"
        content="View our portfolio of completed, ongoing, and new construction projects built with advanced construction technology.">
    <meta property="og:url" content="https://technomerates.com/projects">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://technomerates.com/images/project/project-bg.webp">

    <!-- Twitter -->
    <meta name="twitter:title" content="Our Projects | Technomerates">
    <meta name="twitter:description"
        content="See how Technomerates powers construction with tech across residential, commercial & new projects.">
    <meta name="twitter:image" content="https://technomerates.com/images/project/project-bg.webp">
    <meta name="twitter:card" content="summary_large_image">

    <?php include('./cdn_style.php'); ?>
</head>
<style>
    .page-header {
        background-image: url(./images/project/project-bg.webp);
    }
</style>

<body>

    <?php
    $completed = [
        [
            "img" => "images/project/completed/project-img-1.webp",
            "title" => "SPRE Vatrathunda",
            "location" => "Mumbai"
        ],
        [
            "img" => "images/project/completed/project-img-2.webp",
            "title" => "Casagrand Zingo",
            "location" => "Chennai"
        ],
        [
            "img" => "images/project/completed/project-img-3.webp",
            "title" => "Sobha Developers Yard",
            "location" => "Bangalore"
        ],
        [
            "img" => "images/project/completed/project-img-4.webp",
            "title" => "Caparo Powerhouse",
            "location" => "Chennai"
        ],
    ];

    $ongoing = [
        [
            "img" => "images/project/ongoing/project-img-1.webp",
            "title" => "Adarsh Developers Green",
            "location" => "Bangalore"
        ],
        [
            "img" => "images/project/ongoing/project-img-2.webp",
            "title" => "Casagrand Mable",
            "location" => "Vengambakkam"
        ],
        [
            "img" => "images/project/ongoing/project-img-3.webp",
            "title" => "Subha Developers Ecostone",
            "location" => "Bangalore"
        ],
        [
            "img" => "images/project/ongoing/project-img-4.webp",
            "title" => "Foxconn Dormatory",
            "location" => "Sunguvachatram"
        ],
        [
            "img" => "images/project/ongoing/project-img-5.webp",
            "title" => "Individual VHK Apartment",
            "location" => "Chennai"
        ],
        [
            "img" => "images/project/ongoing/project-img-6.webp",
            "title" => "Urbanac Bharathia",
            "location" => "Bangalore"
        ],
        [
            "img" => "images/project/ongoing/project-img-7.webp",
            "title" => "Caparo Road Works",
            "location" => "Sunguvachatram"
        ],
        [
            "img" => "images/project/ongoing/project-img-8.webp",
            "title" => "Poweroll Factory",
            "location" => "Nagarai"
        ],
        [
            "img" => "images/project/ongoing/project-img-9.webp",
            "title" => "Caparo Drainage System",
            "location" => "Sunguvachatram"
        ],
    ];

    $new = [
        [
            "img" => "images/project/new/project-img-1.webp",
            "title" => "Aadarsh Green",
            "location" => "Kempanahalli"
        ],
        [
            "img" => "images/project/new/project-img-2.webp",
            "title" => "The Address Villa",
            "location" => "Chennai"
        ],
    ];
    ?>

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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Projects</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our projects</li>
                            </ol>
                        </nav>
                        <div class="hero-btn wow fadeInUp mt-4" data-wow-delay="0.4s">
                            <a href="./structural.php" class="btn-default btn-highlighted">Structural Projects</a>
                        </div>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            <li><a href="#" data-filter=".completed">completed</a></li>
                            <li><a href="#" data-filter=".ongoing">ongoing</a></li>
                            <li><a href="#" data-filter=".new">new</a></li>
                        </ul>
                    </div>
                    <!-- Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <!-- Completed -->
                        <?php
                        foreach ($completed as $item) {
                            ?>
                            <div class="col-md-6 project-item-box completed">
                                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="project-image">
                                        <div class="project-featured-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo $item["img"]; ?>" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h3><?php echo $item["title"]; ?></h3>
                                        <h2><?php echo $item["location"]; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <!-- Ongoing -->
                        <?php
                        foreach ($ongoing as $item) {
                            ?>
                            <div class="col-md-6 project-item-box ongoing">
                                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="project-image">
                                        <div class="project-featured-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo $item["img"]; ?>" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h3><?php echo $item["title"]; ?></h3>
                                        <h2><?php echo $item["location"]; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <!-- New -->
                        <?php
                        foreach ($new as $item) {
                            ?>
                            <div class="col-md-6 project-item-box new">
                                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="project-image">
                                        <div class="project-featured-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo $item["img"]; ?>" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h3><?php echo $item["title"]; ?></h3>
                                        <h2><?php echo $item["location"]; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->

    <!-- Footer Start -->
    <?php include('./footer.php'); ?>
    <!-- Footer End -->

    <?php include('./cdn_script.php'); ?>
</body>

</html>