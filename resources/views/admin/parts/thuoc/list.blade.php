<h3 class="mb-2 fw-bold display-5">{{$data['status']}}</h3>  
<div class="container-fluid">
    <div class="row">
      <div class="col-xxl-6 col-lg-5 d-none d-lg-block">
        <form action="#">
<div class="input-group">
<input class="form-control rounded-3" type="search" placeholder="Search for products" id="searchInput">
<span class="input-group-append">
<button class="btn bg-white border border-start-0 ms-n10" type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
</button>
</span>
</div>
</form>
    </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead class="table-light">
              <tr>
                <th scope="col">Nhóm thuốc</th>
                <th scope="col">Tên Thuốc</th>
                <th scope="col">Hoạt chất - Hàm lượng</th>
                <th scope="col">Giá trúng thầu</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Nhà trúng thầu</th>
                <th scope="col">Tên BV/SYT</th>
                <th scope="col">Ngày QĐ trúng thầu</th>
                <th scope="col">Thời gian thực hiện</th>
              </tr>
            </thead>
            <tbody>    
    @foreach ($products as $item)
    <tr>
    <th scope="row" width="100">{{$item->nhom_thuoc}}</th>
    <th scope="row" width="20%">{{$item->ten_thuoc}}</th>
    <td width="20%">{{$item->hoat_chat}} {{$item->ham_luong}}</td>
    <td>{{$item->don_gia}}</td>
    <td>{{$item->so_luong}}</td>
    <td>{{$item->nha_trung_thau}}</td>
    <td>{{$item->ten_bv_syt}}</td>
    <td>{{$item->ngay_qd_trung_thau}}</td>
    <td>{{$item->thoi_gian_thuc_hien}}</td>
  </tr>
    
    @endforeach
    </tbody>
    </table>
</div>
</div>
 <!-- default pagination -->
 {{-- <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item {{$page === 1?'disabled':''}}"><a class="page-link" href="?page={{$page-1}}">Previous</a></li>
      @for ($i = 0; $i < $total_pages; $i++)  
        @if ($i<10)
              <li class="page-item {{$page === $i+1?'active':''}}"><a class="page-link" href="?page={{$i+1}}">{{$i+1}}</a></li> 
        @endif
              
      @endfor 
      <li class="page-item {{$page == $total_pages?'disabled':''}}"><a class="page-link" href="?page={{$page+1}}">Next</a></li>
    </ul>
  </nav>  --}}
  {{ $products->onEachSide(1)->links() }}
  
  <script>
      window.addEventListener("DOMContentLoaded",function(eve){
      var navigation = document.querySelector('[role="navigation"] > .hidden');
      navigation.classList.add('thuoc-panigation');
      console.log(navigation);
     },false);
    sessionStorage.setItem("myArray", "{{json_encode($myArray,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)}}");
</script>