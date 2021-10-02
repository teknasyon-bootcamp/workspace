<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8" />
<title>PDO Örnek</title>
</head>
<body>
<?php
try {
  $pdo = new PDO("mysql:host=mariadb;dbname=temp_week4", "root", "root");
} catch (PDOException) {
  die("Bağlantı kurulamadı!");
}

$addStatement = $pdo->prepare($addQueryStr);
if (isset($_POST['create'])) {
  $addStatement->bindValue(":name", $_POST['name']);
  $addStatement->bindValue(":surname", $_POST['surname']);
  $addStatement->execute();

  echo "<p>Eklenen ID: {$pdo->lastInsertId()}</p>";
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $deleteQueryStr = "DELETE FROM users WHERE id = :id";
  $delete = $pdo->prepare($deleteQueryStr);
  $delete->bindValue(":id", $id, PDO::PARAM_INT);
  $delete->execute();
}
?>

<h1>Kullanıcı Listesi</h1>
<ul>
<?php
$listele = $pdo->query("SELECT * FROM users");

foreach ($listele->fetchAll(PDO::FETCH_ASSOC) as $item) {
  echo "<li>{$item["id"]} - {$item["name"]} {$item["surname"]}</li>";
}
?>
</ul>

<h1>Kullanıcı Ekle</h1>
<form method="post">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" />

  <label for="surname">Surname</label>
  <input type="text" name="surname" id="surname" />

  <button name="create" type="submit">Create New User</button>
</form>

<h1>Kullanıcı Sil</h1>
<form method="get">
  <label for="id">ID</label>
  <input type="text" name="id" id="id" />

  <button type="submit">Delete User</button>
</form>

</body>
</html>
