<div class="sidebar sidebar-right sidebar-animate">
    <div class="sidebar-icon">
        <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right"
            data-target=".sidebar-right"><i class="fe fe-x"></i></a>
    </div>
    <div class="sidebar-body">
        <h5 class="mb-0">MES CONTACTS ({{ $allFriends->count() }})</h5>

        <div class="card main-content-left main-content-left-contacts">
            <div class="tab-menu-heading">
                <div class="tabs-menu1 ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs main-nav-line main-nav-line-chat d-flex pl-3 ">
                        <li><a href="#all-contact" class="nav-link active mr-3" data-toggle="tab">Tout ({{ $allFriends->count() }})</a></li>
                        <li><a href="#fav-contact" class="nav-link" data-toggle="tab">Favoris ({{ $favoriteFriends->count() }})</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body p-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="all-contact">
                        <div class="main-contacts-list" id="mainContactList">

                            @forelse($allFriends as $friend)
                            
                            <x-bookcast.friend tab="all" :friend="$friend" />

                            @empty
                            
                            <!-- PAGE NOT FOUND -->
                            <div class="page_miabartAfrik_not_found">  
                                <div class="content_miabartAfrik_not_found">
                                    <h2>Aucune donnée trouver</h2>
                                    <p>Revenez plus tard</p>
                                </div> 
                            </div>
                            <!-- END PAGE NOT FOUND -->

                            @endforelse

                        </div>
                    </div>
                    <div class="tab-pane" id="fav-contact">
                        <div class="main-contacts-list" id="mainContactList1">

                            @forelse($favoriteFriends as $friend)
                            
                            <x-bookcast.friend tab="favorite" :friend="$friend" />

                            @empty
                            
                            <!-- PAGE NOT FOUND -->
                            <div class="page_miabartAfrik_not_found">  
                                <div class="content_miabartAfrik_not_found">
                                    <h2>Aucune donnée trouver</h2>
                                    <p>Revenez plus tard</p>
                                </div> 
                            </div>
                            <!-- END PAGE NOT FOUND -->

                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>