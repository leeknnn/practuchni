<?php
session_start();
if (!isset($_SESSION['profile'])) {
    header("Location: edit_profile.php");
    exit;
}
$profile = $_SESSION['profile'];
?>
<h2>Ваш профіль:</h2>
<p>Ім'я: <?= htmlspecialchars($profile['name']) ?></p>
<p>Вік: <?= $profile['age'] ?></p>
<p>Місто: <?= htmlspecialchars($profile['city']) ?></p>
<a href="edit_profile.php">Редагувати профіль</a><br>
<a href="logout.php">Вийти</a>