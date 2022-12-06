@extends('theme.theme')
@section('body')



    <section class="hero d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="heroText">
                        <h1 class="text-white mb-lg-5 mb-4">Nous sommes prêts à servir pour votre entreprise</h1>

               
                    </div>
                </div>

            </div>
        </div>

        <div class="overlay"></div>
    </section>

    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-5">Smik-Services</h2>
                </div>

                <div class="col-lg-4 col-12 ms-lg-auto mb-5 mb-lg-0">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab" data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro" aria-selected="true">Introduction</button>

                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>

                        </div>
                    </nav>
                </div>

                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <img src="images/webpage-browser-digital-icon-symbols-concept.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">Qui sommes-nous ?</h3>

                                    <p>Smik services est une société dans le secteur d'activité commerciale. Fondé depuis le 26/10/2022. Nous avons pour domaine d'expertise(S) : - Toutes activités de transport routier : transport terrestre utilisant la route pour acheminer des marchandises ou
                                        des personnes. - Commerce général - Stratégie, marketing et communication - Prestations de services Fournitures de bureau, matériels
                                        informatiques - Gestion immobilière, comptable et informatique - Travaux du BTP - Les ressources humaines - Toutes les activités
                                        d'importations et exportations La logistique : regroupant les activités classiques de transport comme le stockage, l'utilisation des machines
                                        de transport et de levage, mais aussi l'aménagement des locaux afin d'optimiser les flux de composants. A cela s'ajoute la gestion des
                                        retours liés au service après-vente. Et pour la réalisation de l'objet social : - l'acquisition, la location et la vente de tous biens meubles et
                                        immeubles. - l'emprunt de toutes sommes auprès de tous établissements financiers avec possibilité de donner en garantie tout ou partie
                                        des biens sociaux. - la prise en location gérance de tous fonds de commerce. - la prise de participation dans toute société existante ou
                                        devant être créée - et généralement, toute opérations financières, commerciales, industrielles, mobilières et immobilière, se rapportant
                                        directement ou indirectement a l'objet social ou pouvant en faciliter l'extension ou le développement. Avec une équipe de spécialistes de 5 cinq personnes.</p>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">KOMAH IBRAHIM, CEO</h3>

                                    <p>Notre priorité est votre bonheur en travaillant avec nous. Nous vous garantissons la meilleure qualité de service de notre part. N'hésitez pas à nous parler par e-mail.</p>

                                    <ul class="social-icon mt-lg-5 mt-3">
                                        <li class="me-3"><strong>Où nous trouver?</strong></li>

                                        <li><a href="https://facebook.com/smikservices/" class="social-icon-link bi-facebook"></a></li>


                                        <li><a href="https://www.instagram.com/smik_services.01/" class="social-icon-link bi-instagram"></a></li>

                                        <li><a href="#" class="social-icon-link bi-linkedin"></a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                    <img src="images/ceo.jpeg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <img src="images/php-programming-html-coding-cyberspace-concept.jpg" class="img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <h2 class="mb-5 text-center">Nos Services</h2>
                    @foreach($services as $service)
                    <div class="col-lg-4 col-12 d-flex bg-primary p-0">
                        <img src="images/services/undraw_Online_page_re_lhgx.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0">
                        <div class="services-info custom-icon-left paddingText">
                        
                            <h4 class="">{{$service->name}}</h4>

                            <p class="mb-4">{{$service->description }} </p>

                            <a class="custom-btn custom-bg-dark btn" href="{{route('service.detail',['id'=>$service->id])}}">Voir plus</a>
                        </div>
                    </div>
                        @endforeach
                    <div class="col-lg-4 col-12 d-flex bg-warning p-0">
                        <img src="images/services/undraw_online_transactions_02ka.svg" class="img-fluid services-image" alt="">
                    </div>

                 

                    
                    


            </div>
        </div>
    </section>

   
@endsection