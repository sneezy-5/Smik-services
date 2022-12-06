<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-12 me-auto mb-4">
                <h5 class="text-white mb-3">Newsletter</h5>

                <form class="custom-form subscribe-form mt-4" action ="{{route('suscriber')}}" method = "POST" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-7">                                    
                            <input type="email" name="adresse_mail" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Votre adresse e-mail" required="">
                        </div>

                        <div class="col-lg-4 col-md-4 col-5">                                  
                            <button type="submit" class="form-control" name="submit" id="subscribe">Subscribe</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-lg-2 col-12 mx-auto my-lg-0 my-4">
                <h5 class="text-white mb-3">Services</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a  class="footer-menu-link">Ressources Humaines </a></li>
                    
                    <li class="footer-menu-item"><a class="footer-menu-link">Comptabilités</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Services Informatiques</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Gestions Logistiques</a></li>

                    <li class="footer-menu-item"><a  class="footer-menu-link">Services BTP</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Marketing et Vente</a></li>

                    <li class="footer-menu-item"><a  class="footer-menu-link">Livraison  des colis et Express</a></li>
                   
                </ul>
            </div>

            <div class="col-lg-2 col-12">
                <h5 class="text-white mb-3">Localisation</h5>

                <p class="text-white mb-1">ABIDJAN II PLATEAUX PETRO IVOIRE ANGRE CITE LES MANGUIERS LGT 250, Côte d'Ivoire</p>
                <p class="text-white mb-1">Tel : (00225) 07 57 84 43 72  </p>

                <p><a href="mailto:email@company.com" class="footer-link">smik-service@smik-services.com</a><p>
            </div>

            <div class="site-footer-bottom mt-5">
                <div class="row pt-4">
                    <div class="col-lg-6 col-12">
                        <p class="copyright-text tooplate-link">Copyright © 2022 Smik-Service Co., Ltd.
                    </div>

                    <div class="col-lg-3 col-12 ms-auto">
                        <ul class="social-icon">
                            <li><a href="https://facebook.com/smikservices/" class="social-icon-link bi-facebook"></a></li>


                            <li><a href="https://www.instagram.com/smik_services.01/" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
