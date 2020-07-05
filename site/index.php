<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Facts about Bulgaria</title>
  </head>
  <body>
    <div align="center">
      <h1>Facts about Bulgaria</h1>
      <img src="bulgaria-map.png" />
      <table>
        <tr>
          <td>Area</td>
          <td></td>
          <td>110 993.6 sq.km.</td>
        </tr>
        <tr>
          <td>Population</td>
          <td></td>
          <td>7 101 859</td>
        </tr>
        <tr>
          <td>Capital</td>
          <td></td>
          <td>Sofia</td>
        </tr>
      </table>
      <br />
      <h1>Big cities</h1>
      <table>
<?php
   $database = "bulgaria";
   $user = "root";
   $password  = "Exam-2020-05";
   $host = "dob-mariadb";

   try {
      $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
      $query = $connection->query("SELECT city_name, population FROM cities ORDER BY population DESC");
      $cities = $query->fetchAll();

      if (empty($cities)) {
         echo "<tr><td>No data.</td></tr>\n";
      } else {
         foreach ($cities as $city) {
            print "<tr><td>{$city['city_name']}</td><td align=\"right\">{$city['population']}</td></tr>\n";
         }
      }
   }
   catch (PDOException $e) {
      print "<tr><td>No connection to the database. Please try again later.</td></tr>\n";
   }
?>
      </table>
    </div>
  </body>
</html>
