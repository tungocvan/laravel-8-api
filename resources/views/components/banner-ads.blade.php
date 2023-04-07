<?php 
    $myAsset = asset('freshcart'); 
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-lg-0">
                <div>
                    <div class="py-10 px-8 rounded-3" style='background:url("{{ $myAsset }}/images/banner/grocery-banner.png")no-repeat; background-size: cover; background-position: center;'>
                        <div>
                            <h3 class="fw-bold mb-1">Fruits & Vegetables</h3>
                            <p class="mb-4">Get Upto <span class="fw-bold">30%</span> Off</p>
                            <a href="#!" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <div class="py-10 px-8 rounded-3" style='background:url("{{ $myAsset }}/images/banner/grocery-banner-2.jpg")no-repeat; background-size: cover; background-position: center;'>
                        <div>
                            <h3 class="fw-bold mb-1">Freshly Baked Buns</h3>
                            <p class="mb-4">Get Upto <span class="fw-bold">25%</span> Off</p>
                            <a href="#!" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
