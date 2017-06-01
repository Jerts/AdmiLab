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
      str="yellow";
      break;
    case 5:
      str="cyan";
      break;
    case 6:
      str="black";
      break;
    case 7:
      str="grey";
      break;
    case 8:
      str="white";
      break;
  }
  $("#colorpick-view").attr("class",str+" z-depth-1");
}

function sendConf(){
  var con = new config();
  con.color_change(str);
  $(".verification").css("display","inherit");
  $(".fileimg").submit();
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
