<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Type some info">
      <meta name="author" content="Type name">
      <title>{{ config('app.name') }}</title>
      <meta name="google-signin-client_id" content="572750383529-8ujv1oagblneqh0jdt4tk0qtcpmu450k.apps.googleusercontent.com">
      <link href="{{ url('/assets/') }}/css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css" />
      <link href="{{ url('/assets/') }}/css/ui.css?v=2.0" rel="stylesheet" type="text/css" />
      <link href="{{ url('/assets/') }}/css/responsive.css?v=2.0" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{ url('/') }}/assets/css/fontawesome-free/css/all.min.css">
      <style>
         .bg-2get {
            background-color: #ff7901;
            color: white;
         }
         .bg-2get:hover {
            color: white !important;
         }
         #app-content {
            min-height: 75vh;
         }
      </style>
   </head>
   <body class="bg-light">
      @include('header')


      <div id="app-content">
         @yield('content')
      </div>
      
      <footer class="section-footer bg-2get footer-dark">
         <div class="container">
            <section class="footer-main padding-y">
               <div class="row">
                  <aside class="col-12 col-sm-12 col-lg-3">
                     <article class="me-lg-4">
                        <img src="{{ url('/assets/') }}/images/logo-white.png" class="logo-footer">
                        <p class="mt-3"> © 2018- 2021 Templatemount. <br> All rights reserved. </p>
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
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      @yield('javascript')
   </body>
</html>