<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo isset($title) ? $title : 'Professional Ghostwriting Services for Authors | Oxford Book US';  ?></title>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
    <meta name="description" content="<?php echo isset($desc) ? $desc : 'Looking for professional book writing services? At Oxford Book US, we offer expert ghostwriting services for authors. From eBooks to business content, we turn your ideas into high-quality, professionally written works. Bring your vision to life with us!';  ?>">
    <meta name="keywords" content="Oxford Book US, Ghostwriting Services, Ghostwriting for Authors, Book Writing Services, Ghost Book Writing, Professional Author, Book Writer, Hire a Ghostwriter, Affordable Ghostwriting Services, USA Author Services, Book Authoring, Book Writer USA, Author Writing, Cheap Ghostwriter">    
    <?php include 'include/css.php'; ?>
</head>

<body>
    <header class="header">
        <div class="detail-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-bar">
                            <div>
                                <ul class="social-media-icons">
                                    <li>
                                        <a href="" class="socialicons" aria-label="facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="" class="socialicons" aria-label="instagram"> <i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="" class="socialicons" aria-label="linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="topbar-btn">
                                    <a href="tel:+1 (302) 597-7704" class="topbarbtn"><i class="fas fa-phone-alt"></i>+1 (302) 597-7704</a>
                                    <a href="mailto:info@oxfordbookus.com" class="topbarbtn"><i
                                            class="fas fa-envelope"></i>info@oxfordbookus.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3 col-lg-2 text-left">
                        <a href="/" class="logo" aria-label="logo">
                            <img src="assets/images/logo.png" alt="image" width="1" height="1">                            
                        </a>
                    </div>
                    <div class="col-lg-10 text-right">
                        <div class="menuWrap">
                            <ul class="menu">
                                <li>
                                    <a href="about">About</a>
                                </li>
                                <li class="has-child hover">
                                    <a href="javascript:;">Ghostwriting <i class="fa fa-chevron-down chev"></i></a>
                                    <div class="dropdown">
                                        <ul>
                                            <li><a href="non-fiction">Non Fiction</a></li>
                                            <li><a href="biography">Biography </a></li>
                                            <li><a href="autobiography">Autobiography</a></li>
                                            <li><a href="memoir-writing">Memoir Writing</a></li>
                                            <li><a href="novel-writing">Novel Writing</a></li>
                                            <li><a href="comic-writing">Comic Writing</a></li>
                                            <li><a href="speech-writing">Speech Writing</a></li>
                                            <li><a href="children-book-writing">Children Book
                                                    Writing</a></li>
                                            <li><a href="fitness-writing">Fitness Writing</a></li>
                                            <li><a href="cookbook-writing">CookBook Writing</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child hover-two">
                                    <a href="javascript:;">Fiction Writing <i class="fa fa-chevron-down chev"></i></a>
                                    <div class="dropdown">
                                        <ul>
                                            <li><a href="fantasy-writing">Fantasy Writing</a></li>
                                            <li><a href="action-adventure-writing">Action Adventure
                                                    Writing </a></li>
                                            <li><a href="horror-book-writing">Horror Book Writing</a>
                                            </li>
                                            <li><a href="scl-fiction-book-writing">SCI-Fiction Book
                                                    Writing</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="book-editing">Book Editing</a>
                                </li>
                                <li>
                                    <a href="book-marketing">Book Marketing</a>
                                </li>
                                <li>
                                    <a href="book-publishing">Book Publishing</a>
                                </li>
                                <li>
                                    <a href="cover-design">Cover Design</a>
                                </li>
                            </ul>
                            <ul class="menu btns">
                                <li>
                                    <a href="#" class="header-btn" title="Live Chat" target="_self"
                                        onclick="setButtonURL();">Let's Talk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>