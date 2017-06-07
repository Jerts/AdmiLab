class config {
  constructor() {
    var parentw = window.parent.document.getElementById("menulat");
    var image = parentw.getAttribute("data-image");
    $(".actualimg").attr("src",image);
  }

  color_change(color){
    document.cookie = 'sb_color='+color;
  }

  getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
  }

  sendConf(){
    $(".verification").css("display","inherit");
    $(".fileimg").submit();
  }
}
