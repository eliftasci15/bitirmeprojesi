<?php
/* Sürücü isteğiyle bir ODBC veritabanına bağlanalım */
$dsn = 'mysql:dbname=bitirmeproje;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $baglan = new PDO($dsn, $user, $password);
	$baglan->query("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}
 
?>