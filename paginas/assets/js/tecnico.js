$(".preloader-wrapper").css("display","none");
$(".framei").attr("src","horario_docente.php");

$(".menubtn").click(function() {
  $(".preloader-wrapper").css("display","inherit");
});

$('.framei').load(function () {
    $(".preloader-wrapper").css("display","none");
});

$(".notif-drop").click(function() {
  $(".frame-notif").attr('src', $('.frame-notif').attr('src'));
});

function menuselect(select){
  switch (select) {
    case 1:
      $(".framei").attr("src","tabla_pracitcas_tecnico.php");
      $(".navbar-brand").text("Panel");
      $("title").text("Panel | AdmiLab");
      $(".top_icon").text("insert_chart");
      break;
    case 2:
      $(".framei").attr("src","usuario_tecnico.php");
      $(".navbar-brand").text("Usuario");
      $("title").text("Usuario | AdmiLab");
      $(".top_icon").text("assignment_ind");
      break;
    case 3:
      $(".framei").attr("src","config_tecnico.php");
      $(".navbar-brand").text("Configuracion");
      $("title").text("Configuracion | AdmiLab");
      $(".top_icon").text("settings");
      break;
  }
}
