<?php
include 'connection.php';
if (isset($_GET['q'])) {
  $q = $_GET['q'];
  $statement = $con->prepare("select * from people where name like :name or email like :email");
  $statement->execute([
    ':name' => '%'.$q.'%',
    ':email' => '%'.$q.'%',
  ]);
} else {
  $statement = $con->prepare('select * from people');
  $statement->execute();
}
$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All people</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <div class="card mt-2">
          <div class="card-header">
          <h2>Alk people Here</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mx-auto">
                  <form class="my-4" >
                    <div class="input-group">
                      <input type="text" name="q" class="form-control" placeholder="search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-info">Search</button>
                    </div>
                    </div>
                  </form>
              </div>
            </div>
            <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <th>Email</th>
              </tr>
              <?php foreach ($people as $person): ?>
              <tr>
                <td><?= $person->name ?></td>
                <td><?= $person->email ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
      </div>
    </div>
  </body>
</html>
