<html>
<head> 
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    echo "Bem-vindo(a) $nome !<br>";
    echo "Seu endereço de email registrado é: $email";
} else {
    echo "Nenhum dado recebido.";
}
?>

</body>
</head>
</html>