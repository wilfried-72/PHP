<!-- 
    Page Get Index
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- import css bootstrap -->
  <link href="./front/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- import js bootstrap -->
  <script src="./front/assets/css/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <h3>PHP CRUD Grid</h3>
    </div>
    <div class="row">
      <p>
        <!-- Liens vers la page Create -->
        <a href="./front/pages/create.php" class="btn btn-success">Create</a>
      </p>

      <table class="table table-striped table-bordered">
        <!-- Headers de notre tableau -->
        <thead>
          <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>Mobile Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <!-- Corp de notre tableau -->
        <tbody>
          <!-- Script php : Boucle pour récupérer les customers dans la base de données -->
          <?php
          // import de la connexion Connexion à la DB
          include './back/src/databases/database.php';
          // Appel de la class Database et de ça fontion connect()
          $pdo = Database::connect();
          // Script SQL : Selectionne moi tout dans customers trier par id dans l'ordre décroissant
          $sql = 'SELECT * FROM customers ORDER BY id DESC';
          // Boucle php avec la construction html
          foreach ($pdo->query($sql) as $row) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['mobile'] . '</td>';
            echo '<td width=250>';
            echo '<a class="btn" href="read.php?id=' . $row['id'] . '">Read</a>';
            echo ' ';
            echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';
            echo ' ';
            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '">Delete</a>';
            echo '</td>';
            echo '</tr>';
          }
          // Appel de la class Database et de ça fontion disconnect()
          Database::disconnect();
          ?>
        </tbody>
      </table>
    </div>
  </div> <!-- /container -->
</body>

</html>