<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"/>
    <link rel="stylesheet" href="assets/css/main.css?<?php echo rand(0, 999); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <title>Tangail Online School</title>
</head>

<body>
    <div class="container px-md-0 px-0 py-md-1">
      <!-- Banner -->
        <div class=" banner jumbotron jumbotron-fluid mb-1 p-0 p-md-4" style="background: linear-gradient(rgb(0 0 0 / 30%), rgb(0 0 0 / 35%)), url(assets/images/banner-2.jpg) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-7 pt-2">
                        <h1 class="banner-text"> Tangail Online School</h1>
                        <p class="lead font-solaimanlipi">আমার হাতে আমার স্কুল</p>
                    </div>
                    <div class="col-md-5 col-5 pt-2">
                        <div class="row justify-content-end mr-md-3 align-items-center h-100">
                            <a href="#" class="btn btn-sm btn-primary mr-2">বাংলা</a>
                            <a href="#" class="btn btn-sm btn-primary">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notice_ticler">
          <div class="notice_ticler_label">
            <strong>সংবাদ</strong>
          </div>
          <div class="notice_ticler_wrapper">
            <ul>
              <marquee behavior="scroll" scrollamount="5" scrolldelay="0" direction="left" onmouseover="stop();" onmouseout="start();">
                <?php for($x = 1; $x <= 10; $x++) { ?>
                  <li><i class="fa fa-circle mr-2"></i> <a href="#">বন্ধ থাকছে সব প্রাথমিক বিদ্যালয় ও কিন্ডারগার্টেন</a></li>
                <?php } ?>
              </marquee>
            </ul>
          </div>
        </div>
        <!-- Nav Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark my-1 px-0 py-0 bg-purple">
          <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="text-white navbar-nav text-center font-weight-700 text-uppercase">
                <li class="nav-item"><a class="nav-link" href="index.php">প্রচ্ছদ</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">বাণী</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">প্রশাসন</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">এডমিন প্যানেল</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">ICT4E অ্যাম্বাসেডর</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="about_us" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">প্রতিযোগিতা</a>
                    <ul class="dropdown-menu" aria-labelledby="about_us">
                      <li class="dropdown-item"><a href="single.php">বিতর্ক</a></li>
                      <li class="dropdown-item"><a href="#">কুইজ</a></li>
                      <li class="dropdown-item"><a href="#">অনলাইন টেস্ট</a></li>
                      <li class="dropdown-item"><a href="#">ফলাফল</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="gallery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">শিক্ষা সংক্রান্ত</a>
                    <ul class="dropdown-menu" aria-labelledby="gallery">
                      <li class="dropdown-item"><a href="">প্রতিষ্ঠান সমূহ</a></li>
                      <li class="dropdown-item"><a href="">শিক্ষক মন্ডলী</a></li>
                      <li class="dropdown-item"><a href="">বই বিতরণ</a></li>
                      <li class="dropdown-item"><a href="">আইসিটি ল্যাব</a></li>
                      <li class="dropdown-item"><a href="">ফলাফল</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">সংবাদ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">পাবলিক পরীক্ষার ফলাফল</a></li>
                <li class="nav-item"><a class="nav-link" href="#">যোগাযোগ</a></li>
            </ul>
          </div>
        </nav>
    </div>
    <div class="container px-md-0 py-md-1 py-1">