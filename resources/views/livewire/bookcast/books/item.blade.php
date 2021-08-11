<div class="booksId">

    <div class="profileImage">
        <img src="{{ asset('public/assets/img/artiste/team-2.jpg') }}" alt="team">
    </div>

    <div class="inner_booksId">

        <div class="info_booksId">

            <div class="detail-area-header">
                <a href="#" class="ambassadeurSign" style="display: ;">
                    <img src="{{ asset('public/assets/img/icons/iconambassadeur.png') }}" alt="ambassadeur BookCast"
                        class="ambassadeurSRound">
                </a>
                <div class="main_profilbook_header">
                    <div class="main_book_name">
                        <h6>
                            <a href="book_view.html">{{ $artist->user->fullName() }}</a>
                        </h6>
                        <small class="mr-3">Actrice, Modèle photo, Danseuse</small>
                    </div>
                </div>


                <div class="main_profilbook_header">
                    <nav class="contact-info">
                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="Ghana"><i class="flag flag-gh"></i></a>
                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                        </a>
                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a>
                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="Inviter"><i class="fe fe-user-plus"></i></a>
                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="Publier"><i class="far fa-share-square"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>