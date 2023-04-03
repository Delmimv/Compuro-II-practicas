<table>

  <tr>

    <th>Vehículo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Placas</th>

  </tr>
  
  <?php
    // Datos de los autobuses
    $autobuses = array(
      array("Autobús uno", "Marca A", "Modelo 1", "DCV-123"),
      array("Autobús dos", "Marca B", "Modelo 2", "MDN-456"),
      array("Autobús tres", "Marca C", "Modelo 3", "XE-789"),
      array("Autobús cuatro", "Marca D", "Modelo 4", "KI-012"),
      array("Autobús Cinco", "Marca E", "Modelo 5", "L-345")
    );
    
    // Datos de los taxis
    $taxis = array(
      array("Taxi uno", "Marca F", "Modelo 6", "ARF-678"),
      array("Taxi dos", "Marca G", "Modelo 7", "MO-901"),
      array("Taxi tres", "Marca H", "Modelo 8", "VWX-234"),
      array("Taxi cuatro", "Marca I", "Modelo 9", "YZA-567"),
      array("Taxi cinco", "Marca J", "Modelo 10", "BCD-890")
    );
    
    // Se mostraran los datos de los autobuses en la tabla
    foreach($autobuses as $vehiculo) {
      echo "<tr>";
      echo "<td>".$vehiculo[0]."</td>";
      echo "<td>".$vehiculo[1]."</td>";
      echo "<td>".$vehiculo[2]."</td>";
      echo "<td>".$vehiculo[3]."</td>";
      echo "</tr>";
    }
    
    // se mostraran los datos de los taxis en la tabla
    foreach($taxis as $vehiculo) {
      echo "<tr>";
      echo "<td>".$vehiculo[0]."</td>";
      echo "<td>".$vehiculo[1]."</td>";
      echo "<td>".$vehiculo[2]."</td>";
      echo "<td>".$vehiculo[3]."</td>";
      echo "</tr>";
    }
  ?>
</table>
