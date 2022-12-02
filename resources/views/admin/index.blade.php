<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


   

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
       
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
         
         
         
        </ul>
      </li><!-- End Components Nav -->

      

     

      
     



      <li class="nav-item">
        <a class="nav-link collapsed" href="tables-data.html">
          <i class="bi bi-envelope"></i>
          <span>Data Tables</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

     


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->


      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

   

          
               

               


               
    <section class="section-padding" id="section_6">
      <div class="container">
          <div class="row">
  
              <div class="col-lg-8 col-md-10 col-12 mx-auto">
                  <h2 class="mb-4 text-center">Ecrivez-nous</h2>
  
                  <form class="custom-form" role="form" action="{{route('store')}}" method="POST">
                      @csrf
                      <div class="row">
                          <div class="col-lg-4 col-md-6 col-12 my-2">
                              <label class="mb-2" for="name">Nom Complet</label>
  
                              <input type="text" name="nom_complet" id="name" class="form-control" required="">
                          </div>
  
                          <div class="col-lg-4 col-md-6 col-12 my-2">
                              <label class="mb-2" for="email">Adresse E-mail</label>
                              
                              <input type="email" name="address_mail" id="email" pattern="[^ @]*@[^ @]*" class="form-control" required="">
                          </div>
  
                          <div class="col-lg-4 col-md-6 col-12 my-2">
                              <label class="mb-2" for="subject">Comment-vous nous avez connus?</label>
  
                              <select class="form-select form-control" name="sujet" id="subject">
                                  <option selected="">Choisissez un sujet</option>
                                  <option value="web+search">Recherches sur le site Web</option>
                                  <option value="social+media">Social Media</option>
                                  <option value="others">Autres</option>
                              </select>
                          </div>
  
                          <div class="col-12 my-2">
                              <label class="mb-2" for="message">Parlons-nous de votre projet</label>
  
                              <textarea class="form-control" rows="5" id="message" name="projet"></textarea>
                          
                              <button type="submit" class="form-control mt-4" id="submit">Submit</button>
                          </div>
  
                      </div>
                  </form>
              </div>
  
          </div>
      </div>
  </section>
   
                
           

               
                 
               
          
           
         


          

         


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Smik-Services</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>