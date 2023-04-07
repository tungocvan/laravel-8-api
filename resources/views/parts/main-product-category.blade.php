<main>
    <!-- section-->
    <div class="mt-4">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <!-- breadcrumb -->
                    <x-package-bread-crumb />
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <div class="mt-8 mb-lg-14 mb-8">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row gx-10">
                <!-- col -->
                <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                    <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                        <div class="offcanvas-header d-lg-none">
                            <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ps-lg-2 pt-lg-0">
                            <div class="mb-8">
                                <x-package-category-menu />
                            </div>

                            <div class="mb-8">
                                <x-package-store-search />
                            </div>
                            <div class="mb-8">
                                <!-- price -->
                                <x-package-price-filter />
                            </div>
                            <!-- rating -->
                            <div class="mb-8">
                                <x-package-rating-filter />
                            </div>
                            <div class="mb-8 position-relative">
                                <x-package-daily-best-sells-banner />
                            </div>
                        </div>
                    </div>
                </aside>

                <section class="col-lg-9 col-md-12">
                    <!-- card -->
                    <div class="card mb-4 bg-light border-0">
                        <!-- card body -->
                        <div class="card-body p-9">
                            <h2 class="mb-0 fs-1">Snacks & Munchies</h2>
                        </div>
                    </div>
                    <!-- list icon -->
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <p class="mb-0"><span class="text-dark">24 </span> Products found</p>
                        </div>

                        <!-- icon -->
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <a href="shop-list.html" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                                    <a href="shop-grid.html" class="me-3 text-muted"><i class="bi bi-grid"></i></a>
                                    <a href="shop-grid-3-column.html" class="me-3 active"><i class="bi bi-grid-3x3-gap"></i></a>
                                </div>
                                <div class="ms-2 d-lg-none">
                                    <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="14"
                                            height="14"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-filter me-2"
                                        >
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                        Filters
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex mt-2 mt-lg-0">
                                <div class="me-2 flex-grow-1">
                                    <!-- select option -->
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Show: 50</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div>
                                    <!-- select option -->
                                    <x-package-combobox-filter />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row g-4 row-cols-xl-3 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                        <!-- col -->
                        @for ($i = 0; $i < 9; $i++)
                        <x-package-popular-products-item />
                        @endfor
                    </div>
                    <!-- row -->
                    <div class="row mt-8">
                        <div class="col">
                            <!-- nav -->
                            <x-package-pagination-product />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
