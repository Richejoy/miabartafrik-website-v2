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
                                                <input id="search" type="text" placeholder="Rechercher un artiste" />
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

                                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form_steps_option-row animated bounceInDown">
                                                        <label for="">
                                                            Domaines artistique *
                                                        </label>
                                                        <select class="select_on_bookcast">
                                                            <optgroup label="Cinéma / Fiction">
                                                                <option value="11">Acteur</option>
                                                                <option value="12">Actrice</option>
                                                                <option value="18">Cascadeur</option>
                                                                <option value="10">Comédien</option>
                                                                <option value="13">Comédienne</option>
                                                                <option value="19">Doublure</option>
                                                                <option value="7">Figurant</option>
                                                                <option value="14">Figurante</option>
                                                                <option value="60">Mannequin</option>
                                                                <option value="21">Metteur en scène</option>
                                                                <option value="59">Modèle</option>
                                                                <option value="15">Photographe</option>
                                                                <option value="16">Réalisateur</option>
                                                                <option value="17">Scénariste</option>
                                                                <option value="20">Silhouette</option>
                                                            </optgroup>
                                                            <optgroup label="Mode / Beauté">
                                                                <option value="33">Coiffeur</option>
                                                                <option value="32">Coiffeuse</option>
                                                                <option value="62">Figurant</option>
                                                                <option value="61">Figurante</option>
                                                                <option value="35">Hôte</option>
                                                                <option value="34">Hôtesse</option>
                                                                <option value="9">Mannequin</option>
                                                                <option value="37">Maquilleur</option>
                                                                <option value="36">Maquilleuse</option>
                                                                <option value="8">Modèle</option>
                                                                <option value="38">Photographe</option>
                                                                <option value="31">Silhouette</option>
                                                                <option value="39">Styliste</option>
                                                            </optgroup>
                                                            <optgroup label="Musique / Danse">
                                                                <option value="41">Chanteur</option>
                                                                <option value="40">Chanteuse</option>
                                                                <option value="48">Chorégraphe</option>
                                                                <option value="42">Choriste</option>
                                                                <option value="65">Comédien</option>
                                                                <option value="66">Comédienne</option>
                                                                <option value="44">Danseur</option>
                                                                <option value="43">Danseuse</option>
                                                                <option value="47">DJ</option>
                                                                <option value="68">Doublure</option>
                                                                <option value="64">Figurant</option>
                                                                <option value="67">Figurante</option>
                                                                <option value="46">Musicien</option>
                                                                <option value="45">Musicienne</option>
                                                                <option value="63">Silhouette</option>
                                                            </optgroup>
                                                            <optgroup label="Télévision / Radio">
                                                                <option value="22">Animateur</option>
                                                                <option value="74">Animatrice</option>
                                                                <option value="23">Candidat</option>
                                                                <option value="70">Chanteur</option>
                                                                <option value="69">Chanteuse</option>
                                                                <option value="26">Comédien</option>
                                                                <option value="25">Comédienne</option>
                                                                <option value="72">Danseur</option>
                                                                <option value="71">Danseuse</option>
                                                                <option value="24">Doublure voix</option>
                                                                <option value="28">Figurant</option>
                                                                <option value="27">Figurante</option>
                                                                <option value="73">Humoriste</option>
                                                                <option value="29">Silhouette</option>
                                                                <option value="30">Témoignage</option>
                                                            </optgroup>
                                                            <optgroup label="Théâtre / Humour">
                                                                <option value="52">Acrobate</option>
                                                                <option value="51">Comédien</option>
                                                                <option value="50">Comédienne</option>
                                                                <option value="54">Figurant</option>
                                                                <option value="55">Figurante</option>
                                                                <option value="49">Humoriste</option>
                                                                <option value="57">Marionnettiste</option>
                                                                <option value="53">Mime</option>
                                                                <option value="56">Silhouette</option>
                                                                <option value="58">Spectacle vivant</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>

                                                </div>


                                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form_steps_option-row animated bounceInDown">
                                                        <label for="">
                                                            Sexe *
                                                        </label>
                                                        <select class="select_on_bookcast">
                                                            <option>Choix du sexe</option>
                                                            <option>Masculin</option>
                                                            <option>Féminin</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row third">
                                                <div class="input-field">
                                                    <div class="result-count">
                                                        <span>1 587 458 </span>résultat(s)
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
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 ">
                                    <div class="booksId">

                                        <div class="profileImage">
                                            <img src="{{ asset('public/assets/images/artiste/exempleBook.jpg') }}" alt="team">
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
                                                                class="domaine_artistiqueBookcast">Actrice, Modèle
                                                                photo, Danseuse</a>
                                                        </address>
                                                    </div>



                                                </header>
                                                <div class="detail-area-header">

                                                    <div class="detail-buttons">
                                                        <button class="detail-button">
                                                            <i class="fa fa-user-plus"></i>
                                                        </button>
                                                        <button class="detail-button">
                                                            <a href="bookartisteview.html">Voir ce Book </a>
                                                        </button>
                                                    </div>

                                                    <div class='task__stats'>
                                                        <span class="mrlk">
                                                            <i class="flag flag-tg" data-toggle="tooltip" title=""
                                                                data-original-title="Nationalité de l'artiste"></i>
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-heart"></i></button>1259
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-eye"></i></button> 7254
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