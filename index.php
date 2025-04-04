$price1 = 200;
$price2 = 150;
$price3 = 100;
echo "Загальна вартість: $total грн/n";

$movies = ["Тіні забутих предків","Камінний хрест","Захар Беркут"];
foreach ($movies as movie) {
	echo "$movie/n"
}

$user = [
"login" => "user1234567890",
"password" => "lrfghepriugh32f",
"email" => "ehgljer@gmail.com"
];
echo "Логін: " . $user ["login"] . "/n";
echo "Пароль: " . $user ["password"] . "/n";
echo "Пошта: " . $user ["email"] . "/n";

if ($total > 500) {
	$discount = $total * 0.10;
	$finalTotal = $total - $discount;
	echo "Знижка 10%: $discount грн/n";
	echo "Підсумкова сума: $finalTotal грн/n";
} else {
	echo "Підсумкова сума без знижки: $total грн/n";
}

$inputLogin = "user1234567890";
$inputPassword = "lrfghepriugh32f";

if ($inputLogin === $user["login"] && $inputPassword === $user["password"]{
	encho "Вхід успішний"!/n;
} else {
	echo "Невірнтй логін або пароль!/n";
}