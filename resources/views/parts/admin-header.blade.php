<?php
$myAsset = asset('freshcart');
?>
<div class="docs-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ms-0">
        <a class="navbar-brand me-0" href="/"><img src="{{ $myAsset }}/images/logo/logo-hmd_03.png"
                alt="" width="224px" height="52px"> </a>
        <div class="navbar-nav ms-auto flex-row">
            @if (Route::has('login'))
                @auth
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <h3>Hi ! {{ Auth::user()->name }}</h3>
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                Profile
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
    </nav>
</div>
