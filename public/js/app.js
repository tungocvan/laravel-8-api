const searchInput = document.querySelector('#searchInput');

searchInput.addEventListener('keyup', function(event) {
  // Xử lý tìm kiếm ở đây
  console.log(event.target.value);

});
var myArray = sessionStorage.getItem('myArray');
console.log(JSON.parse(myArray));