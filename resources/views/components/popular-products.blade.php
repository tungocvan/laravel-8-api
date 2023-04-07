<?php 
    $myAsset = asset('freshcart'); 
?>
<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <h3 class="mb-0">Popular Products</h3>
            </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
            <x-package-popular-products-item />
        </div>
    </div>
</section>
