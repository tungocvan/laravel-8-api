<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\InputSearch;
use App\View\Components\ButtonLocation;
use App\View\Components\ButtonLocationMobile;
use App\View\Components\ButtonShopCart; 
use App\View\Components\ButtonModalCenter; 
use App\View\Components\ButtonMenu; 
use App\View\Components\ButtonDropDownMenu; 
use App\View\Components\ButtonMenuMobile; 
use App\View\Components\ButtonLogoMobile; 
use App\View\Components\NavMenu; 
use App\View\Components\NavMenuItem; 
use App\View\Components\NavMenuMobile; 
use App\View\Components\NavMenuMega; 
use App\View\Components\NavMenuMegaItems; 
use App\View\Components\NavMenuMegaBanner; 
use App\View\Components\BannerSlider; 
use App\View\Components\BannerSliderItem; 
use App\View\Components\CategorySlider; 
use App\View\Components\CategorySliderItem; 
use App\View\Components\BannerAds; 
use App\View\Components\PopularProducts; 
use App\View\Components\PopularProductsItem; 
use App\View\Components\ProductDetail; 
use App\View\Components\ProductPanel; 
use App\View\Components\ProductModal; 
use App\View\Components\DailyBestSells; 
use App\View\Components\DailyBestSellsBanner; 
use App\View\Components\DailyBestSellsItem; 
use App\View\Components\HomeServices; 
use App\View\Components\ItemServices; 
use App\View\Components\ItemsMenu; 
use App\View\Components\BreadCrumb; 
use App\View\Components\CategoryMenu; 
use App\View\Components\StoreSearch; 
use App\View\Components\PriceFilter; 
use App\View\Components\RatingFilter; 
use App\View\Components\ComboboxFilter; 
use App\View\Components\PaginationProduct; 
use App\View\Components\AlbumImageZoom; 
use App\View\Components\ShopCart; 
use App\View\Components\SignUpModal; 
use App\View\Components\SignInModal; 
use App\View\Components\LocationModal; 
use App\View\Components\CardText;
use App\View\Components\MenuSidebar;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //        
            
        // app()->singleton('templatePublic', function () {
        //     return asset('freshcart') ; 
        // });
        //dd(asset('freshcart'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        Blade::component('package-input-search', InputSearch::class);
        Blade::component('package-button-location', ButtonLocation::class);
        Blade::component('package-button-location-mobile', ButtonLocationMobile::class);
        Blade::component('package-button-shop-cart', ButtonShopCart::class);
        Blade::component('package-button-modal-center', ButtonModalCenter::class);
        Blade::component('package-button-menu', ButtonMenu::class);
        Blade::component('package-button-drop-down-menu', ButtonDropDownMenu::class);
        Blade::component('package-button-menu-mobile', ButtonMenuMobile::class);
        Blade::component('package-button-logo-mobile', ButtonLogoMobile::class);
        Blade::component('package-nav-menu', NavMenu::class);
        Blade::component('package-nav-menu-item', NavMenuItem::class);
        Blade::component('package-nav-menu-mobile', NavMenuMobile::class);
        Blade::component('package-nav-menu-mega', NavMenuMega::class);
        Blade::component('package-nav-menu-mega-items',  NavMenuMegaItems::class);
        Blade::component('package-nav-menu-mega-banner',  NavMenuMegaBanner::class);
        Blade::component('package-banner-slider', BannerSlider::class);
        Blade::component('package-banner-slider-item', BannerSliderItem::class);
        Blade::component('package-category-slider', CategorySlider::class);
        Blade::component('package-category-slider-item', CategorySliderItem::class);
        Blade::component('package-banner-ads', BannerAds::class);
        Blade::component('package-popular-products', PopularProducts::class);
        Blade::component('package-popular-products-item', PopularProductsItem::class);
        Blade::component('package-product-detail', ProductDetail::class);
        Blade::component('package-product-panel', ProductPanel::class);
        Blade::component('package-product-modal', ProductModal::class);
        Blade::component('package-daily-best-sells', DailyBestSells::class);
        Blade::component('package-daily-best-sells-item', DailyBestSellsItem::class);
        Blade::component('package-daily-best-sells-banner', DailyBestSellsBanner::class);
        Blade::component('package-home-services', HomeServices::class);
        Blade::component('package-item-services', ItemServices::class);
        Blade::component('package-items-menu', ItemsMenu::class);
        Blade::component('package-bread-crumb', BreadCrumb::class);
        Blade::component('package-category-menu', CategoryMenu::class);
        Blade::component('package-store-search', StoreSearch::class);
        Blade::component('package-price-filter', PriceFilter::class);
        Blade::component('package-rating-filter', RatingFilter::class);
        Blade::component('package-combobox-filter', ComboboxFilter::class);
        Blade::component('package-pagination-product', PaginationProduct::class);
        Blade::component('package-album-image-zoom', AlbumImageZoom::class);
        Blade::component('package-shop-cart-modal', ShopCart::class);
        Blade::component('package-sign-up-modal', SignUpModal::class);
        Blade::component('package-sign-in-modal', SignInModal::class);
        Blade::component('package-location-modal', LocationModal::class);
        Blade::component('package-card-text', CardText::class);
        Blade::component('package-menu-sidebar', MenuSidebar::class);
        if (app()->environment('remote')) {
            URL::forceScheme('https');
        }
    }
}
