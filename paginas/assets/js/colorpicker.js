var newCookie;
var str="";
function pick(num){
  switch (num) {
    case 0:
      str="blue";
      break;
    case 1:
      str="red";
      break;
    case 2:
      str="green";
      break;
    case 3:
      str="purple";
      break;
    case 4:
      str="grey";
      break;
  }
  $(".flecha-campo").css("background-image","");
  $(".flecha-campo").css("background-size", "30px 30px");
  $("#bs"+num).css("background-image", "url(http://gcmhp.com/ar/images/top.png)");
}

$("#b0").mouseenter(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color","blue");
}).mouseleave(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color",newCookie);
});

$("#b1").mouseenter(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color","red");
}).mouseleave(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color",newCookie);
});

$("#b2").mouseenter(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color","green");
}).mouseleave(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color",newCookie);
});

$("#b3").mouseenter(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color","purple");
}).mouseleave(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color",newCookie);
});

$("#b4").mouseenter(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color","grey");
}).mouseleave(function() {
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color",newCookie);
});

function sendConf(){
  var con = new config();
  var parentw = window.parent.document.getElementById("menulat");
  parentw.setAttribute("data-color",str);
  newCookie = str;
  con.color_change(str);
  $(".verification").css("display","inherit");
}

function nCookie(name){
  newCookie = name;
}

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}
