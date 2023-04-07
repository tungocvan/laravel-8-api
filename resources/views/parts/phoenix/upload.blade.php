@php 
    $myAsset = asset('phoenix/assets'); 
@endphp
<form method="POST" action="#" enctype="multipart/form-data">
@csrf    
<div class="mb-3">
    <label class="form-label" for="customFile">File input example</label>
    <input name="file" class="form-control" id="customFile" type="file" />
    <button type="submit">Upload</button>
</div>
</form>
