<?php
session_start();
if(!isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: logdocente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <div style="width:70%; margin: 0 auto;">

      <div style="display:inline-block">
        <ul>
          <li><a href="index_docente.php">Inicio</a></li>
          <li><a href="horario_docente.php">Mi horario</a></li>
          <li><a href="practicas_docente.php">Practicas</a></li>
        </ul>
      </div>

      <div>
        <?php
          include '../conexion.php'; //$conect
          mysqli_query($conect,"SET NAMES 'utf8'");
          $practica = $_GET['practica'];
          $docente = "SELECT DISTINCT(horario.ID_MAESTRO)
                      FROM material_practica
                      INNER JOIN horario ON material_practica.ID_HORARIO = horario.ID_HORARIO WHERE material_practica.ID_PRACTICA = '{$practica}'";

          $tecnico = "SELECT DISTINCT(tecnico.`NOMBRE(S)`)
                      FROM material_practica
                      INNER JOIN tecnico ON material_practica.ID_TECNICO = tecnico.ID_TECNICO WHERE material_practica.ID_PRACTICA = '{$practica}'";

          $lista = "SELECT material.DESCRIPCION, material_practica.CANTIDAD_USADA, material_practica.UNIDAD
                       FROM material_practica
                       INNER JOIN material ON material_practica.ID_MATERIAL = material.ID_MATERIAL WHERE material_practica.ID_PRACTICA = '{$practica}'";

          $docente = mysqli_query($conect,$docente);
          $docente = mysqli_fetch_array($docente,MYSQLI_BOTH);

          $tecnico = mysqli_query($conect,$tecnico);
          $tecnico = mysqli_fetch_array($tecnico,MYSQLI_BOTH);

          $lista = mysqli_query($conect,$lista);

          echo "<table border='1px'>
                  <tr>
                    <td colspan='3'>Practica: ".$practica."</td>
                  </tr>
                  <tr>
                    <td colspan='3'>Docente: ".$docente[0]."</td>
                  </tr>
                  <tr>
                    <td colspan='3'>Tecnico: ".$tecnico[0]. "</td>
                  </tr>
                  <tr>
                    <td>Material</td>
                    <td>Cantidad</td>
                    <td>Unidad</td>
                  </tr>";
          while ($result = mysqli_fetch_array($lista, MYSQLI_BOTH)) {
            echo "<tr>
                    <td>".$result[0]."</td>
                    <td>".$result[1]."</td>
                    <td>".$result[2]."</td>
                  </tr>";
          }
          echo "</table>";
        ?>
         <br>
         <a href="crear_practica.php">Añadir una nueva practica</a>
      </div>

    </div>

  </body>
</html>
