<h1 class="mb-2 fw-bold display-3">{{$data['status']}}</h1>  
<form action="{{ route('product.add') }}" method="post">
    @csrf    
    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Cập nhật
            </button>
        </div>    
    </div>
</form>

