<form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file_user" id="file_user">
    <button type="submit">Submit</button>
</form>
