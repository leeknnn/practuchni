$file = 'guestbook.txt';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $message = htmlspecialchars(trim($_POST['message']));
    if (!empty($message)) {
        $date = date('Y-m-d H:i:s');
        $entry = "$date | $name: $message" . PHP_EOL;
        file_put_contents($file, $entry, FILE_APPEND);
    } else {
        echo "<p style='color:red;'>Повідомлення не може бути порожнім!</p>";
    }
}
if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $last_lines = array_slice($lines, -5); 
    echo "<h3>Останні повідомлення:</h3>";
    echo "<ul>";
    foreach ($last_lines as $line) {
        echo "<li>" . $line . "</li>";
    }
    echo "</ul>";
}