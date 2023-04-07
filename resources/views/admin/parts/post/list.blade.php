<h1 class="mb-2 fw-bold display-3">{{$data['status']}}</h1>  
@foreach ($posts as $post)
    <p>{{$post->title}}</p>
@endforeach