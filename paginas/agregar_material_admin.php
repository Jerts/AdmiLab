<?php
include 'verif_admin_sesion.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="../acciones/crear_practica_a.php" method="post">
      Nombre de la práctica:<br>
      <input type="text" name="id_practica" class="validate" required><br>

      Laboratorio/Materia<br>
      <select name="id_horario" class="validate" required>
        <?php
       session_start();
       $docente=$_SESSION['user_docente'];
       include '../conexion.php';
       mysqli_query($conect,"SET NAMES 'utf8'");
       $consulta = "SELECT horario.ID_HORARIO, laboratorio.NOMBRE, materia.NOMBRE
                     FROM horario
                     INNER JOIN laboratorio ON horario.ID_LABORATORIO = laboratorio.ID_LABORATORIO
                     INNER JOIN materia ON horario.ID_MATERIA = materia.ID_MATERIA
                     WHERE ID_MAESTRO = '".$docente."'";
       $consulta = mysqli_query($conect,$consulta);
       while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
         echo "<option value='".$result[0]."'>Laboratorio: ".$result[1]." | Materia: ".$result[2]."</option>";
       }
       ?>
     </select><br><br><br>

      <div id="materiales">
          Material<br>
          <select id="sel" name="id_material[0]" class="validate" required>
            <?php
              $consulta = "SELECT material.ID_MATERIAL, material.DESCRIPCION, material.CANTIDAD, material.UNIDAD FROM material";
              $consulta = mysqli_query($conect,$consulta);
              while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
                echo "<option value='".$result[0]."'>".$result[1]." | Disponible: ".$result[2]." ".$result[3]."</option>";
              }
            ?>
          </select><br>
          Cantidad a usar:<br>
          <input type="number" name="cantidad_usada[0]" class="validate" required>
          Unidad de medida:<br>
          <select name="unidad[0]" class="validate" required>
            <option value="PIEZA">Pieza</option>
            <option value="CAJA">Caja</option>
          </select><br><br>
      </div>

      <div id="add"></div>

      <div>
        <button type="button" name="button" onclick="add()"class="btn waves-effect waves-light">+</button><br><br>
      </div>

      <input type="submit" style="display:none;" class="form1">
      <a type="submit" class="btn waves-effect waves-light" onclick="$('.form1').click();">Enviar</a>
    </form>
  </body>
</html>
