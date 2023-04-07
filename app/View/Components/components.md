Example: Create component CardText.
php artisan make:component CardText
open file: AppServiceProvider.php
    -> Add: use App\View\Components\CardText; 
    -> public function boot(){
        .....
        Blade::component('package-card-text', CardText::class);
        .....
    }

open file: Views\components\card-text.blade.php

sử dụng trong blade: 
<x-package-card-text />

- Truyền tham số vào component:
open file: app\View\Components\CardText.php
-> Tạo các biến trong class :
-> Truyền các biến vào __construct của class 

public $title;
public function __construct($title)
{
    $this->title = $title;
}

sử dụng trong blade: 
        <x-package-card-text title="Phiếu Mua hàng" />
Hoặc:
    $title = "Phiếu Mua hàng";
    <x-package-card-text :title="$title" /> 
- Sử dụng biến $title bên trong Views
{{$title}}

:items="$itemImg" classUl="list-inline mb-0"