<?php 
    $myAsset = asset('freshcart'); 
?>
<ul class="{{$classUl}}">
    @if($titleUl!="")
        <li class="{{$classLi}}">{{$titleUl}}</li>
    @endif
    @foreach($items as $item)
    @if($srcImg) 
        <li class="{{$classLi}}"><a href="{{$item['href']}}" class="{{$classA}}"><img src="{{$myAsset.$item['srcImg']}}" alt="{{$item['alt'] ?? ''}}" style="{{$item['style'] ?? ''}}" /></a></li>
    @else
        <li class="{{$classLi}}"><a href="{{$item['href']}}" class="{{$classA}}">{{$item['title']}}</a></li>
    @endif
    @endforeach
</ul>
