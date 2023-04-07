<div class="border-bottom pb-lg-4 pb-3">
    <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
        <div class="container px-0 px-md-3">
            <div class="dropdown me-3 d-none d-lg-block">
                <x-package-button-menu />
            </div>

            <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
                <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                    <x-package-button-logo-mobile />
                </div>

                <div class="d-block d-lg-none mb-2 pt-2">
                      <x-package-button-menu-mobile />
                </div>

                <div class="d-lg-none d-block mb-3">
                    <x-package-button-location-mobile />
                </div>
                <div class="d-none d-lg-block">
                    <x-package-nav-menu />
                </div>
                <div class="d-block d-lg-none">
                    <x-package-nav-menu-mobile />
                </div>
            </div>
        </div>
    </nav>
</div>
