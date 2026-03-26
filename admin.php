<?php
session_start();

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Kullanıcı adı veya şifre yanlış!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Giriş</title>
</head>
<body>

<h2>Admin Giriş</h2>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST">
    <input type="text" name="username" placeholder="Kullanıcı Adı" required><br><br>
    <input type="password" name="password" placeholder="Şifre" required><br><br>
    <button type="submit">Giriş Yap</button>
</form>

</body>
</html>
