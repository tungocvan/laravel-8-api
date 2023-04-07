<header>   
    <div class="navbar navbar-light py-lg-4 pt-3 px-0 pb-0">
        <div class="container">
            <div class="row w-100 align-items-center g-lg-2 g-0">
                <div class="col-xxl-2 col-lg-3">
                    <a class="navbar-brand d-none d-lg-block" href="/">
                        <img src="{{ $myAsset.'/images/logo/freshcart-logo.svg ' }} " alt="eCommerce HTML Template" />
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="./index.html">
                            <img src="{{ $myAsset.'/images/logo/freshcart-logo.svg ' }} " alt="eCommerce HTML Template" />
                        </a>

                        <div class="d-flex align-items-center lh-1">
                            <div class="list-inline me-2">
                                <div class="list-inline-item">
                                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-user"
                                        >
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </a>
                                </div>
                                <div class="list-inline-item">
                                    <a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-shopping-bag"
                                        >
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                            1
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Button -->
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-5 d-none d-lg-block">
                    <x-input-search />
                </div>
                <div class="col-md-2 col-xxl-3 d-none d-lg-block">
                    <!-- Button trigger modal -->
                    <x-package-button-location />
                </div>
                <div class="col-md-2 col-xxl-1 text-end d-none d-lg-block">
                    <div class="list-inline">                       
                        <div class="list-inline-item">
                            @if (Route::has('login')) 
                                @auth
                                <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <h3>Hi ! {{ Auth::user()->name }}</h3>
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                        Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin') }}">
                                        Admin
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </div>
                                @else
                                  <x-package-button-modal-center />
                                @endauth
                            @endif    
                        </div>
                        <div class="list-inline-item">
                            <x-package-button-shop-cart />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
