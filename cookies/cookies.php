<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cookie_name = $_POST['login'];
    $cookie_value = $_POST['senha'];

    // Define o cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulario com bootstrap</title>
</head>

<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<div>
    <form method="post">
        <h1>Faça o Login</h1>
        <input type="text" name="login" placeholder="Nome">
        <input type="password" name="senha" placeholder="Senha">
        <button class="botao" type="submit" name="acao">Acessar</button>
    </form>
    </div>
</body>

</html>