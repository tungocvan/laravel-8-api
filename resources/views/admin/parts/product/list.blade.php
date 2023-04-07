<h1 class="mb-2 fw-bold display-3">{{$data['status']}}  </h1>  
   
   {{-- @foreach ($products as $product)
      <p>{{$product->name}}</p> 
   @endforeach 
  <!-- default pagination -->
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item {{$page === 1?'disabled':''}}"><a class="page-link" href="?page={{$page-1}}">Previous</a></li>
      @for ($i = 0; $i < $total_pages; $i++)  
            <li class="page-item {{$page === $i+1?'active':''}}"><a class="page-link" href="?page={{$i+1}}">{{$i+1}}</a></li>    
      @endfor 
      <li class="page-item {{$page == $total_pages?'disabled':''}}"><a class="page-link" href="?page={{$page+1}}">Next</a></li>
    </ul>
  </nav> --}}