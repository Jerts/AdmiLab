$(".preloader-wrapper").css("display","none");
$(".framei").attr("src","inicio.php");

$(".menubtn").click(function() {
  $(".preloader-wrapper").css("display","inherit");
});

$('.framei').load(function () {
    $(".preloader-wrapper").css("display","none");
});

function menuselect(select){
  switch (select) {
    case 1:
      $(".framei").attr("src","inicio.php");
      $(".navbar-brand").text("Panel");
      $("title").text("Panel | AdmiLab");
      $(".top_icon").text("insert_chart");
      break;
    case 2:
      $(".framei").attr("src","practicas_docente.php");
      $(".navbar-brand").text("Practicas");
      $("title").text("Practicas | AdmiLab");
      $(".top_icon").text("today");
      break;
    case 3:
      $(".framei").attr("src","usuario.php");
      $(".navbar-brand").text("Usuario");
      $("title").text("Usuario | AdmiLab");
      $(".top_icon").text("assignment_ind");
      break;
  }
}
