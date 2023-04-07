<main>
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
    <section class="mt-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- img slide -->
                    <x-package-album-image-zoom />
                </div>
                <div class="col-md-6">
                    <x-package-product-detail />
                </div>
            </div>
        </div>
    </section>
  
    <x-package-product-panel />

    <!-- section -->
    <section class="my-lg-14 my-14">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- heading -->
                    <h3>Related Items</h3>
                </div>
            </div>
            <!-- row -->
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                <!-- col -->
                <x-package-popular-products-item />
            </div>
        </div>
    </section>
</main>
