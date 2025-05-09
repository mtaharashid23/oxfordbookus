<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Page Title ========== -->
  <?php echo("<title>$page_title</title>");?>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="<?php echo(" $meta_keywords ")?>">
  <meta name="description" content="<?php echo(" $meta_content ")?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="preload" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <link rel="stylesheet" type="text/css" href="css/custom.min.css">
  <link href="css/responsive.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="preload" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=1.0.3" rel="preload"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>

<body>
  <div class="top-bar-main new-header-set-top">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
          <ul>
            <li>
              <a href="tel:(302) 597-7704">
                <i class="fa fa-phone" aria-hidden="true"></i>(302) 597-7704 </a>
            </li>
            <li>
              <a href="mailto:info@oxfordbookus.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(Tawk_API.toggle())">
                <i class="fa fa-comment" aria-hidden="true"></i>Live Chat </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="head_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo">
            <img width="100%" height="100%" alt="Oxford Book US" class="lazy" src="images/logo.png"
              data-src="images/logo.png" data-toggle="modal" data-target="#staticBackdrop1">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn">
            <a href="tel:(302) 597-7704" class="serv-cta-tel">
              <i class="fa fa-phone" aria-hidden="true"></i>(302) 597-7704 </a>
            <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1" class="serv-cta-tel">Get
              Started</a>
            <a href="javascript:;" class="serv-cta-chat chats" onclick="Tawk_API.toggle()">Live Chat</a>
          </div>
        </div>
      </div>
    </div>
  </div>