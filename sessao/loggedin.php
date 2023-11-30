<?php

//Iniciando a sessão
session_start();

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Definindo o conjunto de caracteres e a escala da tela para dispositivos móveis -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Título da página -->
    <title>Tela de Login com Cookies</title>
    <!-- Incluindo o estilo CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Incluindo o script JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Primeira linha: espaçamento superior -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Segunda linha: -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 25rem;">
                    <div class="card-body">

                        <!-- Título do card -->
                        <br><h3 class="card-title">Olá, seja bem-vindo(a)!</h3><br>

                        <?php

                            // Verifica se os dados da sessão estão definidos
                            if (isset($_SESSION['email'])) {
                                
                                // Obtém e exibe o valor da sessão 'email'
                                $email = $_SESSION['email'];
                                echo "<b>E-mail:</b> $email<br>";

                                // Verifica se a sessão 'senha' está definida
                                if (isset($_SESSION['senha'])) {
                                    
                                    // Obtém e exibe o valor da sessão 'senha'
                                    $password = $_SESSION['senha'];
                                    echo "<b>Senha:</b> $password";
                                } 
                            
                                else {
                                    echo "Senha não disponível";
                                }
                            }   
                        
                            else {
                                echo "Dados de sessão não encontrados.";
                            }

                        ?>
                        
                        <!-- Botão para encerrar a sessão -->
                        <br><br><a href="logout.php" class="btn btn-primary">Voltar</a><br>
                    </div>
                </div>
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Terceira linha: espaçamento inferior -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

</body>

</html>
