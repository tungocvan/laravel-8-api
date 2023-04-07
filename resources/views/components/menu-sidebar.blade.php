
<div class="row" style="margin-left:5px">
    <div class="col-12 mb-8" style="padding-left:1px">
       <div class="d-flex justify-content-between align-items-center d-md-none py-4">
          <!-- heading -->
          <h3 class="fs-5 mb-0">Account Setting</h3>
          <!-- button -->
          <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
          <i class="bi bi-text-indent-left fs-3"></i>
          </button>
       </div>
    </div>
    <div class="d-none d-md-block">
       <div class="pe-xl-10">
          <!-- nav -->
          <ul class="nav flex-column nav-pills nav-pills-dark">
            <!-- Bài Viết-->
            <!-- nav item -->
            <li class="nav-item alert alert-primary">
               Bài Viết                       
            </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link {{ $active==='admin/post/list'?'active':'' }}" aria-current="page" href="/admin/post/list"><i class="feather-icon icon-shopping-bag me-2"></i>Tất cả bài viết</a>
             </li>
             <!-- nav item -->
             <li class="nav-item">
               <a class="nav-link {{ $active==='admin/post/add'?'active':'' }}" aria-current="page" href="/admin/post/add"><i class="feather-icon icon-settings me-2"></i>Thêm mới</a>
             </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link {{ $active==='admin/post/category'?'active':'' }}" aria-current="page" href="/admin/post/category"><i class="feather-icon icon-map-pin me-2"></i>Chuyên mục</a>
             </li>
          

             <!-- nav item -->
             <li class="nav-item">
                <hr>
             </li>
            <!-- Sản Phẩm-->
            <!-- nav item -->
            <li class="nav-item alert alert-primary">
               Sản Phẩm                       
            </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link {{ $active==='admin/product/list'?'active':'' }}" aria-current="page" href="/admin/product/list"><i class="feather-icon icon-shopping-bag me-2"></i>Tất cả sản phẩm</a>
             </li>
             <!-- nav item -->
             <li class="nav-item">
               <a class="nav-link {{ $active==='admin/product/add'?'active':'' }}" aria-current="page" href="/admin/product/add"><i class="feather-icon icon-settings me-2"></i>Thêm mới</a>
             </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link {{ $active==='admin/product/category'?'active':'' }}" aria-current="page" href="/admin/product/category"><i class="feather-icon icon-map-pin me-2"></i>Chuyên mục</a>
             </li>
          

             <!-- nav item -->
             <li class="nav-item">
                <hr>
             </li>
             <!-- Thành Viên-->
             <li class="nav-item alert alert-primary">
               Thành Viên                      
            </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link {{ $active==='admin/users'?'active':'' }}" aria-current="page" href="/admin/users"><i class="feather-icon icon-shopping-bag me-2"></i>Tất cả người dùng</a>
             </li>
             <!-- nav item -->
             <li class="nav-item">
               <a class="nav-link {{ $active==='admin/users/add'?'active':'' }}" aria-current="page" href="/admin/users/add"><i class="feather-icon icon-settings me-2"></i>Thêm mới </a>
             </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link {{ $active==='admin/users/roles'?'active':'' }}" aria-current="page" href="/admin/users/roles"><i class="feather-icon icon-map-pin me-2"></i>Phân quyền</a>
             </li>
          

             <!-- nav item -->
             <li class="nav-item">
                <hr>
             </li>
             <!-- nav item -->
             <li class="nav-item">
                <a class="nav-link " href="/logout"><i class="feather-icon icon-log-out me-2"></i>Đăng xuất</a>
             </li>
          </ul>
       </div>

    </div>
</div>
