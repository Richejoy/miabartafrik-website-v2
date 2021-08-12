<section>
    {!! Form::open() !!}

    {!! Form::hidden('form', 'photographer') !!}

        <div class="row row-sm text-left mb-2">

            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                <label for="" class="required-text mg-b-10 label_mba">
                    Vous êtes une personne:
                </label> <br>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn active">
                        <input type="radio" name='gender2' checked> <span> Physique</span>
                    </label>
                    <label class="btn">
                        <input type="radio" name='gender2'> <span> Morale</span>
                    </label>
                </div>

            </div><!-- Domaine principal -->

        </div>

        <div class="row row-sm text-left mb-2">

            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                <label for="" class="required-text mg-b-10 label_mba">
                    Nom de votre société
                </label>

                <input class="form-control" placeholder="Nom du Studio ou d'agence" type="text">

            </div><!-- Domaine principal -->

            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                <label for="" class="required-text mg-b-10 label_mba">
                    N° Enrégistrement
                </label>

                <input class="form-control" placeholder="N°RCCM / ..." type="text">

            </div><!-- Domaine principal -->
        </div>

        <div class="row row-sm text-left mb-2">

            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                <label for="" class="required-text mg-b-10 label_mba">
                    Votre nom de marque
                </label>

                <input class="form-control" placeholder="Nom du Studio ou d'agence" type="text">

            </div><!-- Domaine principal -->
        </div>

        <div class="row row-sm text-left mb-2">

            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                <label for="" class="required-text mg-b-10 label_mba">
                    Niveau
                </label>

                <div class="parsley-select" id="slWrapper">
                    <select class="form-control select2" data-parsley-class-handler="#slWrapper"
                        data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose onee" required="">
                        <option label="Niveau">
                        </option>
                        <option value="Débutant(e)">
                            Débutant(e)
                        </option>
                        <option value="Professionnel(le)">
                            Professionnel(le)
                        </option>

                    </select>
                    <div id="slErrorContainer"></div>
                </div>
            </div><!-- Domaine principal -->
        </div>

        <div class="row row-sm text-left mb-2">

            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                <label for="" class="required-text mg-b-10 label_mba">
                    Vos spécialités
                </label>

                <select class="form-control select2" multiple="multiple">

                    <option label="Votre spécialité">
                    </option>
                    <option value="Paysages">
                        Paysages
                    </option>
                    <option value="Portrait">
                        Portrait
                    </option>
                    <option value="Animaliers">
                        Animaliers
                    </option>
                    <option value="Mode">
                        Mode
                    </option>
                    <option value="Culinaires">
                        Culinaires
                    </option>
                    <option value="Sportifs">
                        Sportifs
                    </option>
                    <option value="Rue">
                        Rue
                    </option>
                    <option value="Mariage">
                        Mariage
                    </option>
                    <option value="Bébé">
                        Bébé
                    </option>
                    <option value="Autres">
                        Autres
                    </option>

                </select>

            </div><!-- Domaine principal -->
        </div>

    <div class="row">
        <div class="col annuler_mbafonction">
            
        </div>
        <div class="col enreg_mbafonction">
            <button type="submit" class="btn btn-link">
                Enregistrer mes modifications
            </button>
        </div>
    </div>

    {!! Form::close() !!}
</section>