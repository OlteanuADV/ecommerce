<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Type some info">
      <meta name="author" content="Type name">
      <title>{{ config('app.name') }}</title>
      <link href="{{ url('/assets/') }}/css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css" />
      <link href="{{ url('/assets/') }}/css/ui.css?v=2.0" rel="stylesheet" type="text/css" />
      <link href="{{ url('/assets/') }}/css/responsive.css?v=2.0" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
      <style>
         .bg-2get {
            background-color: #ff7901;
            color: white;
         }
         .bg-2get:hover {
            color: white !important;
         }
      </style>
   </head>
   <body class="bg-light">
      <header class="section-header">
         <section class="header-main bg-white">
            <div class="container">
               <div class="row gy-3 align-items-center">
                  <div class="col-lg-2 col-sm-4 col-4">
                     <a href="{{ url('/') }}" class="navbar-brand">
                     <img class="logo" height="40" src="https://2get.ro/userfiles/templates/starter/assets/img/logo.png">
                     </a>
                  </div>
                  <div class="order-lg-last col-lg-3 col-sm-8 col-8">
                     <div class="float-end">
                        <a href="#" class="btn btn-light"> 
                        <i class="fa fa-user"></i>  <span class="ms-1 d-none d-sm-inline-block">Conecteaza-te</span> 
                        </a>
                        <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light"> 
                        <i class="fa fa-shopping-cart"></i> <span class="ms-1">Cos (0)</span> 
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 col-12">
                     <form action="#" class="">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search">
                            {{-- 
                            <select class="form-select">
                                <option value="">All type</option>
                                <option value="codex">Special</option>
                                <option value="comments">Only best</option>
                                <option value="content">Latest</option>
                            </select>
                            --}}
                            <button class="btn bg-2get">
                                <i class="fa fa-search"></i> 
                            </button>
                        </div>
                        <!-- input-group end.// -->
                     </form>
                  </div>
                  <!-- col end.// -->
               </div>
               <!-- row end.// -->
            </div>
            <!-- container end.// -->
         </section>
         <!-- header-main end.// -->
         <nav class="navbar navbar-dark bg-2get navbar-expand-lg">
            <div class="container">
               <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbar_main">
                  <ul class="navbar-nav">
                    <li class="nav-item">
						<a class="nav-link ps-0" href="javascript:$('#categories').toggleClass('d-none')"> Categorii </a>
					</li>
                  </ul>
               </div>
               <!-- collapse end.// -->
            </div>
            <!-- container end.// -->
         </nav>
         <!-- navbar end.// -->
      </header>
      <!-- section-header end.// -->
      <!-- ================ SECTION INTRO ================ -->
      <section class="section-intro padding-top-sm" id="categories">
         <div class="container">
            <main>
               <div class="row">
                  <aside class="col-lg-3">
                     <!-- ==============COMPONENT MENU LIST =============== -->
                     <div class="card p-3 mb-3">
                        <nav class="nav flex-column nav-pills"> <a class="nav-link active" aria-current="page" href="#">Electronics</a> <a class="nav-link" href="#">Clothes and wear</a> <a class="nav-link" href="#">Home interiors</a> <a class="nav-link" href="#">Computer and tech</a> <a class="nav-link" href="#">Tools, equipments</a> <a class="nav-link" href="#">Sports and outdoor</a> <a class="nav-link" href="#">Animal and pets</a> <a class="nav-link" href="#">Machinery tools</a> </nav>
                     </div>
                     <!-- ============== COMPONENT MENU LIST END .// ================= -->
                  </aside>
                  <aside class="col-lg-9">
                     <!-- ============== COMPONENT MEGAMENU =============== --> 
                     <nav class="card">
                        <div class="card-body">
                           <ul class="cols-four list-menu">
                              <li class="mb-3">
                                 <h6 class="mb-1">Apple</h6>
                                 <a href="#">iPhones</a> <a href="#">Macbooks</a> <a href="#">Scherf Ice cream</a> <a href="#">iMac</a> <a href="#">Tablets</a> 
                              </li>
                              <li class="mb-3">
                                 <h6 class="mb-1">Smarphones</h6>
                                 <a href="#">Samsung</a> <a href="#">Huawei</a> <a href="#">Xiaomi mi</a> <a href="#">Lenovo</a> <a href="#">Oneplus</a> 
                              </li>
                              <li class="mb-3">
                                 <h6 class="mb-1">Smartwatches</h6>
                                 <a href="#">Galaxy</a> <a href="#">Apple iWatch</a> <a href="#">Scherf Ice cream</a>
                              </li>
                              <li class="mb-3">
                                 <h6 class="mb-1">Cameras</h6>
                                 <a href="#">Nikon</a> <a href="#">Canon</a> <a href="#">Panasonic</a> 
                              </li>
                              <li class="mb-3">
                                 <h6 class="mb-1">Computers</h6>
                                 <a href="#">Laptops</a> <a href="#">PC computers</a> 
                              </li>
                              <li class="mb-3">
                                 <h6 class="mb-1">Gaming</h6>
                                 <a href="#">PlayStation</a> <a href="#">Xbox</a> <a href="#">Headsets</a> <a href="#">Gaming laptop</a> <a href="#">Xbox</a> <a href="#">Mouses</a> <a href="#">Keyboards</a> <a href="#">Accessories</a> 
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </aside>
               </div>
            </main>
         </div>
      </section>
      <section class="padding-top">
         <div class="container">
            <header class="section-heading">
               <h3 class="section-title">New products</h3>
            </header>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <span class="topbar"> <b class="badge bg-success"> Offer </b> </span>
                     <img src="{{ url('/assets/') }}/images/items/12.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Blue T-shirt for Men</a>
                        <small class="text-muted">Sizes: S, M, XL</small>
                        <div class="price-wrap">
                           <span class="price">$15.90</span> <del class="price-old">$20</del>
                        </div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/11.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Warm Winter Jacket</a>
                        <small class="text-muted">Sizes: S, M, XL</small>
                        <div class="price">$72.90</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/10.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Mens T-shirt Cotton Base</a>
                        <small class="text-muted">Blue, White, Black</small>
                        <div class="price">$29.98</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/9.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Men's Denim Shorts Jeans</a>
                        <small class="text-muted">Blue, White, Black</small>
                        <div class="price">$75.50</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/5.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Apple Watch Series 1 Sport Case 38mm Black</a>
                        <small class="text-muted">5GB, 10GB, 24GB</small>
                        <div class="price">$75.50</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/6.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Gaming Headset 32db Black built in mic</a>
                        <small class="text-muted">Black, Blue, Green</small>
                        <div class="price">$99.50</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/7.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Gaming Headset 32db Black built in mic</a>
                        <small class="text-muted">Sizes: S, M, XL</small>
                        <div class="price">$41.50</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <figure class="card card-product-grid">
                     <a href="#" class="img-wrap"> 
                     <img src="{{ url('/assets/') }}/images/items/8.jpg"> 
                     </a>
                     <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="title text-truncate">Slim fit T-shirt for men</a>
                        <small class="text-muted">Sizes: S, M, XL</small>
                        <div class="price">$75.50</div>
                        <!-- price-wrap.// -->
                     </figcaption>
                  </figure>
               </div>
               <!-- col end.// -->
            </div>
            <!-- row end.// -->
         </div>
         <!-- container end.// -->
      </section>
      
      <footer class="section-footer bg-2get footer-dark">
         <div class="container">
            <section class="footer-main padding-y">
               <div class="row">
                  <aside class="col-12 col-sm-12 col-lg-3">
                     <article class="me-lg-4">
                        <img src="{{ url('/assets/') }}/images/logo-white.png" class="logo-footer">
                        <p class="mt-3"> © 2018- 2021 Templatemount. <br>  All rights reserved. </p>
                     </article>
                  </aside>
                  <aside class="col-6 col-sm-4 col-lg-2">
                     <h6 class="title">Store</h6>
                     <ul class="list-menu">
                        <li> <a href="#">About us</a></li>
                        <li> <a href="#">Find store</a></li>
                        <li> <a href="#">Categories</a></li>
                        <li> <a href="#">Blogs</a></li>
                     </ul>
                  </aside>
                  <aside class="col-6 col-sm-4 col-lg-2">
                     <h6 class="title">Information</h6>
                     <ul class="list-menu">
                        <li> <a href="#">Help center</a></li>
                        <li> <a href="#">Money refund</a></li>
                        <li> <a href="#">Shipping info</a></li>
                        <li> <a href="#">Refunds</a></li>
                     </ul>
                  </aside>
                  <aside class="col-6 col-sm-4  col-lg-2">
                     <h6 class="title">Support</h6>
                     <ul class="list-menu">
                        <li> <a href="#"> Help center </a></li>
                        <li> <a href="#"> Documents </a></li>
                        <li> <a href="#"> Account restore </a></li>
                        <li> <a href="#"> My Orders </a></li>
                     </ul>
                  </aside>
                  <aside class="col-12 col-sm-12 col-lg-3">
                     <h6 class="title">Newsletter</h6>
                     <p>Stay in touch with latest updates about our products and offers </p>
                     <form class="mb-3">
                        <div class="input-group">
                           <input class="form-control" type="text" placeholder="Email">
                           <button class="btn btn-light" type="submit">
                           Join
                           </button>
                        </div>
                        <!-- input-group.// -->
                     </form>
                  </aside>
               </div>
               <!-- row.// -->
            </section>
            <!-- footer-top.// -->
            <hr class="my-0">
            <section class="footer-bottom d-flex justify-content-lg-between">
               <div>
                  <i class="fab fa-lg fa-cc-visa"></i>
                  <i class="fab fa-lg fa-cc-amex"></i>
                  <i class="fab fa-lg fa-cc-mastercard"></i>
                  <i class="fab fa-lg fa-cc-paypal"></i>
               </div>
               <nav class="dropup">
                  <button class="dropdown-toggle btn text-white d-flex align-items-center py-0" type="button" data-bs-toggle="dropdown">
                  <img src="{{ url('/assets/') }}/images/flags/flag-usa.png" class="me-2" height="20"> 
                  <span>English</span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                     <li><a class="dropdown-item" href="#">Russian</a></li>
                     <li><a class="dropdown-item" href="#">Arabic</a></li>
                     <li><a class="dropdown-item" href="#">Spanish</a></li>
                  </ul>
               </nav>
            </section>
         </div>
         <!-- container end.// -->
      </footer>
      <script src="{{ url('/assets/') }}/js/bootstrap.bundle.min.js"></script>
      <script src="{{ url('/assets/') }}/js/script.js?v=2.0"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
   </body>
</html>