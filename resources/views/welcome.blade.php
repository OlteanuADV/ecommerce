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
      @include('header')



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