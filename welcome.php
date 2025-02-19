<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    echo "Bem-vindo(a) $name !<br>";
    echo "Seu endereço de email registrado é: $email";
} else {
    echo "Nenhum dado recebido.";
}
?>

</body>
</html>