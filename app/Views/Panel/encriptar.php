<!-- encriptar.php -->
<?php
$contraseña_admin_1 = "122";
$contraseña_admin_2 = "0202";

$hash_admin_1 = password_hash($contraseña_admin_1, PASSWORD_DEFAULT);
$hash_admin_2 = password_hash($contraseña_admin_2, PASSWORD_DEFAULT);

echo "Contraseña Admin 1: " . $contraseña_admin_1 . "<br>";
echo "Hash Admin 1: " . $hash_admin_1 . "<br>";

echo "Contraseña Admin 2: " . $contraseña_admin_2 . "<br>";
echo "Hash Admin 2: " . $hash_admin_2;
?>
