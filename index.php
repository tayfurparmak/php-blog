<?php require_once("kullanicidb.php");
require_once("yazidb.php"); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Sayfası</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <div class="container p-3">
    <?php
    if ($_POST && isset($_POST["add"])) {
      Add($_POST["baslik"], $_POST["icerik"]);
      echo "<div class='alert alert-primary'>Kayıt başarılı!</div>";
    }

    if ($_GET && isset($_GET["silId"])) {
      Delete($_GET["silId"]);
      echo "<div class='alert alert-danger'>Kayıt silindi!</div>";
    }

    if ($_POST && isset($_POST["duzenleKaydetId"])) {
      Update($_POST["duzenleKaydetId"], $_POST["baslik"], $_POST["icerik"]);
      echo "<div class='alert alert-primary'>Kayıt başarılı!</div>";
    }
    ?>
    <div class="row">
      <div class="col-6">
        <?php include("yazi_listele.php"); ?>
      </div>
      <div class="col-6">
        <?php
        if ($_GET && isset($_GET["duzenleId"])) {
          $duzenleData = Get($_GET["duzenleId"]);
          include("update.php");
        }
        include("yazi_ekle.php");
        ?>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>
</body>

</html>