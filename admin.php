<!DOCTYPE html>
<html>
<head>
    <title>Giriş Sayfası</title>
</head>
<body>
    <?php
    // Veritabanı bağlantısı için gerekli bilgiler
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blogdb";

    // Veritabanına bağlanma
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Bağlantı hatasını kontrol etme
    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    }

    // Form gönderildiğinde çalışacak kod
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Formdan ad ve soyadı alınması
        $ad = $_POST["ad"];
        $soyad = $_POST["soyad"];

        // Ad ve soyadı veritabanına ekleme
        $sql = "INSERT INTO kullanici (ad, soyad) VALUES ('$ad', '$soyad')";

        if ($conn->query($sql) === TRUE) {
            echo "Kayıt başarıyla eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }
    }


    $conn->close();
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="ad">Ad:</label>
        <input type="text" id="ad" name="ad" required><br><br>
        <label for="soyad">Soyad:</label>
        <input type="text" id="soyad" name="soyad" required><br><br>
        <td class="text-end">
                <a class="btn btn-primary" href="index.php" >
                  Gönder
                </a>
               
              </td>
    </form>
</body>
</html>
