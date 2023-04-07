<h2>Doashboard</h2>
<a href="{{route('doctors.logout')}}" onclick="event.preventDefault(); document.querySelector('#logout-from').submit();">Đăng xuất</a>
<form id="logout-from" action="{{route('doctors.logout')}}" method="POST">
    @csrf
</form>