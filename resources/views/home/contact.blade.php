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
