<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $age = (int) $_POST['age'];
    $city = htmlspecialchars(trim($_POST['city']));
    if ($name && $age && $city) {
        $_SESSION['profile'] = [
            'name' => $name,
            'age' => $age,
            'city' => $city
        ];
        setcookie('name', $name, time() + (30 * 24 * 60 * 60)); // 30 днів
        header("Location: profile.php");
        exit;
    } else {
        $error = "Заповніть усі поля.";
    }
}
?>
<form method="post">
    <label>Ім'я: <input type="text" name="name" required></label><br>
    <label>Вік: <input type="number" name="age" required></label><br>
    <label>Місто: <input type="text" name="city" required></label><br>
    <button type="submit">Зберегти</button>
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>