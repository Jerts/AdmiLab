<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
  </head>
  <body>
    <div class="card" style="width:90%;margin: 0 auto;">
      <div class="verification green accent-3 card" style="display:none">
        <div class="card-content">
          Se ha guardado su configuracion.
        </div>
      </div>
      <div class="card-content">
        <span class="card-title">Configuracion</span>
        <div class="divider"></div>
        <div class="section">
          <font size="5">Fondo de menu</font>
          <form action="uploadfile.php" class="fileimg" method="post">
            <div class="file-field input-field">
              <div class="btn">
                <span>Foto</span>
                  <input type="file" name="img" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </form>
        </div>
        <div class="divider"></div>
        <div class="section">
          <font size="5">Color del menu</font>
          <table style="width:150px; height:15px !important;" class="z-depth-1 color-table">
            <tr>
              <td id="b0" class="hoverable blue" onclick="pick(0)"></td>
              <td id="b1" class="hoverable red" onclick="pick(1)"></td>
              <td id="b2" class="hoverable green" onclick="pick(2)"></td>
              <td id="b3" class="hoverable purple" onclick="pick(3)"></td>
              <td id="b4" class="hoverable grey" onclick="pick(4)"></td>
            </tr>
            <tr>
              <td id="bs0" class="flecha-campo"></td>
              <td id="bs1" class="flecha-campo"></td>
              <td id="bs2" class="flecha-campo"></td>
              <td id="bs3" class="flecha-campo"></td>
              <td id="bs4" class="flecha-campo"></td>
            </tr>
          </table>
        </div>
        <a onclick="sendConf()" class="btn waves-effect waves-ligth blue">Guardar</a>
      </div>
    </div>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script src="assets/js/config.class.js"></script>
    <script type="text/javascript" src="assets/js/colorpicker.js"></script>
    <script type="text/javascript">
      $("#colorpick-view").attr("class",getCookie("sb_color")+" z-depth-1");
      nCookie(getCookie("sb_color"));
      $(".verification").css("display","none");
    </script>
  </body>
</html>
