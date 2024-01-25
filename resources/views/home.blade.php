<!DOCTYPE html>

<html lang="en" class="light-style  layout-navbar-fixed      " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="front-menu-theme-default-light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Book Store Online</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 + Laravel HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="oCBaBYbt5VAzsgXShwU0sqIgM150QDFLiu8pzBhI">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/materio-bootstrap-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{route('user.home')}}" />


    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/materialdesignicons.css?id=6dcb6840ed1b54e81c4279112d07827e" />

    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=844d8848f059310b5530fe2f16a8521a" class="template-customizer-core-css" />
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=52fab3455fdcaff9f4acefe519ec216b" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/css/demo.css?id=e0dd12b480da2fee900cf30c26103f98" />
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/front-page.css?id=1f69ade3f943da79b0fe4594e5022635" />
    <!-- Vendor Styles -->
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/swiper/swiper.css" />


    <!-- Page Styles -->
    <link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/front-page-landing.css" />

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/helpers.js"></script>
    <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/js/front-config.js"></script>

  
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  


<!-- Navbar: Start -->
<nav class="layout-navbar container shadow-none py-0">
  <div class="navbar navbar-expand-lg landing-navbar border-top-0 px-3 px-md-4">
    <!-- Menu logo wrapper: Start -->
    <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
      <!-- Mobile menu toggle: Start-->
      <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="tf-icons mdi mdi-menu mdi-24px align-middle"></i>
      </button>
      <!-- Mobile menu toggle: End-->
      <a href="{{route('user.home')}}" class="app-brand-link">
        <span class="app-brand-logo demo"><span style="color:#9055FD;">
  <svg width="30" height="20" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3" />
  </svg>
</span>
</span>
        <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1">Book Store Online</span>
      </a>
    </div>
    <!-- Menu logo wrapper: End -->
    <!-- Menu wrapper: Start -->
    <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
      <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="tf-icons mdi mdi-close"></i>
      </button>
      <ul class="navbar-nav me-auto p-3 p-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-medium" aria-current="page" href="{{route('user.home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium" href="#">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium text-nowrap" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/front-pages/landing#landingContact">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium" href="{{route('admin.login.page')}}" target="_blank">Admin</a>
        </li>
      </ul>
    </div>
    <div class="landing-menu-overlay d-lg-none"></div>
    <!-- Menu wrapper: End -->
    <!-- Toolbar: Start -->
    <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
      <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <i class='mdi mdi-24px'></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
              <span class="align-middle"><i class='mdi mdi-weather-sunny me-2'></i>Light</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
              <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
              <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- / Style Switcher-->
      
      <!-- navbar button: Start -->
      <li>
        <a href="{{route('user.create')}}" class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4" target="_blank"></span><span class="d-none d-md-block">Register</span></a>
        <a href="{{route('user.login.page')}}" class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4" target="_blank"></span><span class="d-none d-md-block">Login</span></a>
      </li>
      <!-- navbar button: End -->
    </ul>
    <!-- Toolbar: End -->
  </div>
</nav>
<!-- Navbar: End -->

<!-- Sections:Start -->
<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Hero: Start -->
  <section id="landingHero" class="section-py landing-hero">
    <div class="container">
      <div class="hero-text-box text-center">
        <h1 class="text-primary hero-title">Discover, Dive, and Delight in the World of Words: Your Ultimate Online Bookstore Experience Awaits!</h1>
        
        <a href="#" class="btn btn-primary">Start Here</a>
      </div>
    </div>
  </section>
  <!-- Hero: End -->



<!-- Footer: Start -->
<footer class="landing-footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gx-0 gy-4 g-md-5">
        <div class="col-lg-5">
          <a href="{{route('user.home')}}" class="app-brand-link mb-4">
            <span class="app-brand-logo demo me-2"> 
                <span style="color:#9055FD;"></span>
            </span>
            <span class="app-brand-text demo footer-link fw-bold">Book Store Online</span>
          </a>
          <p class="footer-text footer-logo-description mb-4">
           
          </p>
          <form>
            <div class="d-flex mt-2 gap-3">
              <div class="form-floating form-floating-outline w-px-250">
                <input type="text" class="form-control bg-transparent" id="newsletter-1" placeholder="Your email" />
                <label for="newsletter-1">Subscribe to newsletter</label>
              </div>
              <button type="submit" class="btn btn-primary">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <ul class="list-unstyled mb-0">
            <li class="mb-3">
              <a href="#" class="footer-link">About Us</a>
            </li>
            <li class="mb-3">
              <a href="#" class="footer-link">Books</a>
            </li>
            <li class="mb-3">
              <a href="#" class="footer-link">Contact Us</a>
            </li>
            <li class="mb-3">
              <a href="{{route('admin.login.page')}}" class="footer-link">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom py-3">
    <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-text">©
          <script>
          document.write(new Date().getFullYear());

          </script>
          , Made with <i class="tf-icons mdi mdi-heart text-danger"></i> by
        </span>
        <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium footer-theme-link">Book Store Online</a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer: End -->
  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/dropdown-hover.js"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/mega-dropdown.js"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/popper/popper.js?id=baf82d96b7771efbcc05c3b77135d24c"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/bootstrap.js?id=4b1a450d7bd34439656711e022110b65"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/node-waves/node-waves.js?id=4fae469a3ded69fb59fce3dcc14cd638"></script>

<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/nouislider/nouislider.js"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/swiper/swiper.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/js/front-main.js?id=062f9c035d541a22f0380fb15bad91fc"></script>
<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/js/front-page-landing.js"></script>
<!-- END: Page JS-->

</body>

</html>