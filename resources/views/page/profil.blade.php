
@extends('layout.user')

@section('user')

    <section class="profil ">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-sm-3">
                    <div class="card-left">
                        <div class="card-header border-0 bg-transparent">
                            <div class="dropdown">
                                <button class="icon btn btn-secondary " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item mb-3" href="#">Mettre à jour mon profil</a></li>
                                  <li><a class="dropdown-item mb-3" href="#">Modifier mot de passe</a></li>
                                  <li><a class="dropdown-item mb-3" href="#">Deconnexion</a></li>
                                </ul>
                            <span class="ms-2 fs-5">Douma armand</span>
                            </div>





                            
                        </div>
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item " role="presentation">
                                    <a href="#" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tableau de bord</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Appels d'offres</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Plaintes</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="false">Services</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link " id="depot-tab" data-bs-toggle="tab" data-bs-target="#depot" type="button" role="tab" aria-controls="service" aria-selected="false">Depot sauvage et eaux usées</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-9">
                    <div class="card-right">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                @include('page.tableau')
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">..z.</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">..e.</div>
                                <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">..service.</div>
                                <div class="tab-pane fade" id="depot" role="tabpanel" aria-labelledby="service-tab">..depot</div>
                                <div class="tab-pane fade" id="deconnexion" role="tabpanel" aria-labelledby="service-tab">deconnexion</div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



     {{-- menu --}}
@endsection