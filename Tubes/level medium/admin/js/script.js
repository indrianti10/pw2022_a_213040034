// //ambil elmen elmen yang di butuhkan
// var keyword = document.getElementById("keyword");
// var tombolCari = document.getElementById("tombol-cari");
// var container = document.getElementById("container");

// //tambahkan event ketika keywor di tulis
// keyword.addEventListener("keyup", function () {
//   //buat object ajax
//   var xhr = new XMLHttpRequest();

//   //cek kesiapan ajax
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   };

//   //eksekusi ajax
//   xhr.open("GET", "ajax/event.php?keyword=" + keyword.value, true);
//   xhr.send();
// });

//$ = jquery
$(document).ready(function () {
  //hilangkan tombol cari
  $("#tombol-cari").hide();
  //event ketika keyword di tulis
  $("#keyword").on("keyup", function () {
    //munculkan icon loading
    $(".loader").show();
    //ajax menggunakan load
    //$("#container").load("ajax/event.php?keyword=" + $("#keyword").val());

    //$.get
    $.get("ajax/event.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
