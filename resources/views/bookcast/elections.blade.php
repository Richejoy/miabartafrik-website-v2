@extends('layouts.bookcast', ['title' => "Accueil"])

@section('stylesheet')

@endsection

@section('body')

<!-- CONTAINER OPENED -->
<div class="side-app container">
    <!-- ROW-1 OPEN -->
    <div class="row row-cards">
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body border-0">
                            <div class="rechercheupdatbookcast">
                                <form>
                                    <div class="inner-form">
                                        <div class="basic-search">
                                            <div class="input-field">
                                                <input id="search" type="text"
                                                    placeholder="Rechercher un nom d'artiste" />
                                                <div class="icon-wrap">
                                                    <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc"
                                                        aria-hidden="true" data-prefix="fas" data-icon="search"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="advance-search">
                                            <div class="row">

                                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form_steps_option-row animated bounceInDown">
                                                        <label for="">
                                                            Pays *
                                                        </label>
                                                        <select class="select_on_bookcast">
                                                            <option>Votre pays d'origine</option>
                                                            <option>Togo</option>
                                                            <option>Côte d'ivoire</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-8">
                                                    <div class="form_steps_option-row animated bounceInDown">
                                                        <label for="">
                                                            Domaines *
                                                        </label>
                                                        <select class="select_on_bookcast">
                                                            <option>Votre pays d'origine</option>
                                                            <option>Cinéma & Fiction</option>
                                                            <option>Mode & Beauté</option>
                                                            <option>Musique / Danse</option>
                                                            <option>Radio / Télévision</option>
                                                            <option>Théâtre & Humour</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row third">
                                                <div class="input-field">
                                                    <div class="result-count">
                                                        <span>807 259 </span>résultat(s)
                                                    </div>
                                                    <div class="group-btn">
                                                        <button class="btn-delete" id="delete">SUPPRIMER</button>
                                                        <button class="btn-search">RECHERCHE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- COL END -->

                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                @for($i = 0; $i <= 10; $i++)
                                <!-- Book artiste -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                    <div class="booksId">

                                        <div class="profileImage"><img src="{{ asset('public/assets/images/artiste/3766737.jpg') }}" alt="team">
                                        </div>

                                        <div class="inner_booksId">
                                            <div class="info_booksId">
                                                <header class="headerprofilbook">
                                                    <a href="/artisteName" class="ambassadeurSign"><img
                                                            src="{{ asset('public/assets/images/icons/iconambassadeur.png') }}"
                                                            alt="ambassadeur BookCast" class="ambassadeurSRound"></a>

                                                    <div class="titleAndAuthor">
                                                        <h2 class="titlebook" title="Nom de l'artiste">

                                                            <span class="book-status online">
                                                                <i class="ion-record" data-toggle="tooltip" title=""
                                                                    data-original-title="En ligne"></i>
                                                            </span>
                                                            <a href="">Agbodjan - Tonou</a>
                                                        </h2>
                                                        <address class="book_author">
                                                            <a href="/artisteName"
                                                                class="domaine_artistiqueBookcast">Actrice,
                                                                Modèle photo, Danseuse</a>
                                                        </address>
                                                    </div>
                                                </header>
                                                <!-- Vote Artiste -->
                                                <div class="notation">
                                                    <i class="btnvotbookartiste notation-up fa fa-thumbs-o-up"
                                                        aria-hidden="true"></i>
                                                    <i class="btnvotbookartiste notation-down fa fa-thumbs-o-down"
                                                        aria-hidden="true"></i>
                                                    <span class="nombreDvote">2587</span>
                                                </div>
                                                <!-- end Votes Artiste -->
                                                <div class="detail-area-header">

                                                    <div class="detail-buttons">
                                                        <button class="detail-button">
                                                            <i class="fa fa-user-plus"></i>
                                                        </button>
                                                        <button class="detail-button">
                                                            <a href="bookartisteview.html">Voir ce Book
                                                            </a>
                                                        </button>
                                                    </div>

                                                    <div class='task__stats'>
                                                        <span class="mrlk">
                                                            <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                                data-original-title="Nationalité de l'artiste"></i>
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-heart"></i></button>1259
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-share-square-o"></i></button>457
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-eye"></i></button>
                                                            7254
                                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Book artiste -->
                                @endfor
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ASIDE BAR -->
        @include('layouts.partials.bookcast._before_footer')
        <!-- ASIDE BAR END -->
    </div>
</div>
<!-- CONTAINER CLOSED -->

@endsection